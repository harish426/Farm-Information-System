<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="farmguide.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Farm Guide</title>
</head>
<body>

    <!--collapsible navigation bar-->
    <nav class="navbar navbar-inverse" >
        <div class="container">
            <div class="navbar-header">
                <!--button block-->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--hesding-->
                <a class="navbar-brand" href="#"><img src="images/icon.jpg" width="30px" height="30px" ></a>
                <a class="navbar-brand" href="farmguide.php"><strong>Farm<br>&nbsp;Guide</strong></a>
            </div>
            <!--collapse Div-->
            <div class="collapse navbar-collapse" id="nav1" >

                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle active" data-toggle="dropdown" href="farmguide.html">Home
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#Wheather">Wheather</a></li>
                            <li><a href="#">Heal your project</a></li>
                            <li><a href="#marketrate">Market Details</a></li>
                            <li><a href="#help1">Help</a></li>
                        </ul>
                    </li>


                    <li ><a href="Tools.php">Tools</a></li>
                    <li ><a href="fertilizers.php">Fertilizers</a></li>
                    <li ><a href="about.html">About us</a></li>
                    <li ><a href="#contactus">Contact us</a></li>
                </ul>

            </div>
        </div>
    </nav>


<style>
    #matter{
        text-align:center;
        background-color:#2C272E;
        color:white;
    }
    </style>
    <!--wheather-->
<div class="container" id=matter><h2><strong>Today's Weather</strong></h2></div>
<a href="https://www.weather.com/wx/today/?lat=16.24&lon=80.56&locale=en_IN&par=google&temp=c">
<div class="container-fluid" id="Wheather" >
    <div class="icon"><img src="images/wheather.gif" alt="gif is not supported height="100px" width="100px"/></div><br>
   <div class="temp">-°C</div>
    <div class="summary">----</div>
   <div class="location"></div>
  </div>
  </a>
<br><br><br>



<!--carousel slide-->
<div class="container" height="1000px" ></i>
    <br>
    <div id="corousel" class="carousel slide" data-ride="carousel">

        <!--indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-t0="0"></li>
            <li data-target="#carousel" data-slide-t0="1" class="active"></li>
            <li data-target="#carousel" data-slide-t0="2"></li>
            <li data-target="#carousel" data-slide-t0="3"></li>
        </ol>
 
        <!--Wrapper for Slides-->
        <div class="carousel-inner" role="listbox" id="sliderdiv">
            <div class="item">
                
                <img src="images/image1.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Farmers doesn't Need Sympothy</h3>
                    <p>They Need Respect</p>  
                </div>
            </div>

            <div class="item active">
                
                <img src="images/image2.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Old farming is</h3>
                    <p>Bueatifull Science</p>
                </div>
            </div>

            <div class="item">
                
                <img src="images/image3.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Using Technologe</h3>
                    <p>Leads More prodduction</p>
                </div>
            </div>

            <div class="item">
                
                <img src="images/image5.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Smiles of farmer</h3>
                    <p>Makes world bueatifull</p>
                </div>
            </div>
        </div>
        <!---lef and right controllimks-->
        
    </div>

</div>
<br><br>






<!--cature photos-->
<!--<div id="pictures">
    <h1><i><strong>HEAL YOUR CROP</strong></i></h1>
<div class="container">
    <div class="row justify-content-center">
<video id="player" controls autoplay></video>
<canvas id="canvas" width=320 height=240></canvas><br>
<div class="container">
<button id="capture" >Capture</button>
</div>
<script>
    const player = document.getElementById('player');
const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');
const captureButton = document.getElementById('capture');

const constraints = {
  video: true,
};

captureButton.addEventListener('click', () => {
  // Draw the video frame to the canvas.
  context.drawImage(player, 0, 0, canvas.width, canvas.height);
});

// Attach the video stream to the video element and autoplay.
navigator.mediaDevices.getUserMedia(constraints)
  .then((stream) => {
    player.srcObject = stream;
  });

</script>
</div>
</div>
</div>-->
<br>
<!---market details--->
<script>
        function marketdata(str){
            if(str == ""){
                document.getElementById("marketdata").innerHTML="please select anyone";

            }
            
           else{
                if(window.XMLHttpRequest){
                    xmlhttp=new XMLHttpRequest();

                }
                else{
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("marketdata").innerHTML=xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","marketdb.php?r="+str,true);
                xmlhttp.send();
            }
        }
    </script>
<style>
    .table {
        height:10%;
        width:80%;
        margin-left:10%;
        background-color:#EDD2F3;

    }
    .table tr{
        height:100%;
    }
    .table tr td select{
        width:100%;
        height:100%
    }
    #marketrate{
        text-align:center;
        background-color:#2C272E;
        color:white;
    }
