document.addEventListener("DOMContentLoaded", function() {
    // Seleciona todos os elementos com a classe submenu
    var submenus = document.querySelectorAll('.submenu');

    // Adiciona um evento de clique a cada elemento submenu
    submenus.forEach(function(submenu) {
        var submenuToggle = submenu.querySelector('a'); // Elemento de clique para abrir o submenu
        submenuToggle.addEventListener('click', function(event) {
            event.preventDefault(); // Evita que o link recarregue a página

            // Fecha todos os submenus que estão abertos, exceto o submenu atual
            closeOtherSubmenus(submenu);

            // Alterna a classe active para abrir ou fechar o submenu atual
            if (!submenu.classList.contains('active')) {
                submenu.classList.add('active');
            } else {
                submenu.classList.remove('active');
            }
        });
    });

    // Função para fechar todos os submenus que estão abertos, exceto o submenu atual
    function closeOtherSubmenus(currentSubmenu) {
        submenus.forEach(function(otherSubmenu) {
            if (otherSubmenu !== currentSubmenu && otherSubmenu.classList.contains('active')) {
                otherSubmenu.classList.remove('active');
            }
        });
    }
});
document.addEventListener("DOMContentLoaded", function() {
    // Verifica se a notificação deve ser mostrada (você pode usar PHP para controlar isso)
        document.getElementById('notification').style.display = 'block';

    // Fecha a notificação após alguns segundos (opcional)
    setTimeout(function() {
        document.getElementById('notification').style.display = 'none';
    }, 5000); // 5000 milissegundos = 5 segundos
});
document.addEventListener("DOMContentLoaded", function() {
var menuToggle = document.getElementById('menuToggle');
var sidebar = document.getElementById('sidebar');

menuToggle.addEventListener('click', function() {
sidebar.classList.toggle('active');
});

// Fechar o sidebar quando um link dentro do sidebar for clicado
var sidebarLinks = document.querySelectorAll('#sidebar a');
sidebarLinks.forEach(function(link) {
link.addEventListener('click', function() {
    sidebar.classList.remove('active');
});
});
});
