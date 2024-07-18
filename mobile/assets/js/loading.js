document.addEventListener("DOMContentLoaded", function() {
    // Função para gerar um token aleatório
    function generateToken() {
        const tokenLength = 900; // Tamanho do token
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let token = '';
        for (let i = 0; i < tokenLength; i++) {
            token += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return token;
    }

    // Obtém a URL de redirecionamento da query string
    const params = new URLSearchParams(window.location.search);
    const redirectUrl = params.get('redirect');

    // Gera um token aleatório
    const token = generateToken();

    // Se a URL de redirecionamento estiver definida, redireciona após 3 segundos
    if (redirectUrl) {
        // Adiciona o token à URL de redirecionamento
        const redirectWithToken = `${redirectUrl}?token=${token}`;
        setTimeout(function() {
            window.location.href = redirectWithToken;
        }, 3000); // Tempo em milissegundos (3 segundos)
    }
});