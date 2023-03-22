<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/974567108e.js" crossorigin="anonymous"></script>
    <title>Lara Shop</title>
    @vite('resources/scss/admin/layout.scss')
</head>
<body>
    <section class="horizontal-nav">
        <div class="left-nav">
            <h2>LaraShop Dashboard</h2>
            <p class="admin">Admin</p>
        </div>
        <div class="right-nav">
            <p>loginAdmin</p>
            <p><i class="fa-solid fa-right-from-bracket"></i></p>
        </div>
    </section>
    <section class="vartical-nav">
        <a href="#">Category Management</a>
        <a href="#">Products Management</a>
        <a href="#">Banner Management</a>
        <a href="#">Order Management</a>
        <a href="#">Customer Management</a>
    </section>
    <section class="content">
{{--        <h1>This is the Content Section</h1>--}}
        @yield('content', 'Welcome to LaraShop Admin Panel')
    </section>
</body>
</html>
