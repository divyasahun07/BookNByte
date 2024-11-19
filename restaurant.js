function openNextPage1() { 
    window.location.href="starters.html"; 
} 
function openNextPage2(){ 
   window.location.href="icecream.html"; 
} 
function openNextPage3(){ 
    window.location.href="maincourse.html"; 
} 
function openNextPage4(){ 
    window.location.href="drinks.html" 

 
} 
function openNextPage5(){ 
    window.location.href="coffee.html" 
} 
 
// Get the form element 
const bookingForm = document.getElementById('booking-form'); 
 
// Function to handle form submission 
function handleFormSubmit(event) { 
  event.preventDefault(); // Prevent the default form submission behavior 
 
  // Get the form data 
  const name = bookingForm.elements['name'].value; 
  const email = bookingForm.elements['email'].value; 
  const phone = bookingForm.elements['phone'].value; 
  const date = bookingForm.elements['date'].value; 
  const time = bookingForm.elements['time'].value; 
  const partySize = bookingForm.elements['party-size'].value; 
  const specialRequests = bookingForm.elements['special-requests'].value; 
 
  // Add any additional validation here (e.g., check if date/time is in the future) 
 
  // Process the form data (you can send it to the server or store it in the database) 
  // For this example, we'll just display a confirmation message 
  const bookingDetails = ` 
    Name: ${name} 
    Email: ${email} 
    Phone: ${phone} 
    Date: ${date} 

 
    Time: ${time} 
    Party Size: ${partySize} 
    Special Requests: ${specialRequests} 
  `; 
 
  alert('Booking Confirmed!\n\n' + bookingDetails); 
 
  // Reset the form after submission 
  bookingForm.reset(); 
} 
 
// Add an event listener to the form's submit event 
bookingForm.addEventListener('submit', handleFormSubmit); 
 
// Optional: If you want to add a lightbox functionality to view images in a larger size 
const gallery = document.getElementById('gallery'); 
const images = gallery.getElementsByTagName('img'); 
 
function openLightbox(index) { 
  const lightbox = document.createElement('div'); 
  lightbox.classList.add('lightbox'); 
  lightbox.innerHTML = `<span class="close-button">&times;</span><img 
src="${images[index].src}" alt="Restaurant Image">`; 
  document.body.appendChild(lightbox); 
 
  const closeButton = lightbox.querySelector('.close-button'); 
  closeButton.addEventListener('click', () => { 
    document.body.removeChild(lightbox); 
  }); 
} 
 

 
for (let i = 0; i < images.length; i++) { 
  images[i].addEventListener('click', () => { 
    openLightbox(i); 
  }); 
} 
