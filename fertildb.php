<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        #fertiltable{
            width: 80%;
            height:100%;
            border: 1;
            background-color: wheat;
            
        }
        #fertiltable tr th{
            background-color:red;
            color:white;
        }
        #fertiltable tr{
            border:1px solid black;
            margin-top:100px;
            padding:10px;
        }
        #fertiltable tr:hover{
                background-color:white;
        }
        </style>

</head>
<body>
    <?php
    $q=$_GET['q'];
   
    $con=new mysqli('localhost','root','','farmguide1') or die("data not found");


    $sql="SELECT * FROM fertilizers WHERE fertilzer='".$q."'";
    
    $result=$con->query($sql);
    if($result->num_rows > 0){
        echo "<table id='fertiltable' align='center' height='100'>
        <tr><th>VENDOR</th><th>Location</th><th>PRIZE</th><th>PHONE NUMBER</th><th>GOVERNMENT PRIZE</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row['vender']."</td><td>".$row['location']."</td><td>".$row['prize']."</td><td>".$row['phno']."</td><td>".$row['gpay']."</td></tr>";
        }
    }
    else{
        echo "data is not found";
    }
$con->close();

?>


<!---datain db-->

</body>
</html>