<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Adicione os metadados e links de estilo necessários aqui -->
    <title>Editar Perfil</title>
    <style>
        /* Adicione seus estilos aqui */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #c8102e;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #00205b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Editar Perfil</h1>

        <!-- Formulário de Atualização de Informações do Perfil -->
        <form action="{{ route('profile.update') }}" method="post">
            @csrf
            @method('patch')
            <label for="name">Nome:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            <!-- Adicione outros campos do perfil conforme necessário -->
            <button type="submit">Salvar Alterações</button>
        </form>

        <!-- Formulário de Atualização de Senha -->
        <form action="{{ route('password.update') }}" method="post">
            @csrf
            <label for="current_password">Senha Atual:</label>
            <input type="password" name="current_password" required>
            <label for="password">Nova Senha:</label>
            <input type="password" name="password" required>
            <label for="password_confirmation">Confirme a Nova Senha:</label>
            <input type="password" name="password_confirmation" required>
            <button type="submit">Alterar Senha</button>
        </form>

        <!-- Formulário de Exclusão de Usuário -->
        <form action="{{ route('profile.destroy') }}" method="post">
            @csrf
            @method('delete')
            <label for="password">Senha para Confirmação:</label>
            <input type="password" name="password" required>
            <button type="submit">Excluir Conta</button>
        </form>
    </div>
</body>

</html>