</style>

<div class="container" id=marketrate><h2><strong>Know The Market Details Today</strong></h2></div>
<table class="table table-boardered" border="5" >
    <tr><td><strong>SELECT YOUR FERTILIZER</td>
<td><?php
        $hostname='localhost';
        $userid='root';
        $password='';
        $dbname='farmguide1';

        $conn = new mysqli($hostname,$userid, $password,$dbname) or die("conection was not established");

        $sql="SELECT DISTINCT market FROM market";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo '<select name="users" onchange="marketdata(this.value)">';
            echo "<option value='0'>select location</option>";
            while($row=$result->fetch_assoc()){
                echo "<option value'=".$row['id']."'>".$row['market']."</option>";

            }
            echo "</select>";
        }
        else{
            echo "result was not found";

        }
        $conn->close();
?></td></tr>
</table>
<br>
<div id="marketdata"><b></b></div>
    </div>
<br><br>




<!---helping-->
<style>

    #help1{
        height: 100%;
        
    }
    
    #help1 table{
        width: 50%;
        height: 70%;
        margin-left:25%;
        
    }
    #help1 table tr{
        height: 40%;
        margin: 100px;
        padding: 100px;
    }
    
    #help1 table tr td input,textarea{
        width: 100%;
        height: 60%;
    }
    #submit_form{
        background-color: rgb(50, 241, 50);
        border-radius: 20px;
        width:20%;
        
    }
    #submit_form:hover {
        background-color: lightseagreen;
    }
    
    
</style>
<div class="container" id=matter><h2><strong>HELP</strong></h2></div>
<div class="progress" id="help1" >
    <table class="table table-boardered" align="center" >
<form action="https://postmail.invotes.com/send"
    method="post" id="email_form">
    <tr><td> <input type="text" name="enter_phone_number"
        placeholder="Phone Number" class="form-control" /> </td></tr>
    <tr><td><input type="text" name="subject" placeholder="Subject" class="form-control"/></td></tr>
    <tr><td><textarea name="text" placeholder="Message" rows="5" cols="10" class="form-control"></textarea></td></tr>

    <tr><td><input type="hidden" name="access_token" value="gfvbrt7b632d38h85cxdgaiv" /></td></tr>
      <!-- return urls can be fully qualified -OR-
         start with / for root relative -OR-
         start with . for url relative --> 
    <input type="hidden" name="https://www.google.co.in/" value=".?message=Email+Successfully+Sent%21&isError=0" />
    <input type="hidden" name="https://www.facebook.com/" value=".?message=Email+could+not+be+sent.&isError=1" />
   
   
    <tr><td><input class="btn-success form-control" id="submit_form" type="submit" value="Send" /></td></tr>
    <!-- not required, but we'd appreciate it if you'd link to us somewhere on your site -->
    
</form>
</table>
</div>


<!--footer-->


<style>
#contactus{
  background-color: black;
}
</style>
<div class="footer-clean" id="contactus">
    <footer >
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3 style="color: aliceblue;">Social Media</h3>
                    <ul>
                        <li><a href="#"><img src="images/fb.png"  width="10%" height="10%" ></a></li>
                        <li><a href="#"><img src="images/twiter.png" style="display: inline;" width="10%" height="10%" ></a></li>
                        <li><a href="#"><img src="images/insta.png" style="display: inline;" width="10%" height="10%"></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3 style="color: aliceblue;">Contacts</h3>
                    <ul>
                        <li><a href="#" style="color: aliceblue;">9764675867</a></li>
                        <li><a href="#" style="color: aliceblue;">9865435678</a></li>
                        <li><a href="#" style="color:aliceblue;">9498545678</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3 style="color: aliceblue;">Email</h3>
                    <ul>
                        <li><a href="#" style="color: aliceblue;">famrmguid@gmail.com</a></li>
                        <li><a href="#" style="color: aliceblue;">agriculturecorporate@gmail.com</a></li>
                        <li><a href="#" style="color: aliceblue;">farmerwelfare@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social">
                    <p class="copyright" style="color: aliceblue;">Formguide © </p>
                </div>
            </div>
            <hr></hr>
            
            <div class="copyright small-12 columns" >
            
                <p style="color: aliceblue; text-align: center;"><span id="current_year" ></span> &copy; All rights reserved</p>
                </div>
                <script>
                    document.getElementById("current_year").innerHTML = new Date().getFullYear();
                </script>
        </div>

    </footer>
</div>






<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="javascript.js"></script>
</body>
</html>