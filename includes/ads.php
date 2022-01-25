<div class="mb-3">
  <div class="section-title mb-0">
    <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
  </div>
  <div
    id="carouselExampleSlidesOnly"
    class="carousel slide"
    data-ride="carousel"
  >
    <div class="carousel-inner">
      <div class="carousel-item active">
        <?php
                    
                     $sql="SELECT adsimage FROM ads";
    
                     $query=$connect->query($sql);
        $row=mysqli_fetch_array($query); ?>
        <?php   echo "<img  class='d-block w-100' src='admin/Adsimage/".$row['adsimage']."'>";
        ?>
      </div>

      <?php
                    
                     $sql="SELECT * FROM ads ";
                     $query=$connect->query($sql);
      while($row=mysqli_fetch_array($query)){ ?>
      <div class="carousel-item">
        <?php   echo "<img  class='d-block w-100' src='admin/Adsimage/".$row['adsimage']."'>";
        ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
