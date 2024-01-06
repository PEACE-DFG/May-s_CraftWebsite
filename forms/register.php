<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/x-icon" href="../favicon/favicon.ico">

  <link href=" https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <title>Register_Page</title>
</head>

<body>
  <?php
$errors = []; // Initialize $errors array

$data = array(
    'email' => '',
    'password' => '',
    'repeatpassword' => '',
    'phonenumber' => ''
);

if (isset($_POST['register'])) {
    // Validation code
    if (empty($_POST['email'])) {
        $errors['emailErr'] = "Your email is required";
    } else {
        $data['email'] = $_POST['email'];
    }

    if (empty($_POST['password'])) {
        $errors['passwordErr'] = "Your password is required";
    } elseif (strlen($_POST['password']) < 8) {
        $errors['passwordErr'] = "Password must be at least 8 characters long";
    } else {
        $data['password'] = $_POST['password'];
    }

    if (empty($_POST['repeatpassword'])) {
        $errors['repeatpasswordErr'] = "Confirm password is required";
    } elseif ($_POST['password'] !== $_POST['repeatpassword']) {
        $errors['repeatpasswordErr'] = "Passwords do not match";
    } else {
        $data['repeatpassword'] = $_POST['repeatpassword'];
    }

    if (empty($_POST['phonenumber'])) {
        $errors['phonenumberErr'] = "Your Phone Number is required";
    } else {
        $data['phonenumber'] = $_POST['phonenumber'];
    }

    // Assign values to $email, $password, $phonenumber, and $date
    $email = $data['email'];
    $password = md5($data['password']); // Note: md5 is not a secure way to store passwords, consider using stronger encryption methods.
    $phonenumber = $data['phonenumber'];
    $date = date("Y-m-d h:i:s a");
}
?>

  <div class="container">
    <form action="" method="post">
      <p>SIGN-UP</p>
      <input type="email" name="email" placeholder="Email"><br>
      <small style="color:red">
        <?php echo array_key_exists('emailErr', $errors) ? '<div class="alert alert-danger" role="alert">' . $errors['emailErr'] . '</div>' : ''; ?>
      </small>
      <input type="password" name="password" placeholder="Password"><br>
      <small style="color:red">
        <?php echo array_key_exists('passwordErr', $errors) ? '<div class="alert alert-danger" role="alert">' . $errors['passwordErr'] . '</div>' : ''; ?>
      </small>
      <input type="password" name="repeatpassword" placeholder="Repeat Password"><br>
      <small style="color:red">
        <?php echo array_key_exists('repeatpasswordErr', $errors) ? '<div class="alert alert-danger" role="alert">' . $errors['repeatpasswordErr'] . '</div>' : ''; ?>
      </small>
      <input type="text" name="phonenumber" placeholder="Phone Number"><br>
      <small style="color:red">
        <?php echo array_key_exists('phonenumberErr', $errors) ? '<div class="alert alert-danger" role="alert">' . $errors['phonenumberErr'] . '</div>' : ''; ?>
      </small>
      <input type="submit" name="register" value="Sign in"><br>
      <a href="#">Forgot Password?</a><br>
      <small style="color:goldenrod">Already have an account?</small>
      <br>
      <a href="login.php">Sign-in</a>
    </form>

    <div class="drops">
      <div class="drop drop-1"></div>
      <div class="drop drop-2"></div>
      <div class="drop drop-3"></div>
      <div class="drop drop-4"></div>
      <div class="drop drop-5"></div>
    </div>
  </div>
</body>

</html>