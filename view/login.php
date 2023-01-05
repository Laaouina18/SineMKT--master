
<?php 
 include_once("../controller/loginController.php");
include_once("header.php"); ?>
<section class="section-sign">
  <div class="containerr">
    <form class="form-signin" action="/login" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">sign in</h1>
      <div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required
          autofocus>
      </div>
      <div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit" style="background-color:#e99c2e;">Sign in</button>
    </form>
  </div>
</section>
<?php include_once("footer.php") ?>