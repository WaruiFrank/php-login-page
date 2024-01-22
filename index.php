<?php
 include_once 'header.php';
?>

<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Log In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>

    <!-- Login Form -->
    <form action="include/signup.inc.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

<?php
 include_once 'footer.php';
?>