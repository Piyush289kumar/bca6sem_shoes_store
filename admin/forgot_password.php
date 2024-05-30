<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../img/music.png" />
  <title>ADMIN | Login</title>
  <link rel="stylesheet" href="../css/bootstrap.minDJ.css" />
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/adminstyle_centerDJ.css">
</head>


<!-- Import Files -->
<?php
include ('config.php'); ?>
<!-- Login Back-End Code -->
<!-- Form Start -->
<?php
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  $sql_user_pass_cheack = "SELECT user_id, username FROM user WHERE username = '{$username}'" or die("Query Failed!! --> sql_user_pass_cheack");

  $result_sql_user_pass_cheack = mysqli_query($conn, $sql_user_pass_cheack);

  if (mysqli_num_rows($result_sql_user_pass_cheack) > 0) {
    // Create Session For OTP Auth
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['user_otp_email'] = $email;
    // OTP Generated 
    $otp = strtoupper(substr(md5(rand(11, 99)), 0, 6));
    // OTP Session for Send Email
    $_SESSION['otp_send_session'] = $otp;
    $sql_otp_create = "UPDATE user SET otp ='{$otp}' WHERE username = '{$username}'";
    if (mysqli_query($conn, $sql_otp_create)) {
      echo "<script>window.location.href='$hostname/admin/email_sender_files/forgot_password_otp_sender.php'</script>";
    } else {
      echo ("<div class='d-flex justify-content-center' style='padding-top:60px;'><p class='btn btn-danger'>Invalid Username and Email.</p></div>");
    }
  } else {
    echo ("<div class='d-flex justify-content-center' style='padding-top:60px;'><p class='btn btn-danger'>Invalid Username and Email.</p></div>");
  }
}
?>
<!-- Login Back-End Code -->
<?php ?>


<body>
  <div id="wrapper-admin" class="body-content">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
          <!-- logo -->
          <h3 class="heading text-center"
            style="font-weight:700; background:#fe6c00; padding:12px 24px; border-radius:8px; color:#fff;">
            Shoes Store</h3>
          <!-- logo -->
          <!-- <img class=" logo" src="images/news.jpg"> -->
          <h3 class="heading text-center" style="font-weight:700">Login</h3>
          <!-- Form Start -->
          <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="User Name" autocomplete="off"
                required>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <p>Already have an account? <a href="index.php">login</a></p>
            <br>

            <input type="submit" name="login" class="btn btn-primary" value="&nbsp;&nbsp;GET OTP&nbsp;&nbsp;" />
            <button class="btn btn-secondary"><a
                href="<?php echo $hostname ?>">&nbsp;&nbsp;Back&nbsp;&nbsp;</a></button>
          </form>
          <!-- /Form  End -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>