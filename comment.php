<?php
$conn=new mysqli("localhost","root","password","world_show");
if (isset($_POST['submit']))
 {
   $name=$_POST['names'];
   $id=$_GET['id'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $message=$_POST['message'];
   $sql="INSERT INTO comment(fullname,email,phone,message,tokenid)
   VALUES('$name','$email','$phone','$message','$id')";
   if ($conn->query($sql)) 
   {
       echo"<script>alert('The comment sent successfully');</script>";

   }
   else{
   echo"<script>alert('Samething went wrong');</script>";
}
}
$conn->close();
?>