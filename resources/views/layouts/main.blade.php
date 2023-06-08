<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unia</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link id="style" rel="stylesheet" href="css/dark-style.css" type="text/css">
</head>

<body>
    @yield('main')
    <div id="overlay" class="overlay"></div>
    <div class="theme-toggle">
        <button type="button" id="light-theme" class="btn-tggole light"></button>
        <button type="button" id="dark-theme" class="btn-tggole dark"></button>
        <button type="button" id="pink-theme" class="btn-tggole pink"></button>
    </div>
</body>
    <script src="js/script.js"></script>
</html>