<?php 
session_start();

//NAVBAR
include('./static/navbar.php'); 

?>

<div class="container text-white mt-5">
    <div class="formulir mx-auto bgblack p-4 rounded-3" style="width: 300px;">
        <form method="post" autocomplete="off">
        <div class="mb-3">
            <label for="regName" class="form-label">Name </label><small id="regisStatus1"></small>
            <input type="text" class="form-control" id="regName" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="regEmail" class="form-label">Email </label><small id="regisStatus2"></small>
            <input type="email" class="form-control" id="regEmail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="regPass" class="form-label">Password </label><small id="regisStatus3"></small>
            <input type="password" class="form-control" id="regPass">
        </div>
        <button type="submit" class="btn btn-light" id="regisBtn">Register</button><span id="errorMsg"></span>
        <div class="mt-3">Have an account? <a href="./login.php" class="text-light" id="loginLink">Login</a></div>
        </form>
    </div>
</div>

<!-- footer  -->
<?php include('./static/footer.php'); ?>