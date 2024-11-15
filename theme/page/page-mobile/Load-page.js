document.addEventListener('DOMContentLoaded', function() {
  // รอให้เอกสารทั้งหมดถูกโหลดเสร็จ (DOM ถูกสร้างครบแล้ว)
  
  window.addEventListener('load', function() {
    // เมื่อหน้าเว็บทั้งหมด (รวมทั้งภาพและสไตล์) โหลดเสร็จ
    
    const loader = document.getElementById('loader');
    // ดึง element ที่มี id เป็น "loader" ซึ่งเป็นตัวแสดงภาพหรือสัญลักษณ์รอการโหลด
    
    const mainContent = document.getElementById('main-content');
    // ดึง element ที่มี id เป็น "main-content" ซึ่งเป็นส่วนเนื้อหาหลักของหน้าเว็บ
    
    // เพิ่มคลาส "fade-out" เพื่อสร้างเอฟเฟ็กต์ในการซ่อน loader
    loader.classList.add('fade-out');
    
    // รอให้เอฟเฟ็กต์ของการซ่อน loader (animation) ทำงานเสร็จ
    loader.addEventListener('animationend', function() {
      // เมื่อการทำงานของ animation สิ้นสุดลง
      
      loader.style.display = 'none';
      // ซ่อน loader โดยการตั้งค่า display เป็น none เพื่อไม่ให้แสดงผลอีกต่อไป
      
      mainContent.style.display = 'block';
      // แสดงเนื้อหาหลักของเว็บ (main-content) โดยเปลี่ยนค่า display ให้เป็น block
    });
  });
});
