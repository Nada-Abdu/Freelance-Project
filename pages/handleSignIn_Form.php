
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Create account</title>
    <link href="assets/css/SignUp_Login_Form.css" rel="stylesheet" media="all">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
          <div style="margin-top: 8%;">
            <img src="assets/img/logo.png" id="icon" alt="User Icon" style="width:60px; height:60px; margin-bottom: -3%" />
          </div>
          <!-- Tabs Titles -->

          <div style="margin-top: -2%;">
            <h2 class="active"> Sign In </h2>
            <a href="handleSignUp_Form.php"> <h2 class="inactive underlineHover">Sign Up</h2></a> </h2>
          </div> 
          
      
       
      
          <!-- Login Form -->
          <form action="handleSignIn_Form.php" method="POST">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
            <input type="text" id="login" class="fadeIn second" name="password" placeholder="Password" required>
            <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
          </div>
      
        </div>
      </div>
 
</body>

<script>
      // error alert 
      async function errorAlert(msg) {
        return Swal.fire({
          icon: 'error',
          title: 'Something went wrong!',
          text: msg,
          showConfirmButton: true,
          confirmButtonColor: '#dc3545',
          timer: 10000
          
        });
      }

 </script>
</html>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    if (  empty ($email) || empty ($_POST['password'])) {
        echo "<script type='text/javascript'>errorAlert('Please fill all fields ');</script>";
        return;
    }

    if(strlen($password)<9 && !empty($_POST['password'])){
 
        echo "<script type='text/javascript'>errorAlert('The password must be more than 8 digits or letters');</script>";
        return;
    }
    
    include('config-DB.php');
    $developer = mysqli_query($conn, " SELECT * FROM developer WHERE email= '$email' ");
    $developer = mysqli_fetch_assoc($developer);
    $user = mysqli_query($conn, " SELECT * FROM user WHERE email= '$email' ");
    $user = mysqli_fetch_assoc($user);
    #echo"ssssssssssssssssssssssssssss".$developer['Id']."aaaaaaaaaaaa".$_POST['password']."ssssssssssssssss".$password;
    if ($developer['Id'] != null && strcmp($developer['password'],$_POST['password'] )==0){
        setcookie('developerId', $developer['Id']);
        setcookie('developerName', $developer['name']);
        setcookie('developerEmail', $developer['email']);
        session_start();
        $_SESSION['loggedin'] = time();
        header ('Location: DeveloperHome.php');
        exit(); }
    elseif ( $user['Id'] != null &&  strcmp($user['password'],$_POST['password'] )==0){ 
        setcookie('userID', $user['Id']);
        setcookie('userName', $user['name']);
        setcookie('userEmail', $user['email']);
        session_start();
        $_SESSION['loggedin'] = time();
        header ('Location: userhome.php');
        exit();}
    else 
    echo "<script type='text/javascript'>errorAlert('The password or email is wrong');</script>";

    }
?>