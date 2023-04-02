$(document).ready(function(){
    // Submit the chat message
    $('#chat-form').submit(function(e){
        e.preventDefault();
        var username = $('#username').val();
        var message = $('#message').val();
        $.ajax({
            url: 'send.php',
            type: 'POST',
            data: {username: username, message: message},
            success: function(response){
                $('#message').val('');
            },
            error: function(xhr, status, error){
                console.log(xhr);
            }
        });
    });

    // Refresh the chat messages
    setInterval(function(){
        $.ajax({
            url: 'chat.php',
            success: function(response){
                $('#messages').html(response);
            },
            error: function(xhr, status, error){
                console.log(xhr);
            }
        });
    }, 1000);
});
