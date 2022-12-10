

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css\style.css">
  <!-- <link rel="stylesheet" href="css\main.css"> -->
  <title>Sign in & Sign up Form</title>
  <style>
    .invalid{
      color: red;
    }
    #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}
  </style>
</head>

<body>
 
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="login-backend.php" method="post" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Username" id="uname">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
        <form action="signup-backend.php" method="post" class="sign-up-form">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="fname" placeholder="name" id="fname">
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="uname" placeholder="uname" id="uname">
           
          </div>
          <div class="input-field">
            <i class="fas fa-email"></i>
            <input type="email" name="email" placeholder="email" id="email">
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" id="pass" name="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
           
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="cpassword" placeholder="cpassword" id="confirm_pass">

          </div>
          <!-- <span id="message"><p class="invalid" id="wrong_pass_alert">password must contain 8 char</p></span> -->

          <input type="submit" class="btn" id="create" value="Sign up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Create account by simple steps and book your exiting trips...
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="image/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            DUDE you have already created account just sign in it by username and password.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="image/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>


  <script src="app.js"></script>
    <!-- <script>
      var pass = document.getElementById("pass");
      var wrong_pass = document.getElementById("wrong_pass_alert");
      pass.onfoucs = function () {
        document.getElementById("message").style.display= "block";
      }
    </script> -->
</body>

</html>








