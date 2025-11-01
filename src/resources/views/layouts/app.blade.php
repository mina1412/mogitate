<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '商品管理')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        body {
            font-family: 'Hiragino Sans', 'Noto Sans JP', sans-serif;
            background-color: #f8fafc;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background: #4f46e5;
            color: white;
            padding: 15px 20px;
        }

        header h1 {
            margin: 0;
            font-size: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }

        footer {
            background: #4f46e5;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }

        a {
            color: #4f46e5;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

    <div class="container">
        @yield('content')
    </div>

</html>
