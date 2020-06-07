<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <title>neo4jd3.js</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/neo4jd3.min.css?v=0.0.1">
    <style type="text/css">
        body, html, .neo4jd3 {
            height: 100%;
            overflow: hidden;
        }
    </style>
</head>
<body>

<div class="block form-add-new-object">
    <div class="form-wrapper">
        <p>Новый объект<span><span class="icon-close">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0.25C3.71875 0.25 0.25 3.71875 0.25 8C0.25 12.2812 3.71875 15.75 8 15.75C12.2812 15.75 15.75 12.2812 15.75 8C15.75 3.71875 12.2812 0.25 8 0.25ZM8 14.25C4.54688 14.25 1.75 11.4531 1.75 8C1.75 4.54688 4.54688 1.75 8 1.75C11.4531 1.75 14.25 4.54688 14.25 8C14.25 11.4531 11.4531 14.25 8 14.25ZM11.1812 6.05625L9.2375 8L11.1812 9.94375C11.3281 10.0906 11.3281 10.3281 11.1812 10.475L10.475 11.1812C10.3281 11.3281 10.0906 11.3281 9.94375 11.1812L8 9.2375L6.05625 11.1812C5.90938 11.3281 5.67188 11.3281 5.525 11.1812L4.81875 10.475C4.67188 10.3281 4.67188 10.0906 4.81875 9.94375L6.7625 8L4.81875 6.05625C4.67188 5.90938 4.67188 5.67188 4.81875 5.525L5.525 4.81875C5.67188 4.67188 5.90938 4.67188 6.05625 4.81875L8 6.7625L9.94375 4.81875C10.0906 4.67188 10.3281 4.67188 10.475 4.81875L11.1812 5.525C11.3281 5.67188 11.3281 5.90938 11.1812 6.05625Z"
                          fill="#C4C4C4"/>
                    </svg</span></span>
        </p>
        <p>Добавьте адрес, хэш транзакции или сущность для визуализации <a href=""></a></p>
        <p>
        <form action=""><input type="text" value="hn123RwqDF9JF0dhn123RwqDF9JF"><span></span></form>
        </p>
        <div class="buttons-group">
            <input type="text" class="button-grey" value="Отмена">
            <input type="text" class="button-blue" value="Добавить">
        </div>
    </div>
</div>
<div class="block form-add-object">
    <form action="" method="post">
        <div class="form-1">
            <input type="text">
            <input type="text">
            <input type="text">
            <div class="group">
                <span class="social share"></span>
                <span class="button delete"></span>
                <span class="regoing"></span>
                <span class="download save"></span>
            </div>
            <div class="group">
                <span class="next"><i></i></span>
                <p>Временной шаг</p>
                <div class="prev"><i></i></div>
            </div>
            <div class="group">
                <span class="next"><i></i></span>
                <p>Действие</p>
                <div class="prev"><i></i></div>
            </div>
            <p>
            <p>Лимит</p>
            <div class="button"><input type="text"></div>
            </p>
        </div>
    </form>
</div>
<div class="block form-filter-object">
    <div class="group">
        <div class="row">
            <p>Визуализация по адресу <span><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
            <path d="M8 0.25C3.71875 0.25 0.25 3.71875 0.25 8C0.25 12.2812 3.71875 15.75 8 15.75C12.2812 15.75 15.75 12.2812 15.75 8C15.75 3.71875 12.2812 0.25 8 0.25ZM8 14.25C4.54688 14.25 1.75 11.4531 1.75 8C1.75 4.54688 4.54688 1.75 8 1.75C11.4531 1.75 14.25 4.54688 14.25 8C14.25 11.4531 11.4531 14.25 8 14.25ZM11.1812 6.05625L9.2375 8L11.1812 9.94375C11.3281 10.0906 11.3281 10.3281 11.1812 10.475L10.475 11.1812C10.3281 11.3281 10.0906 11.3281 9.94375 11.1812L8 9.2375L6.05625 11.1812C5.90938 11.3281 5.67188 11.3281 5.525 11.1812L4.81875 10.475C4.67188 10.3281 4.67188 10.0906 4.81875 9.94375L6.7625 8L4.81875 6.05625C4.67188 5.90938 4.67188 5.67188 4.81875 5.525L5.525 4.81875C5.67188 4.67188 5.90938 4.67188 6.05625 4.81875L8 6.7625L9.94375 4.81875C10.0906 4.67188 10.3281 4.67188 10.475 4.81875L11.1812 5.525C11.3281 5.67188 11.3281 5.90938 11.1812 6.05625Z"
                  fill="#C4C4C4"/>
            </svg>
