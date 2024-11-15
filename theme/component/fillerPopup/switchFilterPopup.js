function switchFilterPopup() {
  const filterBox = document.getElementById("filterBox");
  const backdrop = document.getElementById("backdrop");
  if (filterBox.classList.contains("show")) {
    filterBox.classList.remove("show");
    setTimeout(() => filterBox.style.display = "none", 300); // รอ transition ก่อนซ่อน
    backdrop.style.display = "none";
  } else {
    filterBox.style.display = "block";
    setTimeout(() => filterBox.classList.add("show"), 10); // เลื่อนขึ้นหลังจากแสดง
    backdrop.style.display = "block";
  }
}

function closeFilter() {
  switchFilterPopup(); // ใช้ฟังก์ชันเดียวกันเพื่อปิด
}