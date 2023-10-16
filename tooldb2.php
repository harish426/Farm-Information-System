<!---datain db-->

<?php

$connect=mysqli_connect("localhost","root","","farmguide1") or die("connection failed");

$location=$_POST['location'];
$tool=$_POST['tool'];
$prize=$_POST['prize'];
$contact=$_POST['contact'];
$owner=$_POST['owner'];
if($location!="" and $tool!="" and $prize!="" and $contact!="" and $owner!=""){
$insert=mysqli_query($connect,"INSERT INTO tools(locations,tool,prize,contact,owner) VALUES('$location','$tool','$prize','$contact','$owner')");

if($insert){
die("<script>
        alert
        ('your details submitted successful');
        window.location='Tools.php';
       </script>");
}
else{
        die("<script>
        alert('unable to submit your details');
        window.location='Tools.php';
       </script>"); 
}
}
else{
        die("<script>
        alert('please enter all the details');
        window.location='Tools.php';
       </script>"); 
}
?>