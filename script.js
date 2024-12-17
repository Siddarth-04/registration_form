$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission
        $.ajax({
            url: 'submit.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                $('#response').html(response); // Display server response
                $('#registrationForm')[0].reset(); // Reset the form fields
            },
            error: function () {
                $('#response').html('<p style="color: red;">An error occurred. Please try again.</p>');
            }
        });
    });
});
