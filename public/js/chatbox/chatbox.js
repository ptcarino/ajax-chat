

$(document).ready(function () {
    username = $('username').html();
    users_id = $('users_id').html();

    getData();

    $(document).keyup(function (e) {
        if(e.keyCode == 13)
            sendMessage();
    });
});

function getData() {
    getChatMessages();
    setTimeout(getData, 3000);
}

function getChatMessages() {
    // Code is from video tutorial but with added $.map functionality
    $.post('/getChatMessages', function (data) {
        if(data.length > 0) {
            $.map(data, function (chat) {
                $('#chats').append(
                    '<div class="row message-bubble"><p class="text-muted">'
                    + chat.name
                    + '&nbsp;&nbsp;&nbsp;<small>'
                    + chat.created_at
                    + '</small></p><span>'
                    + chat.chatbody
                    + '</span></div><br>'
                );
            })
        }
    });

    // .getJSON method. Works as well as the method above.
    /*$.getJSON('/getChatMessages', { users_id: users_id }, function (json) {
        $.each(json, function (i, data) {
            $('#chats').append(
                '<div class="row message-bubble"><p class="text-muted">'
                + data.name
                + '&nbsp;&nbsp;&nbsp;<small>'
                + data.created_at
                + '</small></p><span>'
                + data.chatbody
                + '</span></div><br>'
            );
        });
    });*/
}

// This function needs some work. Currently not working.
function sendMessage() {
    var chatbody = $('#chatbody').val();

    if(chatbody.length > 0) {
        $.post('http://localhost:8000/sendMessage', { chatbody: chatbody, users_id: users_id }, function () {
            $('#chats').append(
                '<div class="row message-bubble"><p class="text-muted">'
                + username
                + '</p><span>'
                + chatbody
                + '</span></div>'
            )
            $('#chats').append('');
        })
    }
}