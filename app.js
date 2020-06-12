var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var sassMiddleware = require('node-sass-middleware');
var app = express();

const AuthController = require("./controllers/auth.js");
const DashboardController = require("./controllers/dashboard.js");

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({extended: false}));
app.use(cookieParser());
app.use(sassMiddleware({
    src: path.join(__dirname, 'public'),
    dest: path.join(__dirname, 'public'),
    indentedSyntax: true, /* true = .sass and false = .scss sourceMap: true */
}));
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', AuthController.login);
app.post('/user_login', AuthController.user_login);
app.get('/login', AuthController.login);
app.get('/dashboard/index', DashboardController.index);
app.post('/add_new_object', DashboardController.post_controller);
app.post('/make_some_datar_filter', DashboardController.post_controller);

app.use(function (req, res, next) {
    next(createError(404));
});
app.use(function (err, req, res, next) {
    // set locals, only providing error in development //
    res.locals.message = err.message;
    res.locals.error = req.app.get('env') === 'development' ? err : {};
    // render the error page //
    res.status(err.status || 500);
    res.render('error');
});

module.exports = app;