</span></p>
            Ярлык
            <span><i><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8 0.25C3.71875 0.25 0.25 3.71875 0.25 8C0.25 12.2812 3.71875 15.75 8 15.75C12.2812 15.75 15.75 12.2812 15.75 8C15.75 3.71875 12.2812 0.25 8 0.25ZM8 14.25C4.54688 14.25 1.75 11.4531 1.75 8C1.75 4.54688 4.54688 1.75 8 1.75C11.4531 1.75 14.25 4.54688 14.25 8C14.25 11.4531 11.4531 14.25 8 14.25ZM11.1812 6.05625L9.2375 8L11.1812 9.94375C11.3281 10.0906 11.3281 10.3281 11.1812 10.475L10.475 11.1812C10.3281 11.3281 10.0906 11.3281 9.94375 11.1812L8 9.2375L6.05625 11.1812C5.90938 11.3281 5.67188 11.3281 5.525 11.1812L4.81875 10.475C4.67188 10.3281 4.67188 10.0906 4.81875 9.94375L6.7625 8L4.81875 6.05625C4.67188 5.90938 4.67188 5.67188 4.81875 5.525L5.525 4.81875C5.67188 4.67188 5.90938 4.67188 6.05625 4.81875L8 6.7625L9.94375 4.81875C10.0906 4.67188 10.3281 4.67188 10.475 4.81875L11.1812 5.525C11.3281 5.67188 11.3281 5.90938 11.1812 6.05625Z"
      fill="#C4C4C4"/></svg></i></span>
        </div>
        <div class="row">
            <p>Транзакция: <a href="">hn123RwqDF9JF0dhn123</a><span><i class="copy-icon">
                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M9.93359 18H3.21875C1.66789 18 0.40625 16.7384 0.40625 15.1875V5.66016C0.40625 4.1093 1.66789 2.84766 3.21875 2.84766H9.93359C11.4845 2.84766 12.7461 4.1093 12.7461 5.66016V15.1875C12.7461 16.7384 11.4845 18 9.93359 18ZM3.21875 4.25391C2.44339 4.25391 1.8125 4.8848 1.8125 5.66016V15.1875C1.8125 15.9629 2.44339 16.5938 3.21875 16.5938H9.93359C10.709 16.5938 11.3398 15.9629 11.3398 15.1875V5.66016C11.3398 4.8848 10.709 4.25391 9.93359 4.25391H3.21875ZM15.5586 13.4297V2.8125C15.5586 1.26164 14.297 0 12.7461 0H4.94141C4.55304 0 4.23828 0.314758 4.23828 0.703125C4.23828 1.09149 4.55304 1.40625 4.94141 1.40625H12.7461C13.5215 1.40625 14.1523 2.03714 14.1523 2.8125V13.4297C14.1523 13.8181 14.4671 14.1328 14.8555 14.1328C15.2438 14.1328 15.5586 13.8181 15.5586 13.4297Z"
                                    fill="#808080"/></svg></i></span><span><i class="icon-currency"></i></span>
        </div>
        <br>
        <div class="row">
            <span><b>Вход/Выход</b><span>4/2</span></span>
        </div>
        <br>
        <div class="row">
            <span>Сумма,BTC</span><span>&nbsp;&nbsp;<span class="green">0.03104456</span>/<span
                        class="red">0.03016656</span></span>
            <span>Коммисия</span><span>0.000878 BTC</span>
            <span>Размер/V размер</span>&nbsp;&nbsp;<span>763 B / 439 B</span>
            <span>Размер блока</span>&nbsp;&nbsp;<span>05.09.2019 17:29</span>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="pagination">
                <div class="top-line">
                    <span>< +5</span><span>Адрес Входа</span><span>BTC</span>
                    <span class="select"><i>select icon</i></span><span class="hash">df240708</span><span
                            class="btc-amount">0.0584</span>
                    <span class="select"><i>select icon</i></span><span class="hash">df240708</span><span
                            class="btc-amount">0.0584</span>
                    <span class="select"><i>select icon</i></span><span class="hash">df240708</span><span
                            class="btc-amount">0.0584</span>
                    <span class="select"><i>select icon</i></span><span class="hash">df240708</span><span
                            class="btc-amount">0.0584</span>
                    <span class="select"><i>select icon</i></span><span class="hash">df240708</span><span
                            class="btc-amount">0.0584</span>
                </div>
                <br>
                <br>
                <div class="bottom-line">
                    <!-- foreach 2 -->
                    <span>+5 ></span><span>Адрес выхода</span><span>BTC</span>
                    <div class="line"><span class="select"><input type="select"></span>
                        <span class="hash">df240708</span><span class="btc-amount">0.0584</span>
                        <span class="hash">df240708</span><span class="btc-amount">0.0584</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="block form-filter-type-2-object">
    <span><input type="text" placeholder="Визуализация по адресу"><span>
            <i class="icon-close"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                       xmlns="http://www.w3.org/2000/svg"><path
                            d="M8 0.25C3.71875 0.25 0.25 3.71875 0.25 8C0.25 12.2812 3.71875 15.75 8 15.75C12.2812 15.75 15.75 12.2812 15.75 8C15.75 3.71875 12.2812 0.25 8 0.25ZM8 14.25C4.54688 14.25 1.75 11.4531 1.75 8C1.75 4.54688 4.54688 1.75 8 1.75C11.4531 1.75 14.25 4.54688 14.25 8C14.25 11.4531 11.4531 14.25 8 14.25ZM11.1812 6.05625L9.2375 8L11.1812 9.94375C11.3281 10.0906 11.3281 10.3281 11.1812 10.475L10.475 11.1812C10.3281 11.3281 10.0906 11.3281 9.94375 11.1812L8 9.2375L6.05625 11.1812C5.90938 11.3281 5.67188 11.3281 5.525 11.1812L4.81875 10.475C4.67188 10.3281 4.67188 10.0906 4.81875 9.94375L6.7625 8L4.81875 6.05625C4.67188 5.90938 4.67188 5.67188 4.81875 5.525L5.525 4.81875C5.67188 4.67188 5.90938 4.67188 6.05625 4.81875L8 6.7625L9.94375 4.81875C10.0906 4.67188 10.3281 4.67188 10.475 4.81875L11.1812 5.525C11.3281 5.67188 11.3281 5.90938 11.1812 6.05625Z"
                            fill="#C4C4C4"/></svg>
    <span><i class="icon-address"></i>Адрес</span><a href="">1hn3few123RwqDF</a></i></span></span>
    <span><span class="icon-plus">Добавить объект</span><input type="text"></span>
    <span><span><i class="icon-address"></i>Адрес</span><a href="">1CZH527bs419w98</a><input type="text"></span>
    <span><span><i class="icon-address"></i>Сущность</span><a href="">Changefly</a><input type="text"></span>
    <span><span><i class="icon-address"></i>Транзакция</span><a href="">1hn3few123</a><input type="text"></span>
