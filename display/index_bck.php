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
    <script src="./js/timer.js"></script>
    <!-- <script src="./plugins/tinymce/tinymce.min.js"></script> -->
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

    #MyDateDisplay,
    #MyClockDisplay {
        /* font-size: 1.2rem; */
    }

    /* .display-4{
            font-size: calc(100% + 1vw + 1vh)!important;
        } */
    </style>
</head>

<body style="min-height:500px;">
    <?php
  $mode = $_GET['mode'];
  $name = $_GET['inchair'];
  $subject = $_GET['subject'];
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
                    <td scope="col"><h1>00:00:00</h1></td>
                    <td scope="col"><h1></h1></td>
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
                    <td scope="col"><h1><span id="MyDateDisplay" class="deligate-details" style="font-weight: bold;">12-01-2025</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;">MEMBER</h1></td>
                    <td scope="col"><h1 id="alloted">00:00:00</h1></td>
                    <td scope="col"><h1 id="spoken">00:00:00</h1></td>
                    <td scope="col"><h1 id="remaining">00:00:00</h1></td>
                  </tr>
                  <tr>
                    <td scope="col"><h1><span id="MyClockDisplay" class="deligate-details font-weight-bold">15:20</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;">PARTY '<span id="Party"></span>'</h1></td>
                    <td scope="col"><h1 id="partyTime">00:00:00</h1></td>
                    <td scope="col"><h1 id="pspoken">00:00:00</h1></td>
                    <td scope="col"><h1 id="premaining">00:00:00</h1></td>
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
                    <td scope="row" class="col-10"><h1 id="Name" class="font-weight-bold">Shri Name in English</h1></td>
                    
                  </tr>
                  <tr>
                    <th scope="row"><h1 id="Hname" class="font-weight-bold">हिंदी में नाम</h1></th>
                    
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
                    <td scope="col"><h1 id="alloted">00:00:00</h1></td>
                    <td scope="col"><h1>00:00:00</h1></td>
                    <td scope="col"><h1>00:00:00</h1></td>
                  </tr>
                  <tr>
                    <td scope="col"><h1><span id="MyClockDisplay" class="deligate-details font-weight-bold">00:00</span></h1></td>
                    <td scope="col"><h1 style="font-weight: bold;"></h1></td>
                    <td scope="col"><h1 id="partyTime"></h1></td>
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

    <!-- <pre id="messagesDisplay"></pre> -->

    <script>
    const ws = new WebSocket('ws://localhost:8080');

    ws.onopen = () => {
        console.log('Connected to server');
    };

    const jsonString = '{"action":"message","data":"Hello"}';
    const jsonParsed = JSON.parse(jsonString);
    //console.log(jsonParsed.action);

    ws.onmessage = (event) => {
        //console.log(event.data);
        const jsonString = event.data; //'{"action":"message","data":"Hello"}';
        const jsonParsed = JSON.parse(jsonString);
        //console.log(jsonParsed.action);
        //alert(jsonParsed.data);
        if (jsonParsed.action == 'message') {
            const messagesDisplay = document.getElementById('chairMessage');
            messagesDisplay.innerHTML = jsonParsed.data;
            $('#chairMessage').removeClass('d-none');
            $('#chairMessage').addClass('d-block');
            $('#chairMessage').addClass('d-none');
        }
        if (jsonParsed.action == 'time') {
            //alert(jsonParsed.spk[0] + ' ' + jsonParsed.time[1]);
            document.getElementById('Name').innerHTML = jsonParsed.spk[0];
            document.getElementById('Hname').innerHTML = jsonParsed.spk[1];
            document.getElementById('FParty').innerHTML = jsonParsed.spk[2];
            document.getElementById('State').innerHTML = jsonParsed.spk[3];
            document.getElementById('Div').innerHTML = jsonParsed.spk[4];
            document.getElementById('Party').innerHTML = jsonParsed.time[0];
            document.getElementById('alloted').innerHTML = "00:" + jsonParsed.time[2] + ":00";
            startTimer(jsonParsed.time[2], 0);
            // create another Timer instance
            const timer2 = new Timer();
            var stimer = jsonParsed.time[2] / 60;
            timer2.set(0, 'spoken');
            // set limit after which callback function should be called
            timer2.setTimeLimit(1200);
            // start the timer
            timer2.start('COUNT_UP');

            const timer3 = new Timer();
            var stimer = jsonParsed.time[2] / 60;
            timer3.set(0, 'pspoken');
            // set limit after which callback function should be called
            timer3.setTimeLimit(3600);
            // start the timer
            timer3.start('COUNT_UP');

            //spokenTimer(jsonParsed.time[2], 0);
            //partyspokenTimer(60, 0);
            partyremainingTimer(60, 0);
            document.getElementById('partyTime').innerHTML = jsonParsed.time[1];
            document.getElementById("Spkimg").src = "../pics/" + jsonParsed.spk[4] + ".png";
            // const messagesDisplay = document.getElementById('messagesDisplay');
            // messagesDisplay.innerHTML += `Server says: ${event.data}\n`;
        }
    };

    function sendMessage() {
        const input = document.getElementById('message');
        ws.send(input.value);
        input.value = '';
    }

    function startTimer(m, s) {
        remaining.textContent = "00:" + m + ":" + s;
        if (s == 0) {
            if (m == 0) {
                return;
            } else if (m != 0) {
                m = m - 1;
                s = 60;
            }
        }

        s = s - 1;
        id = setTimeout(function() {
            startTimer(m, s)
        }, 1000);
    }

    function spokenTimer(m, s) {
        spoken.textContent = "00:" + m + ":" + s;
        if (s == 0) {
            if (m != 0) {

                m = m - 1;
                s = 60;
            } else if (m == 0) {
                return;
            }
        }

        s = s + 1;
        id = setTimeout(function() {
            spokenTimer(m, s)
        }, 1000);
    }

    function partyspokenTimer(m, s) {
        pspoken.textContent = "00:" + m + ":" + s;
        if (s == 0) {
            if (m == 0) {
                return;
            } else if (m != 0) {
                m = m - 1;
                s = 60;
            }
        }

        s = s - 1;
        id = setTimeout(function() {
            partyspokenTimer(m, s)
        }, 1000);
    }

    function partyremainingTimer(m, s) {
        premaining.textContent = "00:" + m + ":" + s;
        if (s == 0) {
            if (m == 0) {
                return;
            } else if (m != 0) {
                m = m - 1;
                s = 60;
            }
        }

        s = s - 1;
        id = setTimeout(function() {
            partyremainingTimer(m, s)
        }, 1000);
    }
    </script>
    <script>
    // create Timer instance
    const timer1 = new Timer();
    // 10800 seconds = 3 hours
    timer1.set(10800, 'timer-1', callback);
    //start the timer
    timer1.start('COUNT_DOWN');

    // // create another Timer instance
    // const timer2 = new Timer();
    // timer2.set(3600, 'timer-2', callback);
    // // set limit after which callback function should be called
    // timer2.setTimeLimit(10800);
    // // start the timer
    // timer2.start('COUNT_UP');
    </script>

</body>

</html>