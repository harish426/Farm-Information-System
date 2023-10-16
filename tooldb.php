<!DOCTYPE html>
<html lang="en">
<head>
<style>
        #tooldb{
            width: 80%;
            border: 1;
            background-color: wheat;
        }
        #tooldb tr th{
            background-color:red;
            color:white;
        }
        #tooldb tr{
            border:1px solid black;
            margin-top:100px;
            padding:10px;
        }
        #tooldb tr:hover{
                background-color:white;
        }
        </style>

</head>
<body>
    <?php
    $q=$_GET['q'];
    
    $con=new mysqli('localhost','root','','farmguide1') or die("dasta not found");
    $sql="SELECT * FROM tools WHERE locations='".$q."'";
    
    $result=$con->query($sql);
    if($result->num_rows > 0){
        echo "<table id='tooldb'  align='center'>
        <tr><th>TOOLS</th><th>PRIZE</th><th>CONTACT</th><th>Owner</th></tr>";
        while($row=$result->fetch_assoc()){
            echo "<tr><td>".$row['tool']."</td><td>".$row['prize']."</td><td>".$row['contact']."</td><td>".$row['owner']."</td>";
        }
    }
$con->close();

?>
</body>
</html>