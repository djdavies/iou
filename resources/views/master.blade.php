<!DOCTYPE html>
<html lang="en">
    <head>
        <title>iou - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
        <link rel="stylesheet" type="text/css" href="css/thumbnail.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">I</a></li>
                    <li role="presentation"><a href="#">O</a></li>
                    <li role="presentation"><a href="#">U</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
