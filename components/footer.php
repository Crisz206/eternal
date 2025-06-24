<section class="contact">
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contacto</h3>
                <p>Teléfono: +506 8335-7719 / +506 8505 3037</p>
                <p>Email: soporte@eternaltrp.com</p>
                <p>Dirección: Ciudad Quesada, San Carlos / Tilarán, Guanacaste</p>
            </div>
            
            <div class="footer-section">
                <div class="enlaces-rapidos">
                    <h3>Enlaces Rápidos</h3>
                    <div class="links-container">
                        <a href="index.php">Inicio</a>
                        <a href="conocenos.php">Conózcanos</a>
                        <a href="servicios.php">Servicios</a>
                        <a href="contacto.php">Contáctenos</a>
                    </div>
                </div>
            </div>

            <div class="footer-section">
                <h3>Horario</h3>
                <p>Lunes - Viernes: 8:00 AM - 5:00 PM</p>
                <p>Sábado: 8:00 AM - 5:00 PM</p>
                <p>Domingo: Cerrado</p>
            </div>

            <div class="footer-section">
                <h3>Síguenos</h3>
                <div class="social-icons">
                    <a href="https://www.facebook.com/eternaltrp/" target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank" aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2024 Eternal Technology RP</p>
        </div>
    </footer>
</section>

<style>
:root {
    --main: #002878;
    --second: #007BC1;
    --white: #ffffff;
}
body{
    margin: 0;
}
/* Footer Styles */
.contact {
    background-color: var(--main);
}

.footer {
    padding: 3rem 1rem;
    color: var(--white);
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}

.footer-section {
    padding: 0 1rem;
}

.footer-section h3 {
    color: var(--white);
    margin-bottom: 1.5rem;
    font-size: 1.25rem;
    position: relative;
}

.footer-section h3::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -0.5rem;
    width: 50px;
    height: 2px;
    background-color: var(--second);
}

.footer-section p {
    color: var(--white);
    margin-bottom: 0.75rem;
    font-size: 0.95rem;
}

/* Enlaces Rápidos */
.links-container {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.enlaces-rapidos a {
    color: var(--white);
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
    padding-left: 1.5rem;
}

.enlaces-rapidos a::before {
    content: '→';
    position: absolute;
    left: 0;
    transition: transform 0.3s ease;
}

.enlaces-rapidos a:hover {
    color: var(--second);
    transform: translateX(5px);
}

.enlaces-rapidos a:hover::before {
    transform: translateX(3px);
}

/* Social Icons */
.social-icons {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
    
}

.social-icons a {
    color: var(--white);
    font-size: 1.5rem;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
    text-decoration: none;
}

.social-icons a:hover {
    color: var(--second);
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-3px);
}

/* Copyright */
.copyright {
    text-align: center;
    margin-top: 3rem;
    padding-top: 1.5rem;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.copyright p {
    color: var(--white);
    font-size: 0.9rem;
}

/* Media Queries */
@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .footer-section h3::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .enlaces-rapidos a {
        padding-left: 0;
    }

    .enlaces-rapidos a::before {
        display: none;
    }

    .social-icons {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .footer {
        padding: 2rem 1rem;
    }

    .footer-section {
        padding: 0;
    }

    .social-icons {
        flex-wrap: wrap;
    }
}
</style>

