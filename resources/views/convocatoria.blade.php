<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocação de Jogadores - Gil Vicente FC</title>
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
            display: flex;
            max-width: 1200px;
            margin: 120px auto 20px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            color: #001530;
        }

        .convocacao-container {
            flex: 1;
            margin-right: 20px;
        }

        .convocados-container {
            flex: 1;
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

        .convocacao-buttons {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .convocacao-button {
            background-color: #c8102e;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .convocacao-button:hover {
            background-color: #00205b;
        }

        .jogadores-list {
            list-style-type: none;
            padding: 0;
        }

        .jogadores-category {
            margin-top: 20px;
        }

        .jogadores-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .jogadores-list button {
            background-color: #c8102e;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .jogadores-list button:hover {
            background-color: #00205b;
        }

        /* Jogadores Convocados */
        .convocados-list {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .convocados-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .convocados-list button {
            background-color: #c8102e;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .convocados-list button:hover {
            background-color: #00205b;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
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
        <div class="convocacao-container">
            <h1>Convocação de Jogadores</h1>
            <p>Selecione os jogadores para a convocação:</p>
            <ul class="jogadores-list">
                <h3 class="jogadores-category">Guarda-Redes</h3>
                @foreach($jogadores->where('posicao', 'Guarda Redes') as $jogador)
                    <li>
                        {{ $jogador->nome }} - {{ $jogador->posicao }}
                        <button onclick="convocarJogador('{{ $jogador->nome }}', {{ $jogador->id }})">Convocar</button>
                    </li>
                @endforeach

                <h3 class="jogadores-category">Defesas</h3>
                @foreach($jogadores->where('posicao', 'Defesa') as $jogador)
                    <li>
                        {{ $jogador->nome }} - {{ $jogador->posicao }}
                        <button onclick="convocarJogador('{{ $jogador->nome }}', {{ $jogador->id }})">Convocar</button>
                    </li>
                @endforeach

                <h3 class="jogadores-category">Médios</h3>
                @foreach($jogadores->where('posicao', 'Medio') as $jogador)
                    <li>
                        {{ $jogador->nome }} - {{ $jogador->posicao }}
                        <button onclick="convocarJogador('{{ $jogador->nome }}', {{ $jogador->id }})">Convocar</button>
                    </li>
                @endforeach

                <h3 class="jogadores-category">Avançados</h3>
                @foreach($jogadores->where('posicao', 'Avancado') as $jogador)
                    <li>
                        {{ $jogador->nome }} - {{ $jogador->posicao }}
                        <button onclick="convocarJogador('{{ $jogador->nome }}', {{ $jogador->id }})">Convocar</button>
                    </li>
                @endforeach
        </ul>


            <button class="convocacao-button" onclick="aplicarConvocatoria()">Aplicar Convocação</button>
        </div>

        <div class="convocados-container">
            <h1>Jogadores Convocados</h1>
            <ul class="convocados-list" id="convocadosList"></ul>
        </div>
    </div>

    <!-- Modal para confirmação -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fecharModal()">&times;</span>
            <p id="modal-text">Tem certeza que deseja convocar este jogador?</p>
            <button onclick="convocarJogadorConfirmado()">Sim</button>
            <button onclick="fecharModal()">Cancelar</button>
        </div>
    </div>

    <script src="{{ asset('js/convocatoria.js') }}"></script>

    
    <script>
        // Função chamada quando a convocação é confirmada no modal
        function convocarJogadorConfirmado(nome, id) {
            // Adicione aqui a lógica para convocar o jogador
            // Pode ser uma chamada AJAX, atualização de dados, etc.

            // Exemplo de como adicionar o jogador convocado à lista
            adicionarJogadorConvocado(nome);

            // Depois de concluir, feche o modal
            fecharModal();
        }

        function adicionarJogadorConvocado(nome) {
            var convocadosList = document.getElementById('convocadosList');
            var listItem = document.createElement('li');
            listItem.textContent = nome;
            convocadosList.appendChild(listItem);
        }
    </script>


</body>

</html>
