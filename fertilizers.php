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
    <script>
        function fertildata(str){
            if(str == ""){
                document.getElementById("fertildata").innerHTML="please select anyone";

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
                        document.getElementById("fertildata").innerHTML=xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","fertildb.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
    <title>Farm Guide</title>
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
                    <li  ><a href="Tools.php">Tools</a></li>
                    <li class="active"><a href="fertilizers.php">Fertilizers</a></li>
                    <li ><a href="about.html">About us</a></li>
                    <li ><a href="#contactus">Contact us</a></li>
                </ul>

            </div>
        </div>
    </nav>
<!--carousel slide-->
<div class="container" ></i>
    <br>
    <div id="corousel" class="carousel slide" data-ride="carousel" >

        <!--indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-t0="0"></li>
            <li data-target="#carousel" data-slide-t0="1" class="active"></li>
            <li data-target="#carousel" data-slide-t0="2"></li>
            <li data-target="#carousel" data-slide-t0="3"></li>
        </ol>
 
        <!--Wrapper for Slides-->
        <div class="carousel-inner" role="listbox" id="sliderdiv" >
            <div class="item">
                <img src="images/fertilizer1.jpg" width="100%" height="10%">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item active">
                <img src="images/fertilizer2.jpg" width="100%" height="10%">
                
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="images/fertilizer3.jpg" width="100%" height="10%">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>

            <div class="item">
                <img src="images/fertilizer4.jpg" width="100%" height="10%">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
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
</div><br><br>

<!--datain db-->

<style>
        form{
            margin-left:30%;
        }
        #fertilizer,#location,#organ,#prize,#phno{
            width:150%;
            background-color:#DFD3C3;
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
                <form role="form" action="fertildb2.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-lg-8">
                            <label>Name of Fertilizer</lable>
                            <input type="text" id="fertilizer" maxlength="25" class="form-control" name="fertilizer" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Location Of Product Available</lable>
                            <input type="text" id="location" maxlength="25" class="form-control" name="location" >
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Name Of Organization</lable>
                            <input type="text" id="organ" maxlength="30" class="form-control" name="vendor" >
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                        <label>Prize Of Fertilizer</lable>
                            <input type="text" id="prize" maxlength="10" class="form-control" name="prize" >
                        </div>
                        <div class="form-group col-lg-12">
                        <label>Phone Number</lable>
                            <input type="text" id="phno" maxlength="10" class="form-control" name="phno" >
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
<!--fertilizer--->
<style>
    .table {
        
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
    <div class="container" id=matter><h2><strong>Know the details of the fertilizers around you</strong></h2></div>
<table class="table table-boardered" border="5" >
    <tr><td><strong>SELECT YOUR FERTILIZER</td>
<td><?php
        $hostname='localhost';
        $userid='root';
        $password='';
        $dbname='farmguide1';

        $conn = new mysqli($hostname,$userid, $password,$dbname) or die("conection was not established");

        $sql="SELECT DISTINCT fertilzer FROM fertilizers";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo '<select name="users" onchange="fertildata(this.value)">';
            echo "<option value='0'>select Fertilizer</option>";
            while($row=$result->fetch_assoc()){
                echo "<option value'".$row['id']."'>".$row['fertilzer']."</option>";

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
<div id="fertildata"><b></b></div>

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