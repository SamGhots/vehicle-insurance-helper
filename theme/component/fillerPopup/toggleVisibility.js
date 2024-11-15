function toggleVisibility() {
  const hiddenItems = document.querySelectorAll('.hidden-item');
  const button = document.querySelector('.show-more-btn');

  hiddenItems.forEach(item => {
    item.classList.toggle('show');
  });

  button.textContent = button.textContent === 'แสดงเพิ่มเติม' ? 'ซ่อน' : 'แสดงเพิ่มเติม';
}