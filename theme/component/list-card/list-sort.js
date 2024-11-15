// Function to sort and update the list
function sortList(order) {
  const listContainer = document.getElementById('listContainer');
  const listItems = Array.from(listContainer.getElementsByClassName('list-card'));

  // Sort the list items by price
  listItems.sort((a, b) => {
    const priceA = parseFloat(a.querySelector('.price').textContent.replace(/฿|,/g, ''));
    const priceB = parseFloat(b.querySelector('.price').textContent.replace(/฿|,/g, ''));

    // Sort based on the order
    if (order === 'asc') {
      return priceA - priceB; // Sort from low to high
    } else {
      return priceB - priceA; // Sort from high to low
    }
  });

  // Re-append sorted list items back into the container
  listItems.forEach(item => listContainer.appendChild(item));
}

// Add event listener to the sort icon
document.getElementById('sortIcon').addEventListener('click', function() {
  const sortLabel = document.getElementById('sortLabel');
  let sortOrder = this.getAttribute('data-sort-order') || 'asc';

  // Toggle sort order on click
  sortOrder = (sortOrder === 'asc') ? 'desc' : 'asc';
  this.setAttribute('data-sort-order', sortOrder);

  // Update the icon and label
  if (sortOrder === 'asc') {
    this.innerHTML = '<i class="fa-duotone fa-solid fa-arrow-up-arrow-down up"></i>'; // Arrow down for ascending
    sortLabel.textContent = 'ราคาจาก น้อย-มาก'; // Label for ascending
  } else {
    this.innerHTML = '<i class="fa-duotone fa-solid fa-arrow-up-arrow-down"></i>'; // Arrow up for descending
    sortLabel.textContent = 'ราคาจาก มาก-น้อย'; // Label for descending
  }

  // Sort the list based on the new sort order
  sortList(sortOrder);
});




