/*  <!-- กําหนดความสูงของการ์ด พื้นหลังสีฟ้า ให้เสมอเส้น --> */
function openNav() {
  document.getElementById("sidenav").style.width = "300px"; /* กําหนดความยาวของ   Side Navigation*/ 
  document.body.classList.add("sidenav-open");
}

function closeNav() {
  document.getElementById("sidenav").style.width = "0";
  document.body.classList.remove("sidenav-open");
}