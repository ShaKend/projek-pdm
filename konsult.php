<?php 
//session_start();
include_once('./query/dbConnection.php');

if(!isset($_SESSION)){
  session_start();
}

if(!isset($_SESSION['userLogin'])){
  echo "<script>location.href='./index.php'</script>";
}

//NAVBAR
include('./static/navbar.php'); 

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);
?>

<div class="container text-center mt-5">
    <h2 class="text-start mb-5">Hello 
      <?php if(isset($_SESSION['userName'])){echo $_SESSION['userName'];}else{echo "user";} ?>
    </h2>
  <div class="row text-white justify-content-around">

  <?php 
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
  ?>

    <div class="col">   
        <div class="card bg-black mb-4" style="width: 18rem;">
            <img src="<?= $row['doctorImg'] ?>" class="card-img-top" alt="..." style="max-height: 190px">
            <div class="card-body">
                <h5 class="card-title"><?= $row['doctorName'] ?></h5>
                <p class="card-text"><?= $row['doctorDesc'] ?></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    
              <?php
            }
          }
        ?>
  </div>
  
</div>


<!-- end  -->
<?php include('./static/footer.php'); ?>