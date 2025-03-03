<?php
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
require dirname( __FILE__ ) . '/vendor/autoload.php';

class Chat implements MessageComponentInterface {
    private $connections =  [];
    function onOpen(ConnectionInterface $conn)
    {
        echo "Connected new client with Id:".$conn->resourceId."\n";
        $this->connections[] = $conn;
        echo count($this->connections)." active connections\n";
    }
    function onClose(ConnectionInterface $conn)
    {
        echo "Closing Connection with Id:".$conn->resourceId."\n";
        foreach ($this->connections as $key => $connection) {
            if ($connection->resourceId == $conn->resourceId) {
                $connection->close();
                array_splice($this->connections, $key, 1);
                break;
            }
        }
        echo count($this->connections)." active connections\n";
    }
    function onError(ConnectionInterface $conn, \Exception $e)
    {
        echo "Error: ".$e->getMessage()."\n";
        echo "Closing Connection with Id:".$conn->resourceId."\n";
        foreach ($this->connections as $key => $connection) {
            if ($connection->resourceId == $conn->resourceId) {
                array_splice($this->connections, $key, 1);
                break;
            }
        }
        $conn->close();
        echo count($this->connections)." active connections\n";
    }
    // function onMessage(ConnectionInterface $from, $msg)
    // {
    //     echo "Message: ".$msg."\nreceived from ".$from->resourceId."\n";
    // }

    function onMessage(ConnectionInterface $from, $msg)
    {
        echo "Message: ".$msg."\nreceived from ".$from->resourceId."\n";
        echo "Sending message to all clients\n";
        foreach ($this->connections as $conn){
            if($conn->resourceId!=$from->resourceId){
                // To all clients except sender
                //$conn->send('Message Received On Server: '. $msg);
                $conn->send($msg);
            }
        }
        // To sender
        //$from->send('Message Received On Server:'. $msg);
    }
    // function onMessage(ConnectionInterface $from, $msg)
    // {
    //     foreach ($this->connections as $conn){
    //         if($conn->resourceId!=$from->resourceId){
    //             $conn->send($msg);
    //         }
    //     }
    //     echo "Message: ".$msg."\nreceived from ".$from->resourceId."\n";
    // }

    public function msgToUser($msg, $id) {
        foreach ($this->connections as $conn){
            if ($conn->resourceId == $id) {
                $conn->send($msg);
                break;
            }
        }
    }
}

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
//use MyApp\Socket;

//require dirname( __FILE__ ) . '/vendor/autoload.php';


$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);
$server->run();