<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--=============== ICONS ===============-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link
    rel="stylesheet"
    data-purpose="Layout StyleSheet"
    title="Web Awesome"
    href="/css/app-wa-09b459cf485d4b1f3304947240314c05.css?vsn=d">
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
  <!--=============== ICONS ===============-->
  <link rel="stylesheet" href="forgot.css">
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
  <section class="login-container ">
    <!-- ปุ่มลูกศรกลับ -->
    <div class="back-arrow">
      <a href="../../page/login/login.php"> <i class="fa-solid fa-angle-left"></i></a>
    </div>
    <div class="login-header">
      <div class="login-logo">
        <i class="fa-solid fa-steering-wheel"></i>
        <h1>DriveSafe</h1>
      </div>
      <div class="login-svg">
        <img src="../../img/City driver-rafiki.svg" alt="By My Car Image">
      </div>
    </div>

    <!-- ฟอร์มล็อกอิน -->
    <div class="login-form-container">
      <form action="/login" method="post" class="login-form">
        <div class="form-group">
          <label for="email">ป้อนที่อยู่อีเมลของคุณ:</label>
          <input type="email" id="email" name="email" placeholder="" required>
        </div>
   
        <div class="form-links">
          <a href="../../page/login/login.php">เข้าสู่ระบบ?</a>
        </div>
        <div class="form-group">
          <button type="submit" class="btn-login">รีเซ็ตรหัสผ่าน</button>
        </div>

      </form>

      <!-- ปุ่มล็อกอินด้วย Google, LINE, Facebook -->
      <div class="social-title">
        <hr><span>หรือเข้าสู่ระบบด้วย</span>
        <hr>
      </div>

      <div class="social-login">

        <!-- ปุ่มกดล็อคอิน Google -->
        <button class="btn-google"><img src="../../img/google.png" alt=""></button>
        <!-- ปุ่มกดล็อคอิน line -->
        <button class="btn-line"><i class="fa-brands fa-line"></i></button>
        <!-- ปุ่มกดล็อกอินด้วย facebook -->
        <button class="btn-facebook"><i class="fa-brands fa-facebook"></i></button>


      </div>
      <div class="sign-up-title">
        <h1>ยังไม่มีบัญชี? </h1>
        <a href="../../page/register/register.php">ลงทะเบียนตอนนี้</a>
      </div>
    </div>
  </section>

</body>

</html>