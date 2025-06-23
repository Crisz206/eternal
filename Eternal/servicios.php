<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - Eternal Technology</title>
    <link rel="stylesheet" href="style/servicios.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main>
        
        <section class="servicios-hero">
            <div class="container">
            <img src="img/ETERNAL TECHNOLOGY_BLANCO.png" alt="Eternal Technology" class="logo-centrico-blanco" >
                <h1>Nuestros Servicios</h1>
                <p>Soluciones integrales para tu empresa</p>
            </div>
        </section>

        <section class="servicios-detallados">
            <div class="container">
                <div class="servicios-grid">
                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <h3>Instalación y configuración de redes informáticas</h3>
                        <p>Implementamos y configuramos redes empresariales seguras y eficientes, garantizando una conectividad óptima para tu negocio.</p>
                        <a href="redes.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Mantenimiento preventivo y correctivo</h3>
                        <p>Servicio técnico especializado para mantener tus equipos funcionando en óptimas condiciones, previniendo y solucionando problemas.</p>
                        <a href="mantenimiento.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3>Servicios de CCTV</h3>
                        <p>Sistemas de videovigilancia de última generación para garantizar la seguridad de tu negocio 24/7.</p>
                        <a href="cctv.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Desarrollos de software a la medida</h3>
                        <p>Creamos soluciones personalizadas que se adaptan perfectamente a las necesidades específicas de tu empresa.</p>
                        <a href="desarrollo.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h3>Venta de partes y equipo de cómputo</h3>
                        <p>Ofrecemos componentes y equipos de las mejores marcas con garantía y soporte técnico incluido.</p>
                        <a href="partes.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-cash-register"></i>
                        </div>
                        <h3>Venta de sistema Punto de Venta</h3>
                        <p>Sistema de punto de venta completo y fácil de usar, perfecto para gestionar tu negocio eficientemente.</p>
                        <a href="PTV.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-window-restore"></i>
                        </div>
                        <h3>Venta de software ofimática</h3>
                        <p>Licencias originales de Office y Windows para maximizar la productividad de tu empresa.</p>
                        <a href="ofimatico.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3>Contabilidad</h3>
                        <p>Servicios contables para mantener tus finanzas en orden y cumplir con todas las regulaciones.</p>
                        <a href="contabilidad.php" class="btn-mas-info">Más Información</a>
                    </div>

                    <div class="servicio-card">
                        <div class="servicio-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>Recursos Humanos</h3>
                        <p>Gestión integral del talento humano para optimizar el rendimiento de tu equipo de trabajo.</p>
                        <a href="rh.php" class="btn-mas-info">Más Información</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <a href="index.php"><img src="img/eternal_color_1.png" alt="Eternal Technology Icon" style="width: 100px; margin-top: 2rem; margin-left:620px;align-items:center;"></a>
    <?php include 'components/footer.php'; ?>

    <script>
        // Animación para los botones de "Más Información"
        document.querySelectorAll('.btn-mas-info').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.animation = 'pulse 0.5s';
            });
            button.addEventListener('animationend', function() {
                this.style.animation = '';
            });
        });
    </script>
</body>
</html>

