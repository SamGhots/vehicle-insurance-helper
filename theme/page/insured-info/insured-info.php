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
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/responsive.css">
  <link rel="stylesheet" href="../../component/navbar/navbar.css">
  <link rel="stylesheet" href="../../component/sidenav/sidenav.css">

  <link rel="stylesheet" href="../../component/progressbar/progressbar.css">
  <link rel="stylesheet" href="../../component/fillerPopup/fillerPopup.css">

  <link rel="stylesheet" href="insured-info.css">



  <title>Drive Safe </title>
</head>

<body>
  <!-- navbar -->
  <?php include('../../component/navbar/navbar.php'); ?>
  <!-- sidenav -->
  <?php include('../../component/sidenav/sidenav.php'); ?>
  <!-- progressbar -->
  <div class="stepper-wrapper main-section">
    <div class="stepper-wrapper-container">
      <div class="stepper-item completed">
        <div class="step-counter">1</div>
        <div class="step-name">เลือกเเผน</div>
      </div>
      <div class="stepper-item completed">
        <div class="step-counter">2</div>
        <div class="step-name">กรอกข้อมูล</div>
      </div>
      <div class="stepper-item ">
        <div class="step-counter">3</div>
        <div class="step-name">ชําระเงิน</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter">4</div>
        <div class="step-name">ทํารายการสําเร็จ</div>
      </div>
    </div>

  </div>
  <!-- progressbar -->
  <section class="main-section custom">
    <div class="card-container">
      <div class="card-title">
      <i class="fa-solid fa-user-shield"></i>
        </i> ข้อมูลผู้เอาประกัน <span> (เจ้าของรถ)</span>
      </div>

      <form action="process_form.php" method="POST">
        <!-- input-container 1  -->
        <div class="input-container">
          <div class="icon-container">
            <i class="fa-solid fa-id-card"></i>
          </div>

          <input type="text" id="citizen-id" name="citizen_id" maxlength="13" 3" placeholder="เลขบัตรประชาชน" required>
        </div>
        <!-- input-container 2  -->
        <div class="input-container">
          <div class="icon-container">
            <i class="fa-solid fa-user"></i>
          </div>


          <div class="select-container">
            <select id="prefix" name="prefix" required>
              <option value="">คํานําหน้า</option>
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
            <i class="fa-solid fa-chevron-down chevron"></i> <!-- ไอคอนลูกศร -->
          </div>

        </div>

        <!-- input-container 3 -->
        <div class="input-container">

          <input class="custom-select" type="text" id="first-name" name="first_name" placeholder="ชื่อตามบัตรประชาชน" required>
        </div>

        <!-- input-container 4 -->
        <div class="input-container">

          <input class="custom-select" type="text" id="last-name" name="last_name" placeholder="นามสกุลตามบัตรประชาชน" required>
        </div>
        <!-- input-container 5 -->
        <div class="input-container">
          <div class="icon-container"> <i class="fa-solid fa-calendar custom-icon"></i></div>

          <div class="date-input-group">
            <div class="input-container  custom">
            <div class="icon-container"> <i class="fa-solid fa-calendar"></i></div>
              <div class="select-container">
                <select id="year" name="year" required>
                  <option value="">ปี</option>
                  <!-- ตัวเลือกปีจะถูกเพิ่มโดย JavaScript -->
                </select>
                <i class="fa-solid fa-chevron-down chevron"></i> <!-- ไอคอนลูกศร -->
              </div>
            </div>
            <div class="select-container">
            <select class="custom-select" id="month" name="month" required>
              <option value="">เดือน</option>
              <option value="1">มกราคม</option>
              <option value="2">กุมภาพันธ์</option>
              <option value="3">มีนาคม</option>
              <option value="4">เมษายน</option>
              <option value="5">พฤษภาคม</option>
              <option value="6">มิถุนายน</option>
              <option value="7">กรกฎาคม</option>
              <option value="8">สิงหาคม</option>
              <option value="9">กันยายน</option>
              <option value="10">ตุลาคม</option>
              <option value="11">พฤศจิกายน</option>
              <option value="12">ธันวาคม</option>
              
            </select>
            <i class="fa-solid fa-chevron-down chevron"></i> <!-- ไอคอนลูกศร -->
            </div>
            <input class="custom-select" type="text" id="day" name="day" maxlength="2" placeholder="วัน" required>
          </div>

        </div>

        <!-- input-container 6 -->
        <div class="input-container">
          <div class="icon-container">
            <i class="fa-solid fa-envelope"></i>
          </div>

          <input type="email" id="email" name="email" placeholder="อีเมล" required>


        </div>
        <!-- input-container 7 -->
        <div class="input-container">
          <div class="icon-container">
            <i class="fa-solid fa-phone"></i> <!-- ใช้ไอคอนโทรศัพท์ -->
          </div>
          <input type="tel" id="phone" name="phone" placeholder="เบอร์โทรศัพท์" maxlength="10" required>
        </div>
        <!-- input-group 7  -->
        <div class="form-actions">
          <button type="submit" class="submit-button">ส่งข้อมูล</button>
        </div>

      </form>
    </div>
  </section>
  <script src="../../component/sidenav/sidenav.js"></script>
  <script src="../../component/navbar/dropdown.js"></script>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const yearSelect = document.getElementById('year');
      const startYear = 2487; // ปีเริ่มต้น
      const endYear = 2547; // ปีสิ้นสุด

      // เริ่มต้นจากปีปัจจุบันลงไปจนถึงปีเริ่มต้น
      for (let year = endYear; year >= startYear; year--) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
      }
    });
  </script>

  <script>
    const select = document.getElementById('prefix');
    const chevron = document.querySelector('.chevron');

    // เมื่อมีการเปลี่ยนแปลงใน select
    select.addEventListener('change', function() {
      chevron.style.transform = 'translateY(-50%) rotate(0deg)'; // หมุนลูกศรกลับลง
      select.blur(); // คลายสถานะ focus
    });

    // เมื่อมีการคลิกใน select
    select.addEventListener('focus', function() {
      chevron.style.transform = 'translateY(-50%) rotate(180deg)'; // หมุนลูกศรขึ้น
    });
  </script>



</body>

</html>