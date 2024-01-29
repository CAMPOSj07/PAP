<!-- resources/views/convocatoria.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convocação - Gil Vicente FC</title>
    <style>
        /* Adicione estilos conforme necessário */
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

    @include('partials.header')

    <div class="content">
        <h1>Convocação de Jogadores</h1>
        <p>Selecione os jogadores para a convocação:</p>

        <ul>
            <li>Jogador 1 <button onclick="convocarJogador(1)">Convocar</button></li>
            <li>Jogador 2 <button onclick="convocarJogador(2)">Convocar</button></li>
            <!-- Adicione mais jogadores conforme necessário -->
        </ul>

        <button onclick="aplicarConvocatoria()">Aplicar Convocação</button>
    </div>

    <script src="{{ asset('js/convocatoria.js') }}"></script>
</body>

</html>
