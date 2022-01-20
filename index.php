<?php include("includes/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BizNews </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css"rel="stylesheet">
</head>

<body>
   <!-- header  -->
   <?php include("includes/header.php"); ?>
   <!-- end header  -->

    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            <?php
                     $conn=new mysqli("localhost","root","","world_show");
                     $sql="SELECT tblposts.PostImage,tblposts.PostingDate,tblposts.PostTitle,tblcategory.CategoryName FROM tblposts,tblcategory 
                     where tblposts.CategoryId=tblcategory.id";
                     $query=$conn->query($sql);
                     while($row=mysqli_fetch_array($query))
                     { ?> 
            <div class="position-relative overflow-hidden" style="height: 300px;">
           
                <?php   echo "<img  class='img-fluid h-100' src='admin/postimages/".$row['PostImage']."' style='object-fit: cover;'>"; ?>
               
              
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""><?php echo $row['CategoryName'];?></a>
                            <a class="text-white" href=""><small><?php echo $row['PostingDate'];?></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?php echo $row['PostTitle'];?></a>
                    </div>
                    
                </div>
                <?php } ?>     
            </div>
                   
        </div>
    </div>
    
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
 

                              
                               
                            
                        </div>
                        <?php
                     $conn=new mysqli("localhost","root","","world_show");
                     $sql="SELECT tblposts.PostImage,tblposts.id,tblposts.PostingDate,tblposts.PostTitle,tblcategory.CategoryName FROM tblposts,tblcategory 
                     where tblposts.CategoryId=tblcategory.id";
                     $query=$conn->query($sql);
                     while($row=mysqli_fetch_array($query))
                     { ?>
                         
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                           
                      <?php   echo "<img  class='img-fluid h-100' src='admin/postimages/".$row['PostImage']."' style='object-fit: cover;'>";
               
                    ?>
                                 <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href=""><?php echo $row['CategoryName'];?></a>
                                        <a class="text-body" href=""><small>Published on <?php echo $row['PostingDate'];?></small></a>
                                    </div>
                                    <p class="m-0"><?php echo $row['PostTitle'];?></p>
                                    <a  class="more-link"
                                            href="readmore.php?id=<?php echo $row['id'];?>">Read more&rarr;</a>
                                      

                                </div>
                              
                               
                            </div>
                        </div>
                        <?php } ?>
         </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php
                     $conn=new mysqli("localhost","root","","world_show");
                     $sql="SELECT PostImage FROM tblposts where id=7";
    
                     $query=$conn->query($sql);
                     $row=mysqli_fetch_array($query);
                     ?>
                       <?php   echo "<img  class='d-block w-100' src='admin/postimages/".$row['PostImage']."'>";
               
                      ?>
     
    </div>
   
    <?php
                     $conn=new mysqli("localhost","root","","world_show");
                     $sql="SELECT * FROM tblposts ";
    
                     $query=$conn->query($sql);
                    while($row=mysqli_fetch_array($query)){
                     ?> <div class="carousel-item">
                       <?php   echo "<img  class='d-block w-100' src='admin/postimages/".$row['PostImage']."'>";
               
               ?></div><?php } ?>
      
   
   
  </div>
</div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <?php include("includes/tranding.php"); ?>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
   <?php include("includes/footer.php"); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/main1js"></script>
</body>

</html>