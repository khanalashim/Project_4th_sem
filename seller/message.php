<!DOCTYPE html>
<html>

<head>
    <title>Simple Messaging System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="messaging.js"></script>
    <link rel="stylesheet" href="style/message.css">

</head>

<body>
    <div id="messages-container">
        <!-- Messages will be displayed here -->
    </div>

    <form id="message-form">
        <input type="text" id="message-input" placeholder="Type your message">
        <button type="submit">Send</button>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var a = document.getElementById('messages-container');
            // Assuming there's some asynchronous process that populates messages,
            // here we're simulating it with a timeout
            setTimeout(function () {
                a.scrollTo(0, a.scrollHeight);

            }, 40);
            // Adjust the timeout value according to your actual loading time
            document.getElementById('message-form').addEventListener('submit', function () {
                setTimeout(function () {
                    a.scrollTo(0, a.scrollHeight);

                }, 40);
            })
        });
    </script>

</body>

</html>