$("input.login").click(function () {
    var request = $.ajax({
        url: "/user_login",
        method: "POST",
        data: {id: menuId},
        dataType: "html"
    });
    request.done(function (msg) {
        console.log(msg);
    });
    request.fail(function (jqXHR, textStatus) {
        alert("Request failed: " + textStatus);
    });
});
