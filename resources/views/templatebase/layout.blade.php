<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />
</head>
<body>
    <header>
        <h3>Header</h3>
    </header>
    @yield('showData')
    @yield('contactUs')
    <footer>
        <h3>Footer</h3>  
    </footer>
    </body>
    </html>
