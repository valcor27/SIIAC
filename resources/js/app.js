import './bootstrap';

// Google-style floating labels
document.addEventListener('DOMContentLoaded', function() {
    // Get all form inputs with floating labels
    const inputs = document.querySelectorAll('.form-floating-label .form-control, .input-group-floating .form-control');
    
    inputs.forEach(input => {
        // Check if input has value on page load
        if (input.value) {
            input.classList.add('has-value');
        }
        
        // Add has-value class when user types
        input.addEventListener('input', function() {
            if (this.value) {
                this.classList.add('has-value');
            } else {
                this.classList.remove('has-value');
            }
        });
        
        // Add has-value class on focus (even if empty)
        input.addEventListener('focus', function() {
            if (this.value) {
                this.classList.add('has-value');
            }
        });
        
        // Keep has-value if there's text, remove only if completely empty
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.classList.remove('has-value');
            }
        });
    });
});
