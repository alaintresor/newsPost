<?php 
if(isset($_GET['id']))
{
$trandingNews=mysqli_query($connect,"SELECT * FROM `tblposts` WHERE `id`!={$_GET['id']} AND `Is_Active`=1 ORDER BY `tblposts`.`PostingDate` DESC LIMIT 5;");
}else
$trandingNews=mysqli_query($connect,"SELECT * FROM `tblposts` WHERE `Is_Active`=1 ORDER BY `tblposts`.`PostingDate` DESC LIMIT 5;");
?>
<div class="mb-3">
  <div class="section-title mb-0">
    <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
  </div>
  <div class="bg-white border border-top-0 p-3">
    <?php  while($row=mysqli_fetch_array($trandingNews)){ ?>
    <div class="d-flex align-items-center bg-white mb-3" style="height: 110px">
      <img
        class="img-fluid"
        width="100"
        style="height: 110px"
        src="admin/postimages/<?php echo $row['PostImage'] ?>"
        alt=""
      />
      <div
        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0"
      >
        <div class="mb-2">
          <a
            class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
            href="category.php?catId=<?php echo $row['CategoryId'] ?>"
          >
            <?php $categoryInfor=mysqli_fetch_array(mysqli_query($connect,"SELECT `CategoryName` FROM `tblcategory` WHERE `id`='{$row['CategoryId']}'")); echo $categoryInfor[0]; ?>
          </a>
          <a class="text-body" href=""
            ><small><?php echo $row['PostingDate'] ?></small></a
          >
        </div>
        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="read.php?id=<?php echo $row['id'] ?>"
          ><?php echo $row['PostTitle'] ?></a
        >
      </div>
    </div>
    <?php } ?>
  </div>
</div>