</div>
<div class="block hot-keys">
    <div class="hkey-group">
        <p>Горячие клавиши</p>
    </div>
    <div class="hkey-group">
        <p>Отмена</p>
        <div class="ht-button">
            <span>Ctrl + </span> <span>Z</span>
        </div>
    </div>
    <div class="hkey-group">
        <p>Повтор</p>
        <div class="ht-button">
            <span>Ctrl + </span><span>Shift + </span> <span>Z</span>
        </div>
    </div>
    <div class="hkey-group">
        <p>Отдалить <span>Alt<span>-</span></span></p>
    </div>
    <div class="hkey-group">
        <p>Приблизить <span>Alt<span>+</span></span></p>
    </div>
    <div class="hkey-group">
        <p>Сохранить <span>Ctrl<span>+</span>S</span></p>
    </div>
    <div class="hkey-group">
        <p>Сохранить как <span>Ctrl<span>+</span>Shift<span>+</span>S<span></span></span></p>
    </div>
    <div class="hkey-group">
        <p>Вперед <span class="br-button">-></span></p>
    </div>
    <div class="hkey-group">
        <p>Назад <span class="br-button">-></span></p>
    </div>
</div>
<div class="block filter">
    <div class="top-block">
    <span><span class="close">
        <i class="close-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                   xmlns="http://www.w3.org/2000/svg"> <path
                        d="M8 0.25C3.71875 0.25 0.25 3.71875 0.25 8C0.25 12.2812 3.71875 15.75 8 15.75C12.2812 15.75 15.75 12.2812 15.75 8C15.75 3.71875 12.2812 0.25 8 0.25ZM8 14.25C4.54688 14.25 1.75 11.4531 1.75 8C1.75 4.54688 4.54688 1.75 8 1.75C11.4531 1.75 14.25 4.54688 14.25 8C14.25 11.4531 11.4531 14.25 8 14.25ZM11.1812 6.05625L9.2375 8L11.1812 9.94375C11.3281 10.0906 11.3281 10.3281 11.1812 10.475L10.475 11.1812C10.3281 11.3281 10.0906 11.3281 9.94375 11.1812L8 9.2375L6.05625 11.1812C5.90938 11.3281 5.67188 11.3281 5.525 11.1812L4.81875 10.475C4.67188 10.3281 4.67188 10.0906 4.81875 9.94375L6.7625 8L4.81875 6.05625C4.67188 5.90938 4.67188 5.67188 4.81875 5.525L5.525 4.81875C5.67188 4.67188 5.90938 4.67188 6.05625 4.81875L8 6.7625L9.94375 4.81875C10.0906 4.67188 10.3281 4.67188 10.475 4.81875L11.1812 5.525C11.3281 5.67188 11.3281 5.90938 11.1812 6.05625Z"
                        fill="#C4C4C4"/>
            </svg>
            </i>
    </span></span>
        <span> <span>Сущность:</span> <span>Polinex</span> </span>
        <span> <span>Адресов:</span> <span>389865441</span> </span>
        <span> <span>Тип:</span> <span>Trusted Exchange</span> </span>
    </div>
    <div class="block1"><span>
        <span>Транзакции</span>
        <span>139</span>
        <span>2</span>
    </span></div>
    <div class="mark">
        <svg width="52" height="9" viewBox="0 0 52 9" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.80859 8.06C3.11526 8.06 2.48526 7.90667 1.91859 7.6C1.35859 7.28667 0.918594 6.86 0.598594 6.32C0.28526 5.78 0.128594 5.17333 0.128594 4.5C0.128594 3.82667 0.28526 3.22 0.598594 2.68C0.918594 2.14 1.35859 1.71667 1.91859 1.41C2.48526 1.09667 3.11526 0.94 3.80859 0.94C4.50193 0.94 5.12526 1.09333 5.67859 1.4C6.23859 1.70667 6.67859 2.13333 6.99859 2.68C7.31859 3.22 7.47859 3.82667 7.47859 4.5C7.47859 5.17333 7.31859 5.78333 6.99859 6.33C6.67859 6.87 6.23859 7.29333 5.67859 7.6C5.12526 7.90667 4.50193 8.06 3.80859 8.06ZM3.80859 7.4C4.36193 7.4 4.86193 7.27667 5.30859 7.03C5.75526 6.77667 6.10526 6.43 6.35859 5.99C6.61193 5.54333 6.73859 5.04667 6.73859 4.5C6.73859 3.95333 6.61193 3.46 6.35859 3.02C6.10526 2.57333 5.75526 2.22667 5.30859 1.98C4.86193 1.72667 4.36193 1.6 3.80859 1.6C3.25526 1.6 2.75193 1.72667 2.29859 1.98C1.85193 2.22667 1.49859 2.57333 1.23859 3.02C0.985261 3.46 0.858594 3.95333 0.858594 4.5C0.858594 5.04667 0.985261 5.54333 1.23859 5.99C1.49859 6.43 1.85193 6.77667 2.29859 7.03C2.75193 7.27667 3.25526 7.4 3.80859 7.4ZM12.628 3.37H10.638V8H9.92797V3.37H7.93797V2.74H12.628V3.37ZM19.5345 2.74V8H18.8845V3.84L16.7545 7.36H16.4345L14.3045 3.83V8H13.6545V2.74H14.3745L16.6045 6.53L18.8745 2.74H19.5345ZM26.1549 5.59H21.7549C21.7949 6.13667 22.0049 6.58 22.3849 6.92C22.7649 7.25333 23.2449 7.42 23.8249 7.42C24.1516 7.42 24.4516 7.36333 24.7249 7.25C24.9983 7.13 25.2349 6.95667 25.4349 6.73L25.8349 7.19C25.6016 7.47 25.3083 7.68333 24.9549 7.83C24.6083 7.97667 24.2249 8.05 23.8049 8.05C23.2649 8.05 22.7849 7.93667 22.3649 7.71C21.9516 7.47667 21.6283 7.15667 21.3949 6.75C21.1616 6.34333 21.0449 5.88333 21.0449 5.37C21.0449 4.85667 21.1549 4.39667 21.3749 3.99C21.6016 3.58333 21.9083 3.26667 22.2949 3.04C22.6883 2.81333 23.1283 2.7 23.6149 2.7C24.1016 2.7 24.5383 2.81333 24.9249 3.04C25.3116 3.26667 25.6149 3.58333 25.8349 3.99C26.0549 4.39 26.1649 4.85 26.1649 5.37L26.1549 5.59ZM23.6149 3.31C23.1083 3.31 22.6816 3.47333 22.3349 3.8C21.9949 4.12 21.8016 4.54 21.7549 5.06H25.4849C25.4383 4.54 25.2416 4.12 24.8949 3.8C24.5549 3.47333 24.1283 3.31 23.6149 3.31ZM31.7066 2.74V8H30.9966V5.81C30.3899 6.07667 29.7932 6.21 29.2066 6.21C28.5732 6.21 28.0799 6.06667 27.7266 5.78C27.3732 5.48667 27.1966 5.05 27.1966 4.47V2.74H27.9066V4.43C27.9066 4.82333 28.0332 5.12333 28.2866 5.33C28.5399 5.53 28.8899 5.63 29.3366 5.63C29.8299 5.63 30.3832 5.5 30.9966 5.24V2.74H31.7066ZM38.3229 5.59H33.9229C33.9629 6.13667 34.1729 6.58 34.5529 6.92C34.9329 7.25333 35.4129 7.42 35.9929 7.42C36.3196 7.42 36.6196 7.36333 36.8929 7.25C37.1662 7.13 37.4029 6.95667 37.6029 6.73L38.0029 7.19C37.7696 7.47 37.4762 7.68333 37.1229 7.83C36.7762 7.97667 36.3929 8.05 35.9729 8.05C35.4329 8.05 34.9529 7.93667 34.5329 7.71C34.1196 7.47667 33.7962 7.15667 33.5629 6.75C33.3296 6.34333 33.2129 5.88333 33.2129 5.37C33.2129 4.85667 33.3229 4.39667 33.5429 3.99C33.7696 3.58333 34.0762 3.26667 34.4629 3.04C34.8562 2.81333 35.2962 2.7 35.7829 2.7C36.2696 2.7 36.7062 2.81333 37.0929 3.04C37.4796 3.26667 37.7829 3.58333 38.0029 3.99C38.2229 4.39 38.3329 4.85 38.3329 5.37L38.3229 5.59ZM35.7829 3.31C35.2762 3.31 34.8496 3.47333 34.5029 3.8C34.1629 4.12 33.9696 4.54 33.9229 5.06H37.6529C37.6062 4.54 37.4096 4.12 37.0629 3.8C36.7229 3.47333 36.2962 3.31 35.7829 3.31ZM39.9045 2.74H40.6145V5.07H43.9245V2.74H44.6345V8H43.9245V5.68H40.6145V8H39.9045V2.74ZM48.8226 8.05C48.3159 8.05 47.8592 7.93667 47.4526 7.71C47.0459 7.47667 46.7259 7.15667 46.4926 6.75C46.2592 6.34333 46.1426 5.88333 46.1426 5.37C46.1426 4.85667 46.2592 4.39667 46.4926 3.99C46.7259 3.58333 47.0459 3.26667 47.4526 3.04C47.8592 2.81333 48.3159 2.7 48.8226 2.7C49.3292 2.7 49.7859 2.81333 50.1926 3.04C50.5992 3.26667 50.9159 3.58333 51.1426 3.99C51.3759 4.39667 51.4926 4.85667 51.4926 5.37C51.4926 5.88333 51.3759 6.34333 51.1426 6.75C50.9159 7.15667 50.5992 7.47667 50.1926 7.71C49.7859 7.93667 49.3292 8.05 48.8226 8.05ZM48.8226 7.42C49.1959 7.42 49.5292 7.33667 49.8226 7.17C50.1226 6.99667 50.3559 6.75333 50.5226 6.44C50.6892 6.12667 50.7726 5.77 50.7726 5.37C50.7726 4.97 50.6892 4.61333 50.5226 4.3C50.3559 3.98667 50.1226 3.74667 49.8226 3.58C49.5292 3.40667 49.1959 3.32 48.8226 3.32C48.4492 3.32 48.1126 3.40667 47.8126 3.58C47.5192 3.74667 47.2859 3.98667 47.1126 4.3C46.9459 4.61333 46.8626 4.97 46.8626 5.37C46.8626 5.77 46.9459 6.12667 47.1126 6.44C47.2859 6.75333 47.5192 6.99667 47.8126 7.17C48.1126 7.33667 48.4492 7.42 48.8226 7.42Z"
                  fill="#808080"/>
        </svg>
    </div>
    <div class="block2"><span>Транзакции</span><span>139</span><span>2</span></div>
    <div class="block2"><span>Принято, BTC</span><span>20.04165158</span><span>0.0000096</span></div>
    <div class="block3"><span>Отправлено, BTC</span><span>19.74510304</span><span>10.06868926</span><span>
    <div class="block5"><span>Баланс, BTC <span>344,661.0286</span></span><span>
    <div class="block6"><span>Оценка риска</span><span>0%</span><span>
     <span class="group">
         <span>Дата <input type="date"> </span>
         <span>Дебит/Кредит,BTC <input type="date"> </span>
     </span>
    <span class="block-with-pagination">
        <span class="select count">+5</span>
        <span class="date">Дата<svg width="8" height="7" viewBox="0 0 8 7" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"> <path
                        d="M4.86603 6.5C4.48113 7.16667 3.51887 7.16667 3.13397 6.5L0.535899 2C0.150999 1.33333 0.632124 0.499999 1.40192 0.499999L6.59808 0.5C7.36788 0.5 7.849 1.33333 7.4641 2L4.86603 6.5Z"
                        fill="#C4C4C4"/></svg></span>
        <span class="transaction">Транзакция</span>
        <span class="btc">BTC <span><svg width="8" height="7" viewBox="0 0 8 7" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"> <path
                            d="M4.86603 6.5C4.48113 7.16667 3.51887 7.16667 3.13397 6.5L0.535899 2C0.150999 1.33333 0.632124 0.499999 1.40192 0.499999L6.59808 0.5C7.36788 0.5 7.849 1.33333 7.4641 2L4.86603 6.5Z"
                            fill="#C4C4C4"/></svg></span></span>
    </span>
    </span></div>
    <div class="block4">
    <span>
    <span class="pagination-block">
        <span class="left"><p> < </p></span>
        <p>1 из 7,365,075</p>
        <span class="right"> > </span>
        <span class="costume">
            <span>Перейти</span>
            <span>Удалить <i><svg width="1" height="7" viewBox="0 0 1 7" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                d="M0.57393 0.389648C0.357836 0.389648 0.182617 0.564843 0.182617 0.78096V5.6258C0.182617 5.8419 0.357813 6.01711 0.57393 6.01711C0.790047 6.01711 0.965242 5.84192 0.965242 5.6258V0.78096C0.965242 0.564843 0.790047 0.389648 0.57393 0.389648Z"
                                fill="#3782E9"/></svg></i></span>
        </span>
    </span>
    </span>
    </div>
    <span class="block-hint">
    <span class="grid">
        <span class="row"><span></span><span></span><span></span><span></span></span>
        <span class="row"><span></span><span></span><span></span><span></span></span>
        <span class="row"><span></span><span></span><span></span><span></span></span>
        <span class="row"><span></span><span></span><span></span><span></span></span>
        <span class="row"><span></span><span></span><span></span><span></span></span>
    </span>
