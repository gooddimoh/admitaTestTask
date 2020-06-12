exports.login = function (request, response) {
    response.render('index');
};

exports.user_login = function (request, response) {
    response.redirect('dashboard/index');
    response.render('dashboard');
};
