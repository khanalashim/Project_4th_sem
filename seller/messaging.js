$(document).ready(function() {
    // Function to load messages
    function loadMessages() {
        $.ajax({
            url: 'get_messages.php',
            type: 'GET',
            success: function(response) {
                $('#messages-container').html(response);
            }
        });
    }

    // Load messages initially
    loadMessages();

    // Function to send a message
    $('#message-form').submit(function(e) {
        e.preventDefault();
        var message = $('#message-input').val();
        $.ajax({
            url: 'send_message.php',
            type: 'POST',
            data: { message: message },
            success: function(response) {
                $('#message-input').val('');
                loadMessages(); // Reload messages after sending
            }
        });
    });
});
