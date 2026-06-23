let usernav=document.querySelector('.user_header .header_1 .user_flex .navbar');

document.getElementById('user_menu_btn').onclick=()=>{
  usernav.classList.toggle('active');
  accbox.classList.remove('active');
};

let accbox = document.querySelector('.header_acc_box');
document.getElementById('user_btn').onclick = () => { 
  accbox.classList.toggle('active');
  usernav.classList.remove('active');
};

window.onscroll = () => {
  accbox.classList.remove('active');
  usernav.classList.remove('active');
  let nav = document.querySelector('.user_header .header_1');

  if (window.scrollY > 70) {
    nav.classList.add('active');
  } else {
    nav.classList.remove('active');
  }
};

// Function to validate the checkout form
function validateCheckoutForm() {
    const name = document.querySelector('input[name="name"]').value.trim();
    const number = document.querySelector('input[name="number"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();
    const method = document.querySelector('select[name="method"]').value;
    const address = document.querySelector('textarea[name="address"]').value.trim();

    // Regular expression for phone number validation (example: 10 digits)
    const phoneRegex = /^[0-9]{10}$/;
    // Regular expression for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Validate name
    if (name === "") {
        alert("Please enter your name.");
        return false;
    }

    // Validate phone number
    if (!phoneRegex.test(number)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    // Validate email
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate payment method
    if (method === "") {
        alert("Please select a payment method.");
        return false;
    }

    // Validate address
    if (address === "") {
        alert("Please enter your address.");
        return false;
    }

    return true; // All validations passed
}

// Attach the validation function to the form submission
document.querySelector('.contact_us form').onsubmit = function(event) {
    if (!validateCheckoutForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
};


// Function to validate the contact form
function validateContactForm() {
    const name = document.querySelector('input[name="name"]').value.trim();
    const email = document.querySelector('input[name="email"]').value.trim();
    const number = document.querySelector('input[name="number"]').value.trim();
    const message = document.querySelector('textarea[name="message"]').value.trim();

    // Regular expression for phone number validation (example: 10 digits)
    const phoneRegex = /^[0-9]{10}$/;
    // Regular expression for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const nameRegex = /^[A-Za-z\s]+$/; // Allows letters and spaces
    // Validate name
     // Validate name
    if (name === "") {
        alert("Please enter your name.");
        return false;
    }
    if (!nameRegex.test(name)) {
        alert("Please enter a valid name (letters only).");
        return false;
    }
    // Validate phone number
    if (!phoneRegex.test(number)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }
      
    // Validate email
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate message
    if (message === "") {
        alert("Please enter your message.");
        return false;
    }

    return true; // All validations passed
}

// Attach the validation function to the form submission
document.querySelector('.contact_us form').onsubmit = function(event) {
    if (!validateContactForm()) {
        event.preventDefault(); // Prevent form submission if validation fails
    }
};
