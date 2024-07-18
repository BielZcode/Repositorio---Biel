// Função para verificar se o usuário está em um dispositivo móvel
function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

// Redirecionamento para a versão móvel do site
if (isMobile()) {
    window.location.href = "indexmoba"; // Substitua com a URL da versão móvel
}

window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    if (window.pageYOffset > 0) {
        navbar.classList.add("scrolling");
    } else {
        navbar.classList.remove("scrolling");
    }
};
function toggleVisibility() {
    var element = document.getElementById("text");
    if (element.classList.contains("show")) {
        element.classList.remove("show");
        setTimeout(function() {
            element.style.display = "none";
        }, 500); // Tempo da transição de opacidade
    } else {
        element.style.display = "block";
        setTimeout(function() {
            element.classList.add("show");
        }, 10); // Pequeno atraso para garantir que o display esteja ativo antes da transição
    }
}