// Aguarde até que o DOM esteja completamente carregado
document.addEventListener('DOMContentLoaded', function () {
    // Manipulação do DOM e eventos aqui
    // Exemplo: adicionando um evento de clique a um botão

    var convocatoriaButton = document.getElementById('convocatoriaButton');
    var jogoButton = document.getElementById('jogoButton');

    if (convocatoriaButton) {
        convocatoriaButton.addEventListener('click', function () {
            // Redirecionar para a página de convocatória
            window.location.href = '/convocatoria';
        });
    }

    if (jogoButton) {
        jogoButton.addEventListener('click', function () {
            // Redirecionar para a página de menu de jogo
            window.location.href = '/menujogo';
        });
    }
});
