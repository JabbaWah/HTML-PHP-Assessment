<html>
    <head><!-- Links, Fonts and Javascript -->
        <title>HTML Assessment</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="Main.css">
        <link rel="Javascript" type="Javascript" href="JavaScript.js">
        <script src="JavaScript.js"></script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav"><!-- Side Navigation --> 
            <a class="navtitle" href="Index.php">Menu</a>
            <div>
                <a href="Gallery.php">Gallery</a>
                <a href="Contact.php">Contact</a>
            </div>
        </div>
        <div id="main">
            <div id="titlebar"><!-- Nav Bar & Switch Btn -->
                <div id="menubtn"><!-- Button -->
                    <li class="container"  onclick="openNav(); myFunction(this);">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </li>
                </div>
                <li>
                    <a href="javascript:void(0)" onclick="window.location.href='Login.php'" class="Loginbtn">Login</a>
                </li>
            </div>
            <div id="overlay"></div>
            <div class="bgimg-1" id="move">
                <div class="caption">
                    <div class="Logo"></div>
                </div>
            </div>
            <div id="Box1">
                <h3 style="text-align: center;"></h3>
                <p>Caffeine and Gasoline is a car enthusiast event where Car fans drive in convoys and grab coffees together. People go to these events to check out the cars and the work people have put into them,</p>
            </div>
            <div class="bgimg-2" id="move">
                <div class="caption">
                    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LOCATION</span>
                </div>
            </div>
            <div style="position:relative;">
                <div id="Box2">
                    <p>
                        Address
                        <br>
                        256 Oteha Valley Rd, Albany.
                        Meet at carpark behind caltex.
                        <br>
                        Date of Event
                        <br>
                        Saturday 3rd November 8:00am
                        <br>
                        Event Finish Date 
                        <br>
                        Saturday 3rd November 7:00pm
                    </p>
                </div>
            </div>
            <div class="bgimg-3" id="move">
              <div class="caption">
                <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">TARGETED AUDIENCE</span>
              </div>
            </div>
            <div style="position:relative;">
              <div id="Box3">
                <p>This event is based towards young teenagers or car enthusiasts just starting out in the car community. </p>
              </div>
            </div>

            <div class="bgimg-4">
              <div class="caption">
                <span class="EndHeader">SEE YOU THERE!</span>
              </div>
            </div>
        </div>
    </body>
</html>