</div>


<!--Footer Part-->
<footer>
    <div class="section-footer container" id="footer">
        <div class="footer-section-logo">
            <div class="logo-container">
                <img src="img/logo.jpeg" alt="Logo" class="img-logo" />
            </div>
            <p>
                Somos una Farmacia el cual su objetivo es ayudar
                a las personas con cualquier medicamento que sea
                necesario para la salud de nuestros clientes y
                eso lo logramos ofreciendo los mejores productos
                de la ciudad.
            </p>
            <div class="social-links">
                <a href="#" class="btn-social-link">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="#" class="btn-social-link">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://wa.me/+18296999602" class="btn-social-link">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>
        </div>
        <div class="footer-links">
            <div class="footer-column">
                <h4 class="footer-column-title">Compañía</h4>
                <ul>
                    <li><a href="Nosotros.html">Sobre Nosotros</a></li>
                    <li><a href="https://wa.me/+18296999602">Contáctanos</a></li>
                    <li><a href="Política de Privacidad.pdf">Política de Privacidad</a></li>
                </ul>
            </div>
            
            <div class="footer-column map-column">
                <h4 class="footer-column-title">Encuéntranos</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.7872112029895!2d-70.69528082527111!3d19.421597841033112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eb1cf180666803f%3A0xaa02b74ac87d3d56!2sFarmacia%20Villa%20Verde!5e0!3m2!1ses-419!2sdo!4v1746241663746!5m2!1ses-419!2sdo" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="copyright">© 2025 .</p>
        </div>
    </div>
</footer>
    
<style>
  :root {
    --primary-color:rgb(83, 83, 83);
    --primary-light:rgb(255, 0, 0);
    --secondary-color:rgb(87, 21, 21);
    --white: #ffffff;
   
   
 
}
/* Footer */
footer {
    background-color: var(--secondary-color);
    padding: 20px 0 5px; 
    color: var(--white);
    position: relative;
    overflow: hidden;
    margin-top: 12%;
}

footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--primary-light), var(--primary-color));
}

.section-footer {
    display: flex;
    gap: 30px; 
    flex-wrap: wrap;
}

.footer-section-logo {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 15px; 
}

.logo-container {
    display: flex;
    justify-content: center;
    width: 100%;
    margin-bottom: 10px;
}

.footer-section-logo img {
    width: 100px;
    height: auto;
}

.footer-section-logo p {
    font-size: 14px;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.7);
    max-width: 350px;
}

.footer-section-logo .social-links {
    margin-top: 10px; 
    display: flex;
    gap: 10px; 
}

.footer-section-logo .social-links a {
    background-color: rgba(255, 255, 255, 0.05);
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: var(--transition);
} 

.footer-section-logo .social-links a:hover {
    background-color: var(--primary-color);
}

.footer-links {
    flex: 2.5;
    display: flex;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
}

.footer-column {
    display: flex;
    flex-direction: column;
    gap: 20px;
    min-width: 160px;
}

.map-column {
    flex: 1.5;
}

.footer-column-title {
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 8px;
}

.footer-column-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px; 
    height: 2px; 
    background-color: var(--primary-color);
}

.footer-column ul {
    list-style: none;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 10px; 
}

.footer-column li {
    font-size: 14px;
}

.footer-column a {
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.footer-column a:hover {
    color: var(--primary-light);
    transform: translateX(4px);
}

.footer-column a i {
    font-size: 12px;
}

.map-column iframe {
    width: 100%;
    height: 200px; 
    border-radius: var(--radius-md);
    border: none;
    overflow: hidden;
}

.footer-bottom {
    margin-top: 30px;
}
.copyright {
    text-align: center;
    padding-top: 10px;
    margin-top: 0;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 13px; 
    color: rgba(255, 255, 255, 0.5);
}

.payment-methods {
    display: flex;
    justify-content: center;
    gap: 10px; 
    margin-top: 10px;
}

.payment-methods i {
    font-size: 24px; 
    color: rgba(255, 255, 255, 0.7);
}

 
</style>


</body>
</html>