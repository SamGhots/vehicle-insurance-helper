<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <!--=============== CSS ===============-->
<!-- ไฟล์ CSS ของ Theme -->
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/responsive.css">

<!-- ไฟล์ CSS ของ Components -->
<link rel="stylesheet" href="../../component/navbar/navbar.css">
<link rel="stylesheet" href="../../component/sidenav/sidenav.css">
<link rel="stylesheet" href="../../component/progressbar/progressbar.css">
<link rel="stylesheet" href="../../component/popup/popup.css">
<link rel="stylesheet" href="../../component/vehicleInfoCard/selected-vehicle.css">
<link rel="stylesheet" href="../../component/fillerCard/filler.css">
<link rel="stylesheet" href="../../component/fillerPopup/fillerPopup.css">
<link rel="stylesheet" href="../../component/list-card/list.css">
<link rel="stylesheet" href="../../component/list-card/comparison-list.css">
<link rel="stylesheet" href="../../component/list-card-popup/list-card-popup.css">

  <title>Drive Safe </title>
</head>
<body>
  <!-- navbar -->
  <?php include('../../component/navbar/navbar.php'); ?>





  <!-- sidenav -->
  <?php include('../../component/sidenav/sidenav.php'); ?>
  <!-- progressbar -->
  <?php include('../../component/progressbar/progressbar.php'); ?>
  <!--popup -->
  <?php include('../../component/popup/popup.php'); ?>
  <div class="container-content">
    <div class="left-container">
      <!-- selected-vehicle -->
      <?php include('../../component/vehicleInfoCard/selected-vehicle.php'); ?>
      <!-- filler -->
      <?php include('../../component/fillerCard/filler.php'); ?>
    </div>
    <!-- list-card -->
    <div class="right-container">
      <?php include('../../component/list-card/list.php'); ?>
    </div>
  </div>
  <?php include('../../component/list-card/comparison-list.php'); ?>
  <!-- fillerPopup -->
  <?php include('../../component/fillerPopup/fillerPopup.php'); ?>
  <!-- list-card-popup -->
  <?php include('../../component/list-card-popup/list-card-popup.php'); ?>

  <script src="../../component/sidenav/sidenav.js"></script>
  <script src="../../component/vehicleInfoCard/switchForm.js">

  </script>

  <script src="../../component/fillerPopup/switchFilterPopup.js"></script>
  <script src="../../component/fillerPopup/toggleVisibility.js">

  </script>
  <script src="../../component/fillerPopup/arrowSwitch.js">
  </script>
  <script src="../../component/popup/popup.js"></script>
  <script src="../../component/list-card/list-sort.js"></script>
  <script src="../../component/list-card-popup/list-card-popup.js"></script>
  <script src="../../component/navbar/dropdown.js"></script>
  <script>
    // เปิดป็อปอัปทันทีเมื่อโหลดหน้า
    window.addEventListener('load', function() {
      openPopup();

      // ปิดป็อปอัปหลังจาก 20 วินาที
      setTimeout(closePopup, 5000); // 20000 มิลลิวินาที = 20 วินาที
    });

    // Initial sorting when the page loads (sort from low to high)
    window.addEventListener('load', function() {
      sortList('asc');
    });
  </script>

  <script src="../../component/list-card/comparison-list.js"></script>



</body>

</html>