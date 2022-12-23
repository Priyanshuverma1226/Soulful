<?php
require 'conn.php';
require 'navbar.php';
include('modal/login.php');
include('modal/signup.php');
?>
<div class="container mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md">
        <img src="assets/img/nav1.jpg" alt="" class="ms- 5 rounded" style="width: 600px;" srcset="">

        <div class="d-flex flex-row mb-3">
          <img src="assets/img/nav.jpg" alt="" style="width: 200px; margin-top: 12px" class=" p-2 rounded" srcset="">
          <img src="assets/img/nav4.jpg" alt="" class=" p-2  rounded" style="width: 200px; margin-top: 12px" srcset="">
          <img src="assets/img/nav5.jpg" alt="" class=" p-2 rounded" style="width: 200px; margin-top: 12px" srcset="">
        </div>
      </div>

      <div class="col-md">
        <img src="assets/img/nav2.jpg" class="ms-2 rounded" style="height: 600px;" alt="">
      </div>
    </div>
  </div>

  <hr>


  <p class="text-center fs-1">Food <span class="text-danger fw-underline">Item's</span> </p>






  <div class="row">

    <?php

    $query = "SELECT * FROM `food` ";
    $run = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($run)) {
      # code...
    ?>
      <div class="col-3">

        <div class="card shadow mb-5" style="width: 18rem;">
          <img src="assets/img/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['name']; ?></h5>
            <p class="card-text"><?php echo $row['descl']; ?>..</p>
            <?php
            if (!isset($_SESSION['user'])) {


            ?>
              <a href="#" onclick="alert('Login First')" class="btn btn-danger shadow"><i class="bi bi-bag-plus-fill me-2"></i> Add Item</a>

            <?php
            } else {

            ?>

              <a href="functions/add_food/add.php?f_id=<?php echo $row['id']; ?>" class="btn btn-danger shadow"><i class="bi bi-bag-plus-fill me-2"></i> Add Food</a>

            <?php
            }
            ?>
          </div>
        </div>

      </div>
    <?php
    }
    ?>


  </div>



  <?php
  require 'footer.php';
  ?>