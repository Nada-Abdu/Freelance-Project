
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
            <a href="handleSignIn_Form.php"> <h2 class="inactive underlineHover">Sign In</h2></a> </h2>
            <h2 class="active"> Sign Up </h2>
          </div>

          <!-- Login Form -->
          <form style="margin-top: 2%;" id="signUp_form" action="handleSignUp_Form.php" method="POST"> 
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" required>
            <input type="text" id="login" class="fadeIn second" name="name" placeholder="Name" required>
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password" required>
            <div class="fadeIn fourth radio" style="  background-color: #f6f6f6; " > 
                <input type="radio"  name="type" value="Developer" onchange="getValue(this)">
                <label class="radio-container "style="margin-right: 5%;"> Devloper 
                </label>
                <input type="radio" name="type" value="User" onchange="getValue(this)">
                <label   class="radio-container">User 
                </label>
            </div>
            <div id="Devloper">
            </div>
            <input type="submit" name="submit" style="margin-top: 6%;" value="Sign Up">
          </form>
      
          <!-- Remind Passowrd -->
          <div id="formFooter">
          </div>
      
        </div>
      </div>
</body>


<script>
    function getValue(radio) {
        if (radio.value == "Developer"){
        document.getElementById("Devloper").innerHTML=
        '<input type="text"  name="phone" placeholder="Phone">'+
        '<input type="text"  name="specialist" placeholder="Specialist">'+
        '<textarea name="skills" class= "radio" placeholder="Enter your skills here..." ></textarea>';
     }
     else {  document.getElementById("Devloper").innerHTML= "";}}
  </script>
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
  
      // success alert 
      async function successAlert(msg) {
        return Swal.fire({
          icon: 'success',
          title: msg,
          showConfirmButton: false,
          timer: 2500
        });
  
      }
    </script>
</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $specialist = $_POST['specialist'];
    $skills = $_POST['skills'];
    $type = $_POST['type'];

    if (empty ($name) || empty ($email) || empty ($password)||empty ($type)) {
        echo "<script type='text/javascript'>errorAlert('Please fill all fields ');</script>";
        return;
    }
    if ( !is_numeric ($phone) && !empty ($phone) && strlen($phone)>9 ) {
        echo "<script type='text/javascript'>errorAlert('the phone must be number only');</script>";
        return;
    }
    if(strlen($password)<9 && !empty($password)){
        echo "<script type='text/javascript'>errorAlert('The password must be more than 8 digits or letters');</script>";
        return;
    }

        include('config-DB.php');
        $developer = mysqli_query($conn, " SELECT * FROM developer WHERE email= '$email' ");
        $developer = mysqli_fetch_assoc($developer);
        $user = mysqli_query($conn, " SELECT * FROM user WHERE email= '$email' ");
        $user = mysqli_fetch_assoc($user);
 
        if ($developer['Id'] != null || $user['Id'] != null  ){
            echo "<script type='text/javascript'>errorAlert('your email already exists, Please sign in  ');</script>";
            return;
        }
        if (strcmp($type,"Developer" )==0){ 
          echo "tyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaape".$type;

            if (empty ($phone) || empty ($specialist)) {
                echo "<script type='text/javascript'>alert('Please fill your phone and specialist');</script>";
                return;
            }
            $password= $_POST['password'];
            $sql= mysqli_query($conn,"INSERT INTO `developer` (`name`, `phone`, `email`, `skills`, `specialist`, `password`)
            VALUES ('$name', '$phone', '$email', '$skills', '$specialist', '$password')");
              if ($sql === TRUE) {
                echo "<script type='text/javascript'>alert('New record created successfully');</script>";
                setcookie('developerId',  mysqli_insert_id($conn));
                setcookie('developerName', $name);
                setcookie('developerEmail', $email);
                session_start();
                $_SESSION['loggedin'] = time();
                header ('Location: DeveloperHome.php');
                exit();
            }
            else{
              echo "Error: " . $sql . "<br>" . $conn->error;
              }
        }
        elseif (strcmp($type,"User" )==0){ 
          $password= $_POST['password'];
          #echo "typwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwe".$type. $email.$password.$name.'';
            

            $sql= mysqli_query($conn,"INSERT INTO `user` ( `email`, `password`, `name`)
            VALUES ( '$email',  '$password' ,'$name')");
              if ($sql === TRUE) {
                echo "<script type='text/javascript'>alert('New record created successfully');</script>";
                setcookie('userID', mysqli_insert_id($conn));
                setcookie('userName', $name);
                setcookie('userEmail',$email);
                session_start();
                $_SESSION['loggedin'] = time();
                header ('Location: userhome.php');
                exit();
            }
            else{
              echo "Error: " . $sql . "<br>" . $conn->error;
              }
            }

      
      
        }
?>