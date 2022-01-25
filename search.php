<?php 
include("includes/connection.php");
$sql="SELECT * FROM `tblposts` WHERE `PostTitle` LIKE'%{$_GET['item']}%' AND `Is_Active`=1";
$query=mysqli_query($connect,"$sql");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>BizNews - Free News Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
   
  <?php
  include("includes/header.php")
   ?>

    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h4 class="m-0 text-uppercase font-weight-bold">
                    Search Results
                  </h4>
               </div>
              </div>
              <?php 
              if(!mysqli_num_rows($query))
              {
                  ?>
                  <p>No Results found!</p>
                  <?php
              }
                        while($row=mysqli_fetch_array($query))
                        {
                         ?>
               <div class="col-lg-6">
                            <div class="position-relative mb-3">
                           
                      <?php   echo "<img  class='img-fluid h-100' src='admin/postimages/".$row['PostImage']."' style='object-fit: cover;'>";
               
                    ?>
                                 <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" style="color:white"
                                            href=""><?php $categoryInfor=mysqli_fetch_array(mysqli_query($connect,"SELECT `CategoryName` FROM `tblcategory` WHERE `id`='{$row['CategoryId']}'")); echo $categoryInfor[0]; ?></a>
                                        <a class="text-body" href=""><small>Published on <?php echo $row['PostingDate'];?></small></a>
                                    </div>
                                    <p class="m-0"><?php echo $row['PostTitle'];?></p>
                                    <a  class="more-link"
                                            href="read.php?id=<?php echo $row['id'];?>">Read more&rarr;</a>
                                      

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
                <a
                  href=""
                  class="d-block w-100 text-white text-decoration-none mb-3"
                  style="background: #39569e"
                >
                  <i
                    class="fab fa-facebook-f text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"
                  ></i>
                  <span class="font-weight-medium">12,345 Fans</span>
                </a>
                <a
                  href=""
                  class="d-block w-100 text-white text-decoration-none mb-3"
                  style="background: #52aaf4"
                >
                  <i
                    class="fab fa-twitter text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"
                  ></i>
                  <span class="font-weight-medium">12,345 Followers</span>
                </a>
                <a
                  href=""
                  class="d-block w-100 text-white text-decoration-none mb-3"
                  style="background: #0185ae"
                >
                  <i
                    class="fab fa-linkedin-in text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"
                  ></i>
                  <span class="font-weight-medium">12,345 Connects</span>
                </a>
                <a
                  href=""
                  class="d-block w-100 text-white text-decoration-none mb-3"
                  style="background: #c8359d"
                >
                  <i
                    class="fab fa-instagram text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"
                  ></i>
                  <span class="font-weight-medium">12,345 Followers</span>
                </a>
                <a
                  href=""
                  class="d-block w-100 text-white text-decoration-none mb-3"
                  style="background: #dc472e"
                >
                  <i
                    class="fab fa-youtube text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"
                  ></i>
                  <span class="font-weight-medium">12,345 Subscribers</span>
                </a>
                <a
                  href=""
                  class="d-block w-100 text-white text-decoration-none"
                  style="background: #055570"
                >
                  <i
                    class="fab fa-vimeo-v text-center py-4 mr-3"
                    style="width: 65px; background: rgba(0, 0, 0, 0.2)"
                  ></i>
                  <span class="font-weight-medium">12,345 Followers</span>
                </a>
              </div>
            </div>
            <!-- Social Follow End -->

            <!-- Ads Start -->
            <?php 
            include("includes/ads.php")
            ?>
            <!-- Ads End -->

            <!-- Popular News Start -->
            <?php include("includes/tranding.php"); ?>
            <!-- Popular News End -->

            <!-- Newsletter Start -->
            <div class="mb-3">
              <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
              </div>
              <div class="bg-white text-center border border-top-0 p-3">
                <p>
                  Aliqu justo et labore at eirmod justo sea erat diam dolor diam
                  vero kasd
                </p>
                <div class="input-group mb-2" style="width: 100%">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Your Email"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-primary font-weight-bold px-3">
                      Sign Up
                    </button>
                  </div>
                </div>
                <small>Lorem ipsum dolor sit amet elit</small>
              </div>
            </div>
            <!-- Newsletter End -->

            <!-- Tags Start -->
            <div class="mb-3">
              <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
              </div>
              <div class="bg-white border border-top-0 p-3">
                <div class="d-flex flex-wrap m-n1">
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Politics</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Business</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Corporate</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Business</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Health</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Education</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Science</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Business</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Foods</a
                  >
                  <a href="" class="btn btn-sm btn-outline-secondary m-1"
                    >Travel</a
                  >
                </div>
              </div>
            </div>
            <!-- Tags End -->
          </div>
        </div>
      </div>
    </div>
    <!-- News With Sidebar End -->

<?php
include("includes/footer.php"); 
?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"
      ><i class="fa fa-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
