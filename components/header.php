<header class="site-header">
    <div class="container">
        <nav class="main-nav">
            <div class="logo-container">
             <br>
            </div>
            <button class="mobile-menu-btn" aria-label="Abrir menú">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="nosotros.php">Sobre Nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="Soluciones.php">Soluciones</a></li>
            </ul>
        </nav>
    </div>
</header>

<style>
:root {
    --main: #002878;
    --second: #007BC1;
    --white: #ffffff;
}

.site-header {
    background-color: var(--main);
    color: var(--white);
    padding: 1rem 0;
    font-family: Arial, sans-serif;
    margin: 0;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.main-nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.logo-container {
    display: flex;
    align-items: center;
}

.circulo {
    border: 7px solid var(--second);
    background-color: var(--white);
    width: 100px;
    height: 100px;
    border-radius: 50%;
    padding: 5px;
    transition: transform 0.3s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.circulo:hover {
    transform: scale(1.1);
}

.logo-img {
    width: 250px;
    height: 250px;
    margin: 0;
    padding: 0;
}

.nav-menu {
    list-style-type: none;
    padding: 20px;
    position: fixed;
    top: 0;
    right: -300px;
    width: 250px;
    height: 100vh;
    background-color: var(--main);
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    transition: right 0.3s ease;
    z-index: 999;
    margin: 0;
    display: flex;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
}

.nav-menu.active {
    right: 0;
}

.nav-menu li {
    margin: 1rem 0;
    transition: transform 0.3s ease;
    width: 100%;
}

.nav-menu li a {
    color: var(--white);
    text-decoration: none;
    transition: color 0.3s;
    font-size: 1.1rem;
    position: relative;
    display: block;
    padding: 10px 0;
}

.nav-menu li a:hover {
    color: var(--second);
    text-shadow: 0 0 10px var(--second);
}

/* Estilos para el botón de menú */
.mobile-menu-btn {
    display: block;
    background: none;
    border: none;
    cursor: pointer;
    padding: 10px;
    position: fixed; /* Mantiene el botón fijo */
    top: 20px; /* Ajusta la posición */
    right: 20px; /* Ajusta la posición */
    z-index: 1000;
    transition: transform 0.3s ease;
}

/* Cuadrado detrás del botón */
.mobile-menu-btn::before {
    content: ''; 
    position: absolute;
    top: 0; 
    left: -2px; 
    width: 80px; 
    height: 55px; 
    background-color: var(--main); 
    z-index: -1; 
    transition: transform 0.2s ease; 
    border-radius: 5px;
}

.mobile-menu-btn span {
    display: block;
    width: 30px;
    height: 3px;
    background-color: var(--white);
    margin: 5px 0;
    transition: all 0.3s ease;
}

.mobile-menu-btn.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.mobile-menu-btn.active span:nth-child(2) {
    opacity: 0;
}

.mobile-menu-btn.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
}

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: none;
    z-index: 998;
}

.overlay.active {
    display: block;
}


</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');
    const body = document.body;
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    body.appendChild(overlay);

    mobileMenuBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
        body.classList.toggle('menu-open');
        overlay.classList.toggle('active');
    });

    // Cerrar el menú al hacer clic en un enlace o en el overlay
    const navLinks = document.querySelectorAll('.nav-menu a');
    navLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });
    overlay.addEventListener('click', closeMenu);

    function closeMenu() {
        mobileMenuBtn.classList.remove('active');
        navMenu.classList.remove('active');
        body.classList.remove('menu-open');
        overlay.classList.remove('active');
    }
});
</script>

<div class="overlay"></div>

