<?php 

//NAVBAR
include('./static/navbar.php'); 

?>

<div class="container text-white mt-5">
    <div class="formulir mx-auto bgblack p-4 rounded-3" style="width: 300px;">
        <form method="post">
        <div id="nameInputLog"></div>
        <div class="mb-3" id="emailInputLog">
            <label for="logEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="logEmail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3" id="passInputLog">
            <label for="logPass" class="form-label">Password</label>
            <input type="password" class="form-control" id="logPass">
        </div>
        <button type="submit" class="btn btn-light" id="loginBtn">Login</button><span id="errorMsg"></span>
        <div class="mt-3">don't have an account? <a href="./regis.php" id="regisLink">Register</a></div>
        </form>
    </div>
</div>

<!-- footer  -->
<?php include('./static/footer.php'); ?>