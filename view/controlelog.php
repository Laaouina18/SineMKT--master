<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location: index.php");
}
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=sinemkt', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('select * from admin ');
$statement->execute();
$amdins = $statement->fetchAll(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];
  $pass = $_POST['pass'];


  $statement = $pdo->prepare("SELECT * FROM admin where email = :email and pass = :pass;");

  $statement->bindValue(':email', $email);
  $statement->bindValue(':pass', $pass);
  $statement->execute();
  $user = $statement->fetch(PDO::FETCH_ASSOC);

  // $user == null ? "is null" : "inn't";
  if ($user) {
    $_SESSION["user"] = $user;
    header("location: index.php");
  }

//   echo "<pre>";
//   print_r($_SESSION);
//   echo "</pre>";

  // header("Location: index.php");
}

?>
<?php include_once("header.php") ?>
<section class="section-sign">
  <div class="containerr">
    <form class="form-signin" action="controlelog.php" method="POST">
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