<script>
    {/* document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("registrationForm");
        const passwordField = document.getElementById("passwordfrm");
        const confirmPasswordField = document.getElementById("repasswordfrm");

        form.addEventListener("submit", function(event) {
            // Prevent the form from submitting by default
            event.preventDefault();

            // Get the password values
            const passwordValue = passwordField.value;
            const confirmPasswordValue = confirmPasswordField.value;

            // Compare the passwords
            if (passwordValue !== confirmPasswordValue) {
                alert("Passwords do not match. Please try again.");
                confirmPasswordField.focus();
            } else {
                // If passwords match, submit the form
                form.submit();
            }
        });
    }); */}

    document.addEventListener("DOMContentLoaded", function() {
        console.log("DOM content loaded");

        const form = document.getElementById("registrationForm");
        console.log("Form element: ", form);

        const passwordField = document.getElementById("passwordfrm");
        console.log("Form element: ", passwordField);

        const confirmPasswordField = document.getElementById("repasswordfrm");
        console.log("Form element: ", confirmPasswordField);

        form.addEventListener("submit", function(event) {
            console.log("FOrm submitted on cllick");
        });
    });
</script>
