<!---datain db-->

<?php

$connect=mysqli_connect("localhost","root","","farmguide1") or die("connection failed");

$fertilizer=$_POST['fertilizer'];
$location=$_POST['location'];
$vendor=$_POST['vendor'];
$prize=$_POST['prize'];
$phno=$_POST['phno'];
if($fertilizer!="" and $location!="" and $vendor!="" and $prize!="" and $phno!=""){
$insert=mysqli_query($connect,"INSERT INTO fertilizers(fertilzer,location,vender,prize,phno) VALUES('$fertilizer','$location','$vendor','$prize','$phno')");
if($insert){
die("<script>
        alert('your details submitted successful');
        window.location='fertilizers.php';
       </script>");
}
else{
        die("<script>
        alert('unable to submit your details');
        window.location='fertilizers.php';
       </script>"); 
}
}
else{
        die("<script>
        alert('please enter all the details');
        window.location='fertilizers.php';
       </script>");   
}
?>
