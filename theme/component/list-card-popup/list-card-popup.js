// ฟังก์ชันเปิดป็อปอัป
function openDetailsPopup(event) {
  // รับค่าจาก data attribute ของปุ่มที่ถูกคลิก
  const popupId = event.currentTarget.getAttribute('data-popup');

  // ค้นหาป็อปอัปที่ตรงกับ popupId
  const popup = document.getElementById(popupId);

  // แสดงป็อปอัปโดยเพิ่มคลาส show เพื่อค่อย ๆ แสดงป็อปอัป
  popup.classList.add('show');
}

// ฟังก์ชันปิดป็อปอัป
function closeDetailsPopup() {
  document.querySelectorAll('.popup-list-card').forEach(popup => {
    popup.classList.remove('show'); // ลบคลาส show เพื่อซ่อนป็อปอัป
  });
}

// เพิ่ม event listener ให้กับปุ่ม "รายละเอียด"
document.querySelectorAll('.button-details').forEach(button => {
  button.addEventListener('click', openDetailsPopup);
});

// เพิ่ม event listener ให้กับปุ่มปิดป็อปอัป
document.querySelectorAll('.close-button-popup-list-card').forEach(button => {
  button.addEventListener('click', closeDetailsPopup);
});
