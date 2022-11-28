<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>

    header {
        display: flex;
        border: 1px solid black;
        height:100px;
        width: 100%;


    }

    .menu {
        flex-grow: 1;
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-around;
        align-items: center;
    }

    .menu ul {
        display: flex;
        flex-flow: row nowrap;
        margin: 0;
        padding: 0;
        font-size: 16px;
        line-height: 18px;
        list-style: none;
    }
    .menu li {
        margin-right: 20px;
    }
    .menu li:last-child {
        margin-right: 0;
    }

    .menu a {
        padding: 8px 10px;
        color: #000;
        text-decoration: none;
    }
    .menu a,
    .menu .active {
        display: block;
        padding: 8px 10px;
        text-transform: uppercase;
        letter-spacing: .27em;

    }
    * {box-sizing: border-box}


    .container {
        padding: 16px;
        width: 50%;
        margin-left: 20px;
    }
    .container2 {
        border: 1px solid black;
        padding: 16px;
        width: 45%;
        margin-left: 20px;
    }

    .container3 {
        border: 1px solid black;
        padding: 16px;

        width: 45%;
        margin-top: 5%;
        margin-left: 25%;
    }

    input[type=text], input[type=password] , input[type=email]{
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus{
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid lightgray;
        margin-bottom: 25px;
    }

    .btn_btn-success {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    .registerbtn:hover {
        opacity:1;
    }


    a {
        color: dodgerblue;
    }


    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }

    .btn_accept {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 30%;
          opacity: 0.9;
      }

    .btn_del {
        background-color: red;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 30%;
        opacity: 0.9;
    }

    label{
        font-size: 21px;
    }
</style>
<header>
    <div class="menu">
        <ul>
            <li><a href="/">Главная страница</a></li>
            <li><a href="/login">Войти(not working)</a></li>
            <li><a href="/registration">Регистрация</a></li>
        </ul>
    </div>

</header>
<body>

@yield('main_content')

</body>
</html>
