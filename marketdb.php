<!DOCTYPE html>
<html lang="en">
<head>
<style>
        #market{
            width: 80%;
            height:100%;
            border: 1;
            background-color: wheat;
            
        }
        #market tr th{
            background-color:red;
            color:white;
            margin:100px;
        }
        #market tr{
            border:1px solid black;
            margin-top:100px;
            padding:10px;
        }
        #market tr:hover{
                background-color:white;
        }
        </style>
</head>
<body>
    <?php
    $q=$_GET['r'];
   
    $con=new mysqli('localhost','root','','farmguide1') or die("dasta not found");
    $sql="SELECT * FROM market WHERE market='".$q."'";
    
    $result=$con->query($sql);
    if($result->num_rows > 0){
        echo "<table id='market' align='center' height='100'>
        <tr><th>MIRCHI</th><th>RICE</th><th>TURMERIC</th><th>TOMATO</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row['mirchi']."</td><td>".$row['rice']."</td><td>".$row['turmeric']."</td><td>".$row['tamato']."</td>";
        }
    }
$con->close();
    
    
    ?>
</body>
</html>