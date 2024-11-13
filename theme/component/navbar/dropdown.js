// Get all dropdown containers and menus
const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
  const dropdownMenu = dropdown.querySelector('.dropdown-menu');

  // Show dropdown menu on hover of the dropdown button (not the menu)
  dropdown.addEventListener('mouseover', function(event) {
    // Check if the hover is over the dropdown container itself, not the menu
    if (!dropdownMenu.contains(event.target)) {
      dropdownMenu.classList.add('show-dropdown');
    }
  });

  // Hide dropdown menu when mouse leaves the dropdown area (not the menu)
  dropdown.addEventListener('mouseleave', function() {
    dropdownMenu.classList.remove('show-dropdown');
  });
});

// Optional: Hide all dropdown menus when clicking outside
document.addEventListener('click', function(event) {
  if (!event.target.closest('.dropdown')) {
    dropdowns.forEach(dropdown => {
      const dropdownMenu = dropdown.querySelector('.dropdown-menu');
      dropdownMenu.classList.remove('show-dropdown');
    });
  }
});
