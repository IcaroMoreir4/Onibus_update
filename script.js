$(document).ready(function() {
    $('#compraForm').submit(function(event) {
        event.preventDefault(); // Evita a submissão padrão do formulário

        // Realiza a submissão do formulário de forma assíncrona (AJAX)
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(), // Serializa os dados do formulário
            success: function(response) {
                // Redireciona para a página 'comprada.html' após a submissão bem-sucedida
                window.location.href = 'comprada.html';
            },
            error: function(xhr, status, error) {
                // Lida com erros de submissão (opcional)
                console.error('Erro na submissão:', error);
                // Você pode adicionar uma mensagem de erro ou fazer outro tratamento aqui
            }
        });
    });

    // COMPRADA

    
    
});



