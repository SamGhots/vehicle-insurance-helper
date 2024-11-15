function arrowSwitch(id, iconSelector) {
  const filterBox = document.getElementById(id);
  const chevronIcon = document.querySelector(iconSelector);

  // เช็คว่า filterBox มีคลาส 'show' หรือไม่
  if (filterBox.classList.contains('show')) {
    // ซ่อนกล่อง
    filterBox.classList.remove('show');
    filterBox.classList.add('hide');
    chevronIcon.classList.remove('fa-chevron-down'); // เปลี่ยนไอคอน
    chevronIcon.classList.add('fa-chevron-up'); // ใช้ไอคอนสำหรับปิด
  } else {
    // แสดงกล่อง
    filterBox.classList.remove('hide');
    filterBox.classList.add('show');
    chevronIcon.classList.remove('fa-chevron-up'); // เปลี่ยนไอคอน
    chevronIcon.classList.add('fa-chevron-down');
  }
}