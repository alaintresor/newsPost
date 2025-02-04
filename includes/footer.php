<?php 
$footerTranding=mysqli_query($connect,"SELECT * FROM `tblposts` WHERE `Is_Active`=1 ORDER BY `tblposts`.`views` DESC LIMIT 3;");

$images=mysqli_query($connect,"SELECT id,PostImage FROM `tblposts` WHERE `Is_Active`=1  LIMIT 6");
?>
    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
      <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="mb-4 text-white text-uppercase font-weight-bold">
            Get In Touch
          </h5>
          <p class="font-weight-medium">
            <i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA
          </p>
          <p class="font-weight-medium">
            <i class="fa fa-phone-alt mr-2"></i>+012 345 67890
          </p>
          <p class="font-weight-medium">
            <i class="fa fa-envelope mr-2"></i>info@example.com
          </p>
          <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">
            Follow Us
          </h6>
          <div class="d-flex justify-content-start">
            <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"
              ><i class="fab fa-instagram"></i
            ></a>
            <a class="btn btn-lg btn-secondary btn-lg-square" href="#"
              ><i class="fab fa-youtube"></i
            ></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="mb-4 text-white text-uppercase font-weight-bold">
            Popular News
          </h5>
          <?php
             while ($row=mysqli_fetch_array($footerTranding)) {
          ?>
          <div class="mb-3">
            <div class="mb-2">
              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="category.php?catId=<?php echo $row['CategoryId'] ?>">
            <?php $categoryInfor=mysqli_fetch_array(mysqli_query($connect,"SELECT `CategoryName` FROM `tblcategory` WHERE `id`='{$row['CategoryId']}'")); echo $categoryInfor[0]; ?>
          </a>
              <a class="text-body" href=""><small><?php echo $row['PostingDate'] ?></small></a>
            </div>
            <a class="small text-body text-uppercase font-weight-medium" href="read.php?id=<?php echo $row['id'] ?>"
              ><?php echo $row['PostTitle'] ?></a
            >
          </div>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="mb-4 text-white text-uppercase font-weight-bold">
            Categories
          </h5>
          <div class="m-n1">
              <?php 
              $categoryInfor=mysqli_query($connect,"SELECT * FROM `tblcategory`");
              while($row=mysqli_fetch_array($categoryInfor))
              {
               ?>
            <a href="category.php?catId=<?php echo $row['id'] ?>" class="btn btn-sm btn-secondary m-1"><?php echo $row["CategoryName"] ?></a>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
          <h5 class="mb-4 text-white text-uppercase font-weight-bold">
            Flickr Photos
          </h5>
          <div class="row">
            <?php
            while ($row=mysqli_fetch_array($images)) {
            ?>
            <div class="col-4 mb-3">
              <a href="read.php?id=<?php echo $row[0] ?>"
                ><img class="w-100" width="200" height="70" src="admin/postimages/<?php echo $row[1] ?>" alt=""
              /></a>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div
      class="container-fluid py-4 px-sm-3 px-md-5"
      style="background: #111111"
    >
      <p class="m-0 text-center">
        &copy; <a href="#">Your Site Name</a>. All Rights Reserved.

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Design by <a href="https://htmlcodex.com">HTML Codex</a>
      </p>
    </div>
    <!-- Footer End -->