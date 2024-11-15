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
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="../../css/style.css"> 
</head>

<body>
  <section class="register-container">
      <!-- ปุ่มลูกศรกลับ -->
  <div class="back-arrow">
    <a href="../../page/login/login.php"> <i class="fa-solid fa-angle-left"></i></a>
  </div>
    <div class="register-header">
      <div class="register-logo">
        <i class="fa-solid fa-steering-wheel"></i>
        <h1>DriveSafe</h1>
      </div>
      <div class="register-svg">
        <img src="../../img/City driver-rafiki.svg" alt="By My Car Image">
      </div>
    </div>

    <!-- ฟอร์มล็อกอิน -->
    <div class="register-form-container">
    <form action="/register" method="post" class="register-form">
        <div class="form-group">
            <label for="username">ชื่อผู้ใช้:</label>
            <input type="text" id="username" name="username" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" placeholder="" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">ยืนยันรหัสผ่าน:</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="" required>
        </div>

        <!-- ช่องกดยินยอม -->
        <div class="form-group">
            <label>
                <input type="checkbox" name="agreement" required>
                ฉันเห็นด้วยกับ <a href="/terms">ข้อกำหนดและเงื่อนไข</a> เเละ <a href="/privacy-policy">นโยบายความเป็นส่วนตัว</a>.
            </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-register">ลงทะเบียน</button>
        </div>
    </form>
      <!-- ปุ่มล็อกอินด้วย Google, LINE, Facebook -->
      <div class="social-title">
        <hr><span>หรือ เข้าสู่ระบบด้วย</span>
        <hr>
      </div>


      <div class="social-login">
        <button class="btn-google"><img src="../../img/google.png" alt=""></button>
        <button class="btn-line"><i class="fa-brands fa-line"></i></button>
        <button class="btn-facebook"><i class="fa-brands fa-facebook"></i></button>
      </div>
      <div class="sign-up-title">
        <h1>มีบัญชีอยู่แล้ว? </h1>
        <a href="../../page/login/login.php">เข้าสู่ระบบ</a>
      </div>
    </div>
  </section>

</body>

</html>