<?php
session_start();
include('includes/config.php');
$id=$_GET['eid'];

$checkExist=mysqli_query($con,"SELECT * FROM tbladmin WHERE id='$id'");
$getData=mysqli_fetch_array($checkExist);
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
//Current Password hashing 
// $password="Test@12345";
$email=$_POST['email'];
$name=$_POST['name'];
$status=$_POST['status'];
// $options = ['cost' => 12];
// $hashedpass=password_hash($password, PASSWORD_BCRYPT, $options);
$adminid=$_SESSION['login'];
// new password hashing 
// $newpassword=$_POST['newpassword'];
// $newhashedpass=password_hash($newpassword, PASSWORD_BCRYPT, $options);

date_default_timezone_set('Africa/Kigali');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
// $checkExist=mysqli_query($con,"SELECT * FROM tbladmin WHERE AdminEmailId='$email'");
$sql=mysqli_query($con,"UPDATE tbladmin SET AdminUserName='$name',AdminEmailId='$email',Is_Active='$status' WHERE id='$id'");
// $num=mysqli_fetch_array($checkExist);
if($sql)
{
   
    $msg="Data Update Successfully !!";
 //$dbpassword=$num['AdminPassword'];

// if (password_verify($password, $dbpassword)) {

//  $con=mysqli_query($con,"update tbladmin set AdminPassword='$newhashedpass', updationDate='$currentTime' where AdminUserName='$adminid'");
// $msg="Password Changed Successfully !!";
// }
}
else
{
$error="Data not Update Successfully !! !!";
}
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>WORLDSHOW | Edit Editor</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Editor</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    
                                        <li class="active">
                                         Add Editor
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Editor </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php


} ?>


</div>
</div>





<div class="row">
<div class="col-md-10">
<form class="form-horizontal" name="chngpwd" method="post" onSubmit="return valid();">

<div class="form-group">
<label class="col-md-4 control-label">Names</label>
<div class="col-md-8">
<input type="text" class="form-control" value="<?php echo $getData['AdminUserName'] ?>" name="name" required>
</div>
</div>
	                                     

<div class="form-group">
<label class="col-md-4 control-label">Email</label>
<div class="col-md-8">
<input type="text" class="form-control" value="<?php echo $getData['AdminEmailId'] ?>" name="email" required>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">Change Status</label>
<div class="col-md-8">
    <select  class="form-control" name="status">
    <option selected value="<?php echo $getData['Is_Active'] ?>">Select Status</option>
        <?php if($getData['Is_Active']=='0'){
?>
   <option value="1">Approve</option>
<?php
        }else{?>
            <option value="1">Block</option>
     <?php   } ?>
     
    </select>
<!-- <input type="text" class="form-control" value="<?php echo $getData['AdminEmailId'] ?>" name="email" required> -->
</div>
</div>

<!-- 
<div class="form-group">
<label class="col-md-4 control-label">Confirm Password</label>
<div class="col-md-8">
<input type="text" class="form-control" value="" name="confirmpassword" required>
</div>
</div> -->

 <div class="form-group">
<label class="col-md-4 control-label">&nbsp;</label>
<div class="col-md-8">
                                                  
<button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

	                                        </form>
                        				</div>


                        			</div>


                        			




           
                       


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>