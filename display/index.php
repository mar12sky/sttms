<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/custom.css">
  <script src="./js/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">

  <style>
    .self-center {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .red-border-bottom {
      border-bottom: 5px solid red;
    }

    .red-border-top {
      border-top: 5px solid red;
    }

    .tox-promotion {
      display: none;
    }

    .scrollable-container {
      height: 300px;
      overflow: scroll;
    }

    .my-inline-editor {
      margin: 12px;

    }

    .tox-tinymce-inline {
      z-index: 999999;
    }
  </style>
</head>

<body style="min-height:500px;">
  <?php
  $mode = $_GET['mode'];
  $name = $_GET['inchair'];
  $subject = $_GET['subject'];
  $agenda_id = $_GET['agenda_id'];
  $speaking = <<<HEREDOC
<header class="container-fluid red-border-bottom top_details">
        <!-- <span class="align-middle d-block">middle</span> -->
        <!-- <h1 class="d-block self-center align-middle">AGENDA : BILL FOR INTRODUCTION</h1> -->
        <h1 class="font-weight-bold tinymce-body"><span style="" class="text-danger font-weight-bold">SPEAKING</span> : "$subject"</h1>
    </header>
    <!-- main -->    
    <div class="container-fluid">
        <!-- Deligate details-->
        <div class="row red-border-bottom details_height">
            <table class="table table-bordered">                
                <tbody>
                  <tr>
                    <th scope="row" rowspan="3" class="col-2">
                        <img id="Spkimg" src="../pics/no-pic.png" alt="Name in English" class="gray-border img-fluid align-middle pic_size">
                    </th>
                    <td scope="row" class="col-10"><h1 id="Hname" class="font-weight-bold">हिंदी में नाम</h1></td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1 id="Name" class="font-weight-bold">Name in English</h1></th>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1><span id="FParty">Name of Party</span>, <span id="State" style="text-transform:Capitalize">State</span></h1></th>
                    
                </tbody>
              </table>
        </div>
</div>            
    <div class="container-fluid">        
        <!-- Deligate details-->
        <!-- time details -->        
        <div class="row time_details">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <td scope="col" class="col-2 pl-5"><h1 style="font-weight: bold;">DIV. <span id="Div">001</span></h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">TIME</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">SPOKEN</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;"></h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;"></h1></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="col"><h1><span id="MyDateDisplay" class="deligate-details" style="font-weight: bold;">12-01-2025</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;">MEMBER</h1></td>
                    <td scope="col"><h1 id="spk-spoken">00:00:00</h1></td>
                    <td scope="col"><h1></h1><div id="controls">
                        <button class="btn d-none" onclick="startTimer()"><i class="fas fa-play"></i></button>
                        <button class="btn d-none" onclick="pauseTimer()"><i class="fas fa-pause"></i></button>
                    </div></td>
                    <td scope="col"><h1></h1></td>
    
                  </tr>
                  <tr>
                    <td scope="col"><h1><span id="MyClockDisplay" class="deligate-details font-weight-bold">15:20</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;"></h1></td>
                    <td scope="col"><h1></h1></td>
                    <td scope="col"><h1></h1></td>
                    <td scope="col"><h1></h1></td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
           
        </div>    
        <!-- time details -->
    </div>
    <!-- main -->
    <footer>
        <div class="container-fluid fixed-bottom red-border-top chair_details" style=" height: 15vh; background-color: #546a83;">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-white d-none" id="chairMessage"></h1>
                    <h1 class="text-center text-white tinymce-body">In the Chair : "$name"</h1>
                </div>
            </div>
        </div>
    </footer>

HEREDOC;
  $discussion = <<<HEREDOC
<header class="container-fluid red-border-bottom top_details">
        <!-- <span class="align-middle d-block">middle</span> -->
        <!-- <h1 class="d-block self-center align-middle">AGENDA : BILL FOR INTRODUCTION</h1> -->
        <h1 class="font-weight-bold tinymce-body"><span class="text-danger font-weight-bold">DISCUSSION</span> : "$subject"</h1>
    </header>
    <!-- main -->    
    <div class="container-fluid">
        <!-- Deligate details-->
        <div class="row red-border-bottom details_height">
            <table class="table table-bordered">                
                <tbody>
                  <tr>
                    <th scope="row" rowspan="3" class="col-2">
                        <img id="Spkimg" src="../pics/no-pic.png" alt="Name in English" class="gray-border img-fluid align-middle pic_size">
                    </th>
                    <td scope="row" class="col-10"><h1 id="Hname" class="font-weight-bold">हिंदी में नाम</h1></td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1 id="Name" class="font-weight-bold">Name in English</h1></th>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1><span id="FParty">Name of Party</span>, <span id="State" style="text-transform:Capitalize">State</span><input class="d-none" type="number" id="incrementUpInput" placeholder="Increment Up (seconds)" />
    <button class="d-none" id="incrementUp">Increment Up</button><input class="d-none" type="number" id="incrementDownInput" placeholder="Increment Down (seconds)" />
        <button class="d-none" id="incrementDown">Increment Down</button><button id="start" class="btn"><i class="fas fa-play"></i></button>
    <button id="pause" class="btn"><i class="fas fa-pause"></i></button></h1></th>
                    
                </tbody>
              </table>
        </div>
</div>            
    <div class="container-fluid">        
        <!-- Deligate details-->
        <!-- time details -->        
        <div class="row time_details">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <td scope="col" class="col-2 pl-5"><h1 style="font-weight: bold;">DIV. <span id="Div">001</span></h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">TIME</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">ALLOTTED</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">SPOKEN</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">REMAINING</h1></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="col"><h1><span id="MyDateDisplay" class="deligate-details" style="font-weight: bold;">12-01-2025</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;">MEMBER</h1></td>
                    <td scope="col"><h1 id="alloted">00:13:00</h1></td>
                    <td scope="col"><h1 id="spoken">00:00:00</h1></td>
                    <td scope="col"><h1 id="remaining">00:00:00</h1></td>
                  </tr>
                  <tr>
                    <td scope="col"><h1><span id="MyClockDisplay" class="deligate-details font-weight-bold">15:20</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;">PARTY '<span id="Party"></span>'</h1></td>
                    <td scope="col"><h1 id="partyTime">01:00:00</h1></td>
                    <td scope="col"><h1 id="pspoken">00:00:00</h1></td>
                    <td scope="col"><h1 id="premaining">00:60:00</h1></td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
          
        </div>    
        <!-- time details -->
    </div>
    <!-- main -->
    <footer>
        <div class="container-fluid fixed-bottom red-border-top chair_details" style=" height: 15vh; background-color: #546a83;">
            <div class="row">
                <div class="col-md-12">
                   <h1 class="text-center text-white d-none" id="chairMessage"></h1>
                    <h1 class="text-center text-white tinymce-body">In the Chair : "$name"</h1>
                </div>
            </div>
        </div>
    </footer>
   
HEREDOC;
  $zerohours = <<<HEREDOC
<header class="container-fluid red-border-bottom top_details">
        <!-- <span class="align-middle d-block">middle</span> -->
        <!-- <h1 class="d-block self-center align-middle">AGENDA : BILL FOR INTRODUCTION</h1> -->
        <h1 class="font-weight-bold tinymce-body"><span class="font-weight-bold text-danger">ZERO HOURS</span> </h1>
    </header>
    <!-- main -->    
    <div class="container-fluid">
        <!-- Deligate details-->
        <div class="row red-border-bottom details_height">
            <table class="table table-bordered">                
                <tbody>
                  <tr>
                    <th scope="row" rowspan="3" class="col-2">
                        <img id="Spkimg" src="../pics/no-pic.png" alt="Name in English" class="gray-border img-fluid align-middle pic_size">
                    </th>
                    <td scope="row" class="col-10"><h1 id="Hname" class="font-weight-bold">हिंदी में नाम</h1></td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1 id="Name" class="font-weight-bold">Shri Name in English</h1></th>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1><span id="FParty">Name of Party</span>, <span id="State" style="text-transform:Capitalize">State</span></h1></th>
                    
                </tbody>
              </table>
        </div>
</div>            
    <div class="container-fluid">        
        <!-- Deligate details-->
        <!-- time details -->        
        <div class="row time_details">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <td scope="col" class="col-2 pl-5"><h1 style="font-weight: bold;">DIV. <span id="Div">001</span></h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">TIME</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">ALLOTTED</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">SPOKEN</h1></td>
                    <td scope="col" class="col-2"><h1 style="font-weight: bold;">REMAINING</h1></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="col"><h1><span id="MyDateDisplay" class="deligate-details" style="font-weight: bold;">00-00-0000</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;">MEMBER</h1></td>
                    <td scope="col"><h1 id="zero-alloted">00:00:00</h1></td>
                    <td scope="col"><h1 id="zero-counterUp">00:00:00</h1></td>
                    <td scope="col"><h1 id="zero-counterDown">00:00:00</h1></td>
                  </tr>
                  <tr>
                    <td scope="col"><h1><span id="MyClockDisplay" class="deligate-details font-weight-bold">00:00</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;"></h1></td>
                    <td scope="col"><h1 id="partyTime"></h1></td>
                    <td scope="col"><h1></h1><button class="btn d-none" id="start"><i class="fas fa-play"></i></button>
                    <button class="btn d-none" id="pause"><i class="fas fa-pause"></i></button></td>
                    <td scope="col"><h1></h1></td>
                  </tr>
                 
                </tbody>
              </table>
        </div>
            
        </div>    
        <!-- time details -->
    </div>
    <!-- main -->
    <footer>
        <div class="container-fluid fixed-bottom red-border-top chair_details" style=" height: 15vh; background-color: #546a83;">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center text-white d-none" id="chairMessage"></h1>
                    <h1 class="text-center text-white tinymce-body">In the Chair : "$name"</h1>
                </div>
            </div>
        </div>
    </footer>
    
    
HEREDOC;
  ?>

  <?php
  switch ($mode) {
    case 'zero-hours':
      echo $zerohours;
      break;
    case 'discussion':
      echo $discussion;
      break;
    case 'speaking':
      echo $speaking;
      break;
    default:
      echo $discussion;
  }
  ?>

  <script src="./js/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="./js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
  <script src="./js/script.js"></script>
  <?php
  $scriptzerohours = <<<HEREDOC
  <script>
    //alert('Zero Hours');
     let secondsUp = 0;
        let secondsDown = 0; // 10 minutes in seconds
        let intervalId = null;
        let pauseStaus = false;
        var alltime = 0;
        var del_id = 0;
        var agenda_id =$agenda_id;
        var fd = new FormData(); 

        const counterUpElement = document.getElementById('zero-counterUp');
        const counterDownElement = document.getElementById('zero-counterDown');
        const startButton = document.getElementById('start');
        const pauseButton = document.getElementById('pause');

        const socket = new WebSocket('ws://localhost:8080');
        
        function Toggleplay(){
          if(pauseStaus===false){
            pauseCounting();
            pauseStaus = true;
          } else {
            startCounting();
            pauseStaus = false;
          }
        }
        function formatTime(seconds) {
            const hours = String(Math.floor(seconds / 3600)).padStart(2, '0');
            const minutes = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
            const secs = String(seconds % 60).padStart(2, '0');
            return hours + ':' + minutes + ':' + secs;
            
        }

        function updateTimers() {
            counterUpElement.textContent = formatTime(secondsUp);
            counterDownElement.textContent = formatTime(secondsDown);
        }

        function startCounting() {
            if (intervalId === null) {
                intervalId = setInterval(() => {
                    secondsUp += 1;
                    secondsDown = Math.max(0, secondsDown - 1);
                    updateTimers();
                }, 1000);
            }
        }

        function pauseCounting() {
            if (intervalId !== null) {
                clearInterval(intervalId);
                intervalId = null;
            }
        }

        function resetCounting() {
            pauseCounting(); // Stop the timer if it's running
            secondsUp = 0;
            secondsDown = 0; // Reset to 10 minutes
            document.getElementById('zero-alloted').innerHTML = '00:00:00';
            document.getElementById('zero-counterDown').innerHTML = '00:00:00';
            updateTimers();
        }
        function incrementCounterDown() {
            const incrementValue = parseInt(incrementDownInput.value) || 0;
            secondsDown += incrementValue;
            updateTimers();
        }
                
        startButton.addEventListener('click', startCounting);
        pauseButton.addEventListener('click', pauseCounting);

        updateTimers(); // Initialize the timers on page load
        socket.addEventListener('message', (event) => {
            const data = JSON.parse(event.data);          
            if (data.type === 'incrementUp') {
                secondsUp += data.value;
            } else if (data.type === 'incrementDown') {             
             document.getElementById('zero-alloted').innerHTML = formatTime(alltime += parseInt(data.value));
                secondsDown += data.value;
                //alert(data.time[1]*60);                                                
            }else if (data.action === 'start'){
            secondsDown = data.time[1]*60;
           alltime = data.time[1]*60; 
           document.getElementById('zero-alloted').innerHTML = formatTime(alltime);
           startCounting();
           document.getElementById('Name').innerHTML = data.spk[0];
             document.getElementById('Hname').innerHTML = data.spk[1];
             document.getElementById('FParty').innerHTML = data.spk[2];
             document.getElementById('State').innerHTML = data.spk[3];
             document.getElementById('Div').innerHTML = data.spk[4];
             del_id = document.getElementById('Div').innerHTML = data.spk[5];
             //document.getElementById('Party').innerHTML = data.time[0];
            
            }else if (data.action === 'pause'){            
            Toggleplay();
            } else if (data.action === 'stop'){
             pauseCounting();
             saveLog(agenda_id, del_id, alltime, secondsDown);            
            //alert(formatTime(secondsDown));
             resetCounting();
            } else if (data.action == 'message') {
             const messagesDisplay = document.getElementById('chairMessage');
             messagesDisplay.innerHTML = data.data;
             $('#chairMessage').removeClass('d-none');
             $('#chairMessage').addClass('d-block');
             $('#chairMessage').addClass('d-none');
         } else if (data.action === 'details'){
          //alert(data);
             

         }

            updateTimers();
          
        });

        function saveLog(w,x,y,z){
                          fd.append('agenda_id', w);
                          fd.append('delegate_id', x);
                          fd.append('time_allotted', y);
                          fd.append('time_taken', z);
                          fetch("/save-zero-hours-log.php",
                                {
                                  method: 'POST',
                                  // mode : 'same-origin',
                                  // credentials: 'same-origin' ,
                                  body: fd
                                })
                                .then(function (response) {
                                  return response.text()
                                }).then(function (text) {
                                  //text is the server's response              
                                  //alert(text);
                                  
                                });
                        }  
        
        // WebSocket connection error handling
        socket.addEventListener('error', (event) => {
            console.error('WebSocket error: ', event);
        });

        // WebSocket connection closure handling
        socket.addEventListener('close', (event) => {
            console.log('WebSocket connection closed: ', event);
        });
  </script>
  HEREDOC;
  $scriptdiscussion = <<<HEREDOC
    <script>
    //alert('Discussion');
        var timer = 780;
        var partytimer = 3600;
        let secondsUp = 0;
        let secondsDown = timer; //60; // 10 minutes in seconds
        let psecondsUp = 0;
        let psecondsDown = partytimer; //60; // 10 minutes in seconds
        let intervalId = null;

        const counterUpElement = document.getElementById('spoken');
        const counterDownElement = document.getElementById('remaining');
        const counterUpElementp = document.getElementById('pspoken');
        const counterDownElementp = document.getElementById('premaining');
        const startButton = document.getElementById('start');
        const pauseButton = document.getElementById('pause');
        const incrementUpButton = document.getElementById('incrementUp');
        const incrementDownButton = document.getElementById('incrementDown');
        const incrementUpInput = document.getElementById('incrementUpInput');
        const incrementDownInput = document.getElementById('incrementDownInput');

        // Initialize WebSocket connection
        const socket = new WebSocket('ws://localhost:8080'); // Replace with your WebSocket server URL

        function formatTime(seconds) {
            const hours = String(Math.floor(seconds / 3600)).padStart(2, '0');
            const minutes = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
            const secs = String(seconds % 60).padStart(2, '0');
            return hours + ':' + minutes + ':' + secs;
            
        }

        function updateTimers() {
            counterUpElement.textContent = formatTime(secondsUp);
            counterDownElement.textContent = formatTime(secondsDown);
            counterUpElementp.textContent = formatTime(psecondsUp);
            counterDownElementp.textContent = formatTime(psecondsDown);
        }

        function startCounting() {
            if (intervalId === null) {
                intervalId = setInterval(() => {
                    if ((secondsUp >= timer) && (psecondsUp >= partytimer)){ //(secondsUp >= secondsDown) {
                        pauseCounting();
                        alert('Time is up!');
                    } else {
                        secondsUp += 1;
                        psecondsUp += 1;
                        secondsDown = Math.max(0, secondsDown - 1);
                        psecondsDown = Math.max(0, psecondsDown - 1);
                        updateTimers();
                    }
                }, 1000);
            }
        }

        function pauseCounting() {
            if (intervalId !== null) {
                clearInterval(intervalId);
                intervalId = null;
            }
        }

        function incrementCounterUp() {
            const incrementValue = parseInt(incrementUpInput.value) || 0;
            socket.send(JSON.stringify({ type: 'incrementUp', value: incrementValue }));
        }

        function incrementCounterDown() {
            const incrementValue = parseInt(incrementDownInput.value) || 0;
            socket.send(JSON.stringify({ type: 'incrementDown', value: incrementValue }));
        }

        startButton.addEventListener('click', startCounting);
        pauseButton.addEventListener('click', pauseCounting);
        incrementUpButton.addEventListener('click', incrementCounterUp);
        incrementDownButton.addEventListener('click', incrementCounterDown);

        updateTimers(); // Initialize the timers on page load

        // WebSocket message handling
        socket.addEventListener('message', (event) => {
            const data = JSON.parse(event.data);
            //alert(data);
            if (data.type === 'incrementUp') {
                secondsUp += data.value;
            } else if (data.type === 'incrementDown') {
                secondsDown += data.value;
            } else if (data.action === 'start'){
            startCounting();
            }else if (data.action === 'pause'){
            pauseCounting();
            } else if (data.action === 'stop'){
            //alert("STop counting");
            }
            updateTimers();
            }
        });

        // WebSocket connection error handling
        socket.addEventListener('error', (event) => {
            console.error('WebSocket error: ', event);
        });

        // WebSocket connection closure handling
        socket.addEventListener('close', (event) => {
            console.log('WebSocket connection closed: ', event);
        });
    </script>
    HEREDOC;

  $scriptspeaking = <<<HEREDOC
      <script>
      //alert('Speaking');
        const ws = new WebSocket('ws://localhost:8080');
        var del_id = 0;
        var agenda_id =$agenda_id;
        var fd = new FormData();
        let maxTime = 600 * 60; // 30 minutes in seconds
        let currentTime = 0;
        let timerInterval;
        let isPaused = true;

        ws.onmessage = function (event) {
            const data = JSON.parse(event.data);
            if (data.action === 'stop') {
            //alert(currentTime);
            saveLog(agenda_id, del_id, 0, currentTime);
                //startTimer();
            } else if (data.action === 'pause') {
             //alert("pause");
                Toggleplay();
                
            } else if (data.action === 'start'){
            //alert(data.spk);
             document.getElementById('Name').innerHTML = data.spk[0];
             document.getElementById('Hname').innerHTML = data.spk[1];
             document.getElementById('FParty').innerHTML = data.spk[2];
             document.getElementById('State').innerHTML = data.spk[3];
             document.getElementById('Div').innerHTML = data.spk[4];
             del_id = document.getElementById('Div').innerHTML = data.spk[5];
             //document.getElementById('Party').innerHTML = data.time[0];
             startTimer();

         }
        };

        function updateTimer() {
            const hours = Math.floor(currentTime / 3600);
            const minutes = Math.floor((currentTime % 3600) / 60);
            const seconds = currentTime % 60;
            document.getElementById('spk-spoken').innerHTML = hours. toString() . padStart(2, '0') + ':' + minutes. toString() . padStart(2, '0') + ':' + seconds. toString() . padStart(2, '0');
            //console.log(hours. toString() . padStart(2, '0') + ':' + minutes. toString() . padStart(2, '0') + ':' + seconds. toString() . padStart(2, '0'));
        }
      function resetCounting() {
          pauseCounting(); // Stop the timer if it's running          
          document.getElementById('spk-spoken').innerHTML = '00:00:00';          
          updateTimers();
      }
        function startTimer() {
            if (isPaused) {
                isPaused = false;
                timerInterval = setInterval(() => {
                    if (!isPaused) {
                        if (currentTime < maxTime) {
                            currentTime++;
                            updateTimer();
                        } else {
                            clearInterval(timerInterval);
                            alert("Time's up!");
                        }
                    }
                }, 1000);
            }
        }
        function Toggleplay(){
          if(isPaused===false){
            pauseTimer();
            isPaused = true;
          } else {
            startTimer();
            isPaused = false;
          }
        }
        function pauseTimer() {
            isPaused = true;
            clearInterval(timerInterval);
        }

        updateTimer();
        function saveLog(w,x,y,z){
            fd.append('agenda_id', w);
            fd.append('delegate_id', x);
            fd.append('time_allotted', 0);
            fd.append('time_taken', z);
            fetch("/save-zero-hours-log.php",
                  {
                    method: 'POST',
                    // mode : 'same-origin',
                    // credentials: 'same-origin' ,
                    body: fd
                  })
                  .then(function (response) {
                    return response.text()
                  }).then(function (text) {
                    //text is the server's response              
                    alert(text);
                    
                  });
          }
      </script>
      HEREDOC;
  ?>
  <?php
  switch ($mode) {
    case 'zero-hours':
      echo $scriptzerohours;
      break;
    case 'discussion':
      echo $scriptdiscussion;
      break;
    case 'speaking':
      echo $scriptspeaking;
      break;
    default:
      echo $scriptdiscussion;
  }
  ?>

</body>

</html>