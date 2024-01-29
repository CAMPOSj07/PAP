<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Gil Vicente FC</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('https://scontent.flis7-1.fna.fbcdn.net/v/t1.6435-9/119277084_3507367375975628_2590771420863753355_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=300f58&_nc_ohc=Fy-W9amgH10AX--Um4g&_nc_ht=scontent.flis7-1.fna&oh=00_AfB5yePC-fJ29FKIpd5RIG7z3VpFmBtkrKcqXiSXsBguUQ&oe=65D89CB2');
            color: #fff;
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header {
            background-color: #00205b;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        header img {
            width: 70px;
            cursor: pointer;
        }

        header h1 {
            font-size: 24px;
            margin: 0;
            margin-right: 10px;
        }

        .register-form {
            max-width: 400px;
            width: 100%;
            margin-top: 80px; /* Ajuste para evitar sobreposição com a barra superior */
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .register-form h2 {
            color: #00205b;
            margin-bottom: 30px;
            font-size: 28px;
        }

        .register-form label {
            display: block;
            margin-bottom: 15px;
            color: #333;
            text-align: left;
            font-size: 16px;
        }

        .register-form input {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .register-form button {
            background-color: #00205b;
            color: #fff;
            padding: 15px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            width: 100%;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .register-form button:hover {
            background-color: #001530;
        }
    </style>
</head>

<body>

    <!-- Barra Superior -->
    <header>
        <a href="/"><img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Gvfc2021.webp" alt="Emblema do Clube"></a>
        <h1>Gil Vicente FC</h1>
    </header>

    <!-- Formulário de Registro -->
    <div class="register-form">
        <h2>Registro de Usuário</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <label for="name">Nome Completo:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>

            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>

            <button type="submit">Registrar</button>
        </form>
    </div>

</body>

</html>
