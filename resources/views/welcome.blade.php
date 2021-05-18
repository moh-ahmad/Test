<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0;
            background-color: lightslategray;

        }

        .landing-header {
            max-width: 1200px;
            margin: 20px auto;
        }

        .landing-header h1 {

            text-align: center;
            margin: 1rem;
        }

        .landing-btn {
            background-image: url('https://images.unsplash.com/photo-1542626991-cbc4e32524cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1649&q=80');
            height: 90vh;
            object-fit: contain;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .landing-btn a {
            text-decoration: none;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .landing-btn a button {
            padding: 15px;
            border-radius: 3px;
            border: none;
            height: auto;
            margin: 10%;
            cursor: pointer;
            font-size: 1.5rem;
        }

        .view-group {
            background: lightskyblue;
            color: white;
        }

        .login {
            color: white;
            background-color: green;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <div class="landing-header">
        <h1>Kanban - G2</h1>
        <div class="landing-btn">
            <a href="/members"><button class="view-group">View Group Members</button></a>
            <a href="/login"><button class="login">Login / Register</button></a>
        </div>
    </div>
</body>

</html>