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
    <!--dbonnect-->
    <script>
        function tooldata(str){
            if(str == ""){
                document.getElementById("tooldata").innerHTML="please select anyone";

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
                        document.getElementById("tooldata").innerHTML=xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","tooldb.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>


</head>
<body>
    <!--collapsible navigation bar-->
    <nav class="navbar navbar-inverse">
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
            <div class="collapse navbar-collapse" id="nav1">

                <ul class="nav navbar-nav">
                    

                    <li  ><a href="farmguide.php">Home</a></li>
                    <li class="active" ><a href="Tools.php">Tools</a></li>
                    <li ><a href="fertilizers.php">Fertilizers</a></li>
                    <li ><a href="about.html">About us</a></li>
                    <li ><a href="#contactus">Contact us</a></li>
                </ul>

            </div>
        </div>
    </nav>
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
                <img src="images/tools2.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Harvester</h3>
                    <p>Simple Harvest</p>
                </div>
            </div>

            <div class="item active">
                <img src="images/tools3.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Drone</h3>
                    <p>Easy for fertilizing</p>
                </div>
            </div>

            <div class="item">
                <img src="images/tools4.jpeg" width="100%" height="40px">
                <div class="carousel-caption">
                    <h3>Horse Powered Moters </h3>
                    <p>For easy farming</p>
                </div>
            </div>

            <div class="item">
                <img src="images/tool1.jpg" width="100%" height="100px">
                <div class="carousel-caption">
                    <h3>Other Farming Tools</h3>
                    <p>Make more Easy</p>
                </div>
            </div>
        </div>
        <!---lef and right control links-->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</div>
<br><br>

<!--toolsin db-->
<style>
        form{
            margin-left:30%;
        }
        #location,#tool,#prize,#contact,#owner{
            background-color:#DFD3C3;
            width:150%;
        }
        #indb{
            background-color:#FFBD35;
        }
        
    </style>
<div class="container" id="indb">
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><strong>Collabrate Now</strong></h2>
           
                <h2 class="text text-center"><i>For more Interaction</i></h2>
                <hr>
                <div id="error"></div>
                <hr>
                <form role="form" action="tooldb2.php" method="post" >
                    <div class="row">
                        <div class="form-group col-lg-8">
                            <label>Location</lable>
                            <input type="text" id="location" maxlength="25" class="form-control" name="location" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Tool</lable>
                            <input type="text" id="tool" maxlength="25" class="form-control" name="tool" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Prize</lable>
                            <input type="text" id="prize" maxlength="30" class="form-control" name="prize" >
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                        <label>Contact</lable>
                            <input type="text" id="contact" maxlength="10" class="form-control" name="contact" >
                        </div>
                        <div class="form-group col-lg-12">
                        <label>Owner Name</lable>
                            <input type="text" id="owner" maxlength="10" class="form-control" name="owner" >
                        </div>
                        <div class="form-group col-lg-12">
                           
                            <button type="submit" class="btn btn-success" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br>
<!---retriveing data--->
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
    #matter{
        text-align:center;
        background-color:#2C272E;
        color:white;
    }
</style>
<table class="container" border="3">

<tr><td><div class="container" id="matter"><strong><h2>Know the details of the Tools around you</h2></strong></div></td></tr><br><br>
<tr><td><table class="table table-boardered" border="5">
    <tr><td><strong>SELECT YOUR LOCATION</strong></td>
<td><?php
        $hostname='localhost';
        $userid='root';
        $password='';
        $dbname='farmguide1';

        $conn = new mysqli($hostname,$userid, $password,$dbname) or die("conection was not established");

        $sql="SELECT DISTINCT locations FROM tools";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo '<select name="users" onchange="tooldata(this.value)">';
            echo "<option value='0'>select location</option>";
            while($row=$result->fetch_assoc()){
                echo "<option value'".$row['id']."'>".$row['locations']."</option>";

            }
            echo "</select>";
        }
        else{
            echo "result was not found";

        }
        $conn->close();
?></td></tr>
</table></td></tr>
<br>
<tr><td><div id="tooldata"><b></b></div></td></tr>
    </table>
<br><br>






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