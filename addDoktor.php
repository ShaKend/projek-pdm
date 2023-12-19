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

//validasi
if(isset($_REQUEST['addDoc'])){
    if(($_REQUEST['docName'] == "") || ($_REQUEST['desc'] == "")){
        $msg = '<span class="text-danger">Fill all forms</span>';
    }else{
        $docName = $_REQUEST['docName'];
        $desc = $_REQUEST['desc'];
        $docImg = $_FILES['docImg']['name'];
        $docImgTemp = $_FILES['docImg']['tmp_name'];
        $imgFolder = './dokter/'.$docImg;
        move_uploaded_file($docImgTemp, $imgFolder);

        $sql = "INSERT INTO doctor (doctorName, doctorDesc, doctorImg)
                VALUES ('$docName', '$desc', '$imgFolder')";

        if($conn->query($sql) == true){
            $msg = '<span class="text-success"> Doctor added</span>';
        }else{
            $msg = '<span class="text-danger"> Query failed!</span>';
        }
    }
}
?>

<div class="container text-white mt-5">
    <div class="formulir mx-auto bgblack p-4 rounded-3" style="width: 350px;">
        <form method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="docName" class="form-label">Doctor Name </label><small id="regisStatus1"></small>
            <input type="text" class="form-control" id="docName" name="docName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Description </label><small id="regisStatus2"></small>
            <textarea type="text" class="form-control" id="desc" name="desc" aria-describedby="emailHelp"></textarea>
        </div>
        <div class="mb-3">
            <label for="docImg" class="form-label">Image </label><small id="regisStatus3"></small>
            <input type="file" class="form-control" name="docImg" accept="image/jpeg, image/png, image/jpg" id="docImg">
        </div>
        <button type="submit" name="addDoc" class="btn btn-light" id="regisBtn">Add doctor</button>
        <span id="errorMsg"><?php if(isset($msg)){echo $msg;} ?></span>
        </form>
    </div>
</div>