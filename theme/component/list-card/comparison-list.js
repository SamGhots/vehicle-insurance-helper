const compareCheckboxes = document.querySelectorAll('.compare-checkbox');
const selectedItems = [];
const maxItems = 4;
const popup = document.getElementById('compare-popup');
const closePopupBtn = document.getElementById('close-popup');
const slots = [
  document.getElementById('slot-1'),
  document.getElementById('slot-2'),
  document.getElementById('slot-3'),
  document.getElementById('slot-4')
];

// ฟังก์ชันที่ใช้แสดง Popup
function showPopup() {
  popup.style.visibility = 'visible'; // แสดง popup ก่อน
  setTimeout(() => {
    popup.classList.add('show'); // หลังจากนั้นเลื่อนขึ้น
  }, 10); // Delay เล็กน้อยเพื่อให้ visibility มีผลก่อน
}

// ฟังก์ชันที่ใช้ซ่อน Popup
function hidePopup() {
  popup.classList.remove('show'); // เลื่อนลงก่อน
  setTimeout(() => {
    popup.style.visibility = 'hidden'; // ซ่อน popup หลังจากเลื่อนลงเสร็จแล้ว

    // ล้างค่าที่เก็บเปรียบเทียบ
    selectedItems.length = 0; // ล้าง array ของ selectedItems

    slots.forEach(slot => {
      slot.innerHTML = ''; // ลบข้อมูลในช่อง
      slot.removeAttribute('data-item'); // ลบ attribute ข้อมูล
      slot.classList.remove('filled'); // เอา class filled ออก
    });

    // รีเซ็ต checkboxes
    compareCheckboxes.forEach(checkbox => {
      checkbox.checked = false;
    });
  }, 500); // ระยะเวลาที่รอให้ transition ของการเลื่อนลงทำงาน (0.5 วินาที)
}

// ฟังก์ชันที่ใช้เก็บข้อมูลเมื่อกด checkbox
function addItemToCompare(item, price, floor, image) {
  if (selectedItems.length < maxItems) {
    selectedItems.push({ item, price, floor, image }); // เก็บข้อมูลเป็น object แทน string เพื่อสะดวกต่อการจัดการ
    updateSlots();
    showPopup();
  } else {
    alert('คุณสามารถเปรียบเทียบได้สูงสุด 4 ไอเทม');
  }
}

// ฟังก์ชันที่ใช้ลบข้อมูลเมื่อคลิกที่ช่อง
function removeItemFromCompare(slot) {
  const itemToRemove = slot.getAttribute('data-item');
  const index = selectedItems.findIndex(selected => selected.item === itemToRemove); // หา index จาก object
  if (index > -1) {
    selectedItems.splice(index, 1); // ลบข้อมูลจาก array
    updateSlots(); // อัพเดตข้อมูลในช่องใหม่หลังจากลบ
  }
}

// ฟังก์ชันที่ใช้ปรับปรุงข้อมูลในช่องเปรียบเทียบ
function updateSlots() {
  slots.forEach((slot, index) => {
    if (selectedItems[index]) {
      const { item, price, floor, image } = selectedItems[index];
      slot.innerHTML = `
        <div class="img-box">
          <img src="${image}" alt="${item}">
        </div>
        <div class="compare-text-box">
          <div class="class">ชั้น ${floor}</div>
          <div class="price">${price} <span>บาท/ปี</span></div>
        </div>
      `; // ใส่ข้อมูลในช่อง
      slot.setAttribute('data-item', item); // เก็บข้อมูลไอเทมในช่อง
      slot.classList.add('filled'); // เพิ่ม class เพื่อระบุว่าช่องนี้เต็มแล้ว
    } else {
      slot.innerHTML = ''; // ล้างข้อมูลในช่อง
      slot.removeAttribute('data-item'); // ลบ attribute ข้อมูล
      slot.classList.remove('filled'); // เอา class filled ออก
    }
  });

  // รีเซ็ต checkboxes เพื่อให้ตรงกับไอเทมในช่องเปรียบเทียบ
  compareCheckboxes.forEach(checkbox => {
    const item = checkbox.getAttribute('data-item');
    checkbox.checked = selectedItems.some(selected => selected.item === item);
  });
}

// การจัดการ checkbox
compareCheckboxes.forEach(checkbox => {
  checkbox.addEventListener('change', () => {
    const item = checkbox.getAttribute('data-item');
    const price = checkbox.getAttribute('data-price');
    const floor = checkbox.getAttribute('data-floor');
    const image = checkbox.getAttribute('data-image');

    if (checkbox.checked) {
      if (!selectedItems.some(selected => selected.item === item)) {
        addItemToCompare(item, price, floor, image);
      } else {
        checkbox.checked = false; // ยกเลิกการเลือกถ้าไอเทมนี้ถูกเลือกไปแล้ว
        alert('ไอเทมนี้ถูกเลือกไปแล้ว');
      }
    } else {
      // ลบไอเทมจากการเปรียบเทียบถ้าไม่ถูกเลือก
      const slot = slots.find(slot => slot.getAttribute('data-item') === item);
      if (slot) {
        removeItemFromCompare(slot);
      }
    }
  });
});

// คลิกที่ช่องเพื่อเอาข้อมูลออก
slots.forEach(slot => {
  slot.addEventListener('click', () => {
    if (slot.classList.contains('filled')) { // ตรวจสอบว่าช่องมีข้อมูลหรือไม่
      removeItemFromCompare(slot);
    }
  });
});

// ปิด Popup
closePopupBtn.addEventListener('click', hidePopup);
