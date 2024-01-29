<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gil Vicente FC</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #00205b;
            color: #fff;
        }

        header {
            background-color: #00205b;
            padding: 20px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            width: 80px;
            margin-right: 10px;
        }

        header h1 {
            font-size: 32px;
            margin: 0;
            color: #fff;
        }

        header a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            margin: 0 10px;
        }

        header a:hover {
            background-color: #001530;
            color: #c8102e;
        }

        .carousel {
            position: relative;
            overflow: hidden;
            height: 400px;
        }

        .carousel img {
            width: 100%;
            height: auto;
            display: none;
        }

        .w3-content {
            max-width: 1000px;
            margin: 20px auto;
        }

        .GVFC-countdown-container {
            background-color: #001530;
            color: #fff;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .GVFC-countdown-title {
            font-size: 24px;
            margin: 10px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c8102e;
        }

        .GVFC-countdown-counter {
            font-size: 18px;
            margin: 10px 0;
        }

        .team-logos img {
            width: 80px;
            height: 80px;
            margin: 0 10px;
            border-radius: 50%;
        }

        .next-match {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            border-radius: 10px;
        }

        .next-match .team img {
            width: 40px;
            margin-bottom: 10px;
        }

        .next-match h2 {
            font-size: 24px;
            margin: 10px 0;
            color: #00205b;
        }

        .w3-footer {
            margin-top: 20px;
            background-color: #001530;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .social-media a {
            color: #fff;
            margin: 0 10px;
            text-decoration: none;
        }

        .social-media img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .highlight-section {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .highlight-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            width: 45%;
            text-align: center;
            margin-bottom: 20px;
        }

        .highlight-box h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #00205b;
        }

        .highlight-box img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        /* Adicionado estilo para nome do jogador e número de gols */
        .highlight-box span {
            color: #c8102e; /* Cor ajustada para ser consistente com login.blade.php */
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Logotipo e Nome do Clube -->
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Gvfc2021.webp" alt="Emblema do Clube">
        <h1>Gil Vicente FC</h1>
        <!-- Adicione a imagem ao lado direito como um link para login.blade.php -->
        <div>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Registrar</a>
        </div>
    </header>

    <!-- Carrossel de Imagens -->
    <div class="carousel">
        <img src="imagem1.png" alt="Foto 1">
        <img src="imagem2.png" alt="Foto 2">
        <img src="imagem3.png" alt="Foto 3">
        <!-- Adicione mais imagens conforme necessário -->
    </div>

    <!-- Conteúdo da Página -->
    <div class="w3-content">

        <!-- Contagem Regressiva -->
        <div class="GVFC-countdown-container">
            <div class="GVFC-countdown-title">
                <div class="team-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Gvfc2021.webp" alt="Logo Equipa Esquerda">
                </div>
                <h2>Gil Vicente FC vs Vitória SC</h2>
                <div class="team-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/d/d5/Vit%C3%B3ria_Guimar%C3%A3es.svg/1200px-Vit%C3%B3ria_Guimar%C3%A3es.svg.png" alt="Logo Equipa Direita">
                </div>
            </div>
            <p class="countdown sp-countdown GVFC-countdown-counter">
                <time id="countdown" datetime="2024-01-28 15:30:14" data-countdown="2024/01/28 15:30:14">
                    <span>04 <small>dias</small></span>
                    <span>01 <small>horas</small></span>
                    <span>35 <small>minutos</small></span>
                    <span>22 <small>segundos</small></span>
                </time>
            </p>
            <span class="countdown-date">28 Janeiro, 2024 - 15:30</span>
        </div>

        <!-- Destaque dos Jogadores -->
        <div class="highlight-section">
            <!-- Jogador com Mais Gols -->
            <div class="highlight-box">
                <img src="https://pbs.twimg.com/media/E7fIT8_XIAU4ZHu.jpg" alt="Imagem do Jogador">
                <h3 style="color: #00205b;">Melhor Marcador</h3>
                <span style="color: #ffd700;">Fran Navarro</span>
                <h3>20 Golos</h3>
            </div>

            <div class="highlight-box">
                <img src="https://pbs.twimg.com/media/E7fIT8_XIAU4ZHu.jpg" alt="Imagem do Jogador">
                <h3 style="color: #00205b;">MVP</h3>
                <span style="color: #ffd700;">Nome do Jogador</span>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <footer class="w3-footer">
        <!-- Redes Sociais -->
        <div class="social-media">
            <a href="#"><img src="https://classeasaude.com.br/wp-content/uploads/2020/01/icone-fb-branco.png" alt="Facebook"></a>
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/X_logo_2023_%28white%29.png/480px-X_logo_2023_%28white%29.png" alt="Twitter"></a>
            <a href="#"><img src="https://i0.wp.com/atorre.pt/wp-content/uploads/2019/10/white-instagram-icon-instagram-logo-instagram-instagram-icon-white-11553385558pigg7yyye3.png?ssl=1" alt="Instagram"></a>
        </div>
    </footer>

    <script>
        // Seu script existente para o carrossel e contagem regressiva aqui
    </script>

</body>

</html>
