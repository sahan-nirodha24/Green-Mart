document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star');
    let ratingInput = document.getElementById('rating');
    let ratingError = document.getElementById('ratingError');
    
    // Star rating logic
    stars.forEach(star => {
        star.addEventListener('click', function () {
            const rating = this.getAttribute('data-rating');
            ratingInput.value = rating;
            highlightStars(rating);
            ratingError.style.display = "none"; // Hide the error if a rating is selected
        });

        star.addEventListener('mouseover', function () {
            highlightStars(this.getAttribute('data-rating'));
        });

        star.addEventListener('mouseout', function () {
            const currentRating = ratingInput.value;
            highlightStars(currentRating);
        });
    });

    function highlightStars(rating) {
        stars.forEach(star => {
            if (star.getAttribute('data-rating') <= rating) {
                star.classList.add('selected');
            } else {
                star.classList.remove('selected');
            }
        });
    }
});

// Form validation
function validateForm() {
    let isValid = true;
    const formMessage = document.getElementById('formMessage');
    formMessage.innerHTML = "";

    // Name validation
    const name = document.getElementById("name").value;
    if (name === "") {
        formMessage.innerHTML += "<p style='color:red;'>Name is required!</p>";
        isValid = false;
    }

    // Email validation
    const email = document.getElementById("email").value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        formMessage.innerHTML += "<p style='color:red;'>Please enter a valid email address!</p>";
        isValid = false;
    }

    // Message validation
    const message = document.getElementById("message").value;
    if (message === "") {
        formMessage.innerHTML += "<p style='color:red;'>Message is required!</p>";
        isValid = false;
    }

    // Rating validation
    const rating = document.getElementById("rating").value;
    if (rating === "") {
        formMessage.innerHTML += "<p style='color:red;'>Please select a rating!</p>";
        isValid = false;
    }

    // If everything is valid
    if (isValid) {
        formMessage.style.color = "green";
        formMessage.innerHTML = "Your message has been sent!";
    }

    return isValid;
}
