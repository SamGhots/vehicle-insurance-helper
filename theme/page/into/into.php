<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>into</title>
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
  <link rel="stylesheet" href="into.css">
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

  <div class="hero main-section">
    <div class="into-logo">
      <i class="fa-solid fa-steering-wheel"></i>
      <h1>DriveSafe</h1>
    </div>
    <div class="city"></div>
    <div class="car">
      <img src="../../img/car-rainbow.png" alt="">
    </div>
    <div class="wheel">
      <img src="../../img/wheel.png" class="back-wheel" alt="">
      <img src="../../img/wheel.png" class="front-wheel" alt="">
    </div>
    <div class="button-box">
      <button class="login" id="loginButton">เข้าสู่ระบบ</button>
      <button class="register" id="registerButton">ลงทะเบียน</button>

      <a href="https://taxidee.com/san/car-insurance/" class="guest-access">เช้าสู่เว็ปไซต์ ด้วยไม่มีบัญชี</a>
    </div>

  </div>
  <script>
  document.getElementById('loginButton').addEventListener('click', function() {
    window.location.href = '../../page/login/login.php'; // เปลี่ยน URL เป็นที่อยู่ของหน้า login ของคุณ
  });
  document.getElementById('registerButton').addEventListener('click', function() {
    window.location.href = '../../page/register/register.php'; // เปลี่ยน URL เป็นที่อยู่ของหน้า register ของคุณ
  });
</script>

</body>

</html>