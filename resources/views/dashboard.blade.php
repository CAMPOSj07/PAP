<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Gil Vicente FC</title>
    <style>
        /* Adicione seus estilos aqui */

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('https://scontent.flis7-1.fna.fbcdn.net/v/t1.6435-9/119277084_3507367375975628_2590771420863753355_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=300f58&_nc_ohc=Fy-W9amgH10AX--Um4g&_nc_ht=scontent.flis7-1.fna&oh=00_AfB5yePC-fJ29FKIpd5RIG7z3VpFmBtkrKcqXiSXsBguUQ&oe=65D89CB2');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: #fff;
            margin-top: 0;
            justify-content: center;
            align-items: center;
        }

        header {
            background-color: #001530;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
        }

        header img {
            width: 50px;
            height: auto;
            margin-right: 10px;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }

        .content {
            max-width: 800px;
            margin: 120px auto 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: #001530;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .user-options {
            position: relative;
            cursor: pointer;
        }

        .user-name {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .user-actions {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .user-options:hover .user-actions {
            display: flex;
            flex-direction: column;
        }

        .user-actions button,
        .user-actions a {
            padding: 15px;
            text-align: center;
            text-decoration: none;
            width: 100%;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
            border-bottom: 1px solid #ddd;
        }

        .user-actions button:hover,
        .user-actions a:hover {
            background-color: #f4f4f4;
        }

        .dashboard-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .dashboard-button {
            background-color: #c8102e;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .dashboard-button:hover {
            background-color: #00205b;
        }
    </style>
</head>

<body>

    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Gvfc2021.webp" alt="Club Logo">
        <h1>Gil Vicente FC </h1>
        <div class="user-options">
            <span class="user-name">{{ Auth::user()->name }}</span>
            <div class="user-actions">
                <button class="edit-profile">Edit Profile</button>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>
        </div>
    </header>

    <div class="content">
        <h1>Bem-vindo, {{ Auth::user()->name }}!</h1>
        <p>Escolha o escalão ao qual pertence.</p>

        <div class="dashboard-buttons">
            <button class="dashboard-button" onclick="location.href='{{ route('convocatoria') }}'">Convocatória</button>
            <button class="dashboard-button" onclick="location.href='{{ route('menujogo') }}'">Dia de Jogo</button>
        </div>
    </div>

</body>

</html>
