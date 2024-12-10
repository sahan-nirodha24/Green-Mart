// script.js
function validateForm() {
  let isValid = true;

  // Card type validation
  const cardType = document.getElementById("cardType").value;
  if (cardType === "") {
    document.getElementById("cardTypeError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("cardTypeError").style.display = "none";

  }

  // Card number validation (example validation for 16 digits)
  const cardNumber = document.getElementById("cardNumber").value;
  const cardNumberPattern = /^\d{16}$/;
  if (!cardNumberPattern.test(cardNumber)) {
    document.getElementById("cardNumberError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("cardNumberError").style.display = "none";
  }

  // CVV validation (example validation for 3 digits)
  const cvv = document.getElementById("cvv").value;
  const cvvPattern = /^\d{3}$/;
  if (!cvvPattern.test(cvv)) {
    document.getElementById("cvvError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("cvvError").style.display = "none";
  }

  // Expiry date validation (example for MM/YY format)
  const expiryDate = document.getElementById("expiryDate").value;
  const expiryDatePattern = /^(0[1-9]|1[0-2])\/\d{2}$/;
  if (!expiryDatePattern.test(expiryDate)) {
    document.getElementById("expiryDateError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("expiryDateError").style.display = "none";
  }

  // Email or Phone validation
  const contact = document.getElementById("contact").value;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  const phonePattern = /^\d{10}$/;
  if (!emailPattern.test(contact) && !phonePattern.test(contact)) {
    document.getElementById("contactError").style.display = "block";
    isValid = false;
  } else {
    document.getElementById("contactError").style.display = "none";
  }

  return isValid;
}
