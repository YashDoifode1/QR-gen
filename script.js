// Get form and loading spinner elements
const qrForm = document.getElementById('qrForm');
const loadingSpinner = document.getElementById('loadingSpinner');

// Add form submission event listener
qrForm.addEventListener('submit', function(event) {
    const textInput = document.getElementById('text');

    // Validate if the input is empty
    if (textInput.value.trim() === "") {
        event.preventDefault(); // Stop form submission
        textInput.classList.add('is-invalid'); // Show error feedback
    } else {
        textInput.classList.remove('is-invalid'); // Remove error feedback
        loadingSpinner.style.display = 'block'; // Show loading spinner
    }
});