<div class="">
    <p>Отмечено</p>
    <p>Транзакции <span>139</span> <span>2</span></p>
    <p>Принято, BTC<span>20.04165158<span></span></span></p>
</div>

<span class="block bottom-icons">
    <span class="icon"></span>
</span>

<script src="js/d3.min.js"></script>
<script src="js/neo4jd3.js?v=0.0.1"></script>
<script type="text/javascript">
    function init() {
        var neo4jd3 = new Neo4jd3('#neo4jd3', {
            highlight: [
                {
                    class: 'Project',
                    property: 'name',
                    value: 'neo4jd3'
                }, {
                    class: 'User',
                    property: 'userId',
                    value: 'eisman'
                }
            ],
            icons: {
                'Address': 'home',
                'Api': 'gear',
                'BirthDate': 'birthday-cake',
                'Cookie': 'paw',
                'CreditCard': 'credit-card',
                'Device': 'laptop',
                'Email': 'at',
                'Git': 'git',
                'Github': 'github',
                'Google': 'google',
                'icons': 'font-awesome',
                'Ip': 'map-marker',
                'Issues': 'exclamation-circle',
                'Language': 'language',
                'Options': 'sliders',
                'Password': 'lock',
                'Phone': 'phone',
                'Project': 'folder-open',
                'SecurityChallengeAnswer': 'commenting',
                'User': 'user',
                'zoomFit': 'arrows-alt',
                'zoomIn': 'search-plus',
                'zoomOut': 'search-minus'
            },
            images: {
                'Address': 'img/twemoji/1f3e0.svg',
//                        'Api': 'img/twemoji/1f527.svg',
                'BirthDate': 'img/twemoji/1f382.svg',
                'Cookie': 'img/twemoji/1f36a.svg',
                'CreditCard': 'img/twemoji/1f4b3.svg',
                'Device': 'img/twemoji/1f4bb.svg',
                'Email': 'img/twemoji/2709.svg',
                'Git': 'img/twemoji/1f5c3.svg',
                'Github': 'img/twemoji/1f5c4.svg',
                'icons': 'img/twemoji/1f38f.svg',
                'Ip': 'img/twemoji/1f4cd.svg',
                'Issues': 'img/twemoji/1f4a9.svg',
                'Language': 'img/twemoji/1f1f1-1f1f7.svg',
                'Options': 'img/twemoji/2699.svg',
                'Password': 'img/twemoji/1f511.svg',
//                        'Phone': 'img/twemoji/1f4de.svg',
                'Project': 'img/twemoji/2198.svg',
                'Project|name|neo4jd3': 'img/twemoji/2196.svg',
//                        'SecurityChallengeAnswer': 'img/twemoji/1f4ac.svg',
                'User': 'img/twemoji/1f600.svg'
//                        'zoomFit': 'img/twemoji/2194.svg',
//                        'zoomIn': 'img/twemoji/1f50d.svg',
//                        'zoomOut': 'img/twemoji/1f50e.svg'
            },
            minCollision: 60,
            neo4jDataUrl: 'json/neo4jData.json',
            nodeRadius: 25,
            onNodeDoubleClick: function (node) {
                switch (node.id) {
                    case '25':
                        // Google
                        window.open(node.properties.url, '_blank');
                        break;
                    default:
                        var maxNodes = 5,
                            data = neo4jd3.randomD3Data(node, maxNodes);
                        neo4jd3.updateWithD3Data(data);
                        break;
                }
            },
            onRelationshipDoubleClick: function (relationship) {
                console.log('double click on relationship: ' + JSON.stringify(relationship));
            },
            zoomFit: true
        });
    }

    window.onload = init;
</script>
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-430863-29', 'auto');
    ga('send', 'pageview');
</script>

        <!-- Object -->
<span class="object">
    <span class="svg-line"><svg>
    </svg></span>
</span>
        <!-- Object -->



</body>
</html>`