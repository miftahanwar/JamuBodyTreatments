<style>
.footer-container {
    background-color: #f8f9fa;
    padding: 80px 0 40px;
    color: #6c757d;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.footer-grid {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 60px;
    margin-bottom: 60px;
}

.footer-section h5 {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
    line-height: 1.2;
}

.footer-section p {
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 8px;
    color: #6c757d;
}

.footer-section a {
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
}

.footer-section a:hover {
    color: #333;
}

.nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-links li {
    margin-bottom: 12px;
}

.nav-links a {
    font-size: 14px;
    color: #6c757d;
}

.social-icons {
    display: flex;
    gap: 15px;
    margin-bottom: 25px;
}

.social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    background-color: #333;
    color: white;
    border-radius: 3px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.social-icons a:hover {
    background-color: #555;
}

.contact-info {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
    font-size: 14px;
}

.contact-info i {
    margin-right: 8px;
    width: 16px;
}

.footer-bottom {
    border-top: 1px solid #dee2e6;
    padding-top: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-bottom-left {
    font-size: 14px;
    color: #6c757d;
}

.footer-bottom-right {
    display: flex;
    gap: 30px;
}

.footer-bottom-right a {
    font-size: 14px;
    color: #6c757d;
    text-decoration: none;
    font-weight: 500;
}

@media (max-width: 768px) {
    .footer-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .footer-bottom {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .footer-bottom-right {
        flex-direction: column;
        gap: 15px;
    }
}
</style>

<footer class="footer-container">
    <div class="footer-content">
        <div class="footer-grid">
            <!-- Company Info -->
            <div class="footer-section">
                <h5>PT Putrindo Empat Lestari</h5>
                <p> Jalan	Cipete	VIII/94B,	Cipete,	South	Jakarta</p>
                <p>Phone/WA: <a href="tel:+6281339675806">+62 813 3967 5806</a></p>
                <p>E-mail: <a href="mailto:info@jamutraditions.com">info@jamutraditions.com</a></p>
            </div>
            
            <!-- Navigation Links 1 -->
            <div class="footer-section">
                <h5>&nbsp;</h5>
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="https://jamutraditions.com/spa-school/" target="_blank">Jamu Spa School</a></li>
                    <li><a href="https://jamutraditions.com/jamu-traditions-spa-wellness/">Spa & Wellness</a></li>
                    <li><a href="https://jamutraditions.com/jamu-traditions-spa-lab/">Spa Lab</a></li>
                </ul>
            </div>
            
            <!-- Navigation Links 2 -->
            <div class="footer-section">
                <h5>&nbsp;</h5>
                <ul class="nav-links">
                    <li><a href="https://jamutraditions.com/spa-consultancy/" target="_blank">Spa Consultancy</a></li>
                    <li><a href="https://jamutraditions.com/school-endorsed-center/" target="_blank">School Endorsed Center</a></li>
                    <li><a href="https://jamutraditions.com/scholarship-program/" target="_blank">Scholarship Program</a></li>
                    <li><a href="https://jamutraditions.com/contact-us/" target="_blank">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Social Media & Contact -->
            <div class="footer-section">
                <div class="social-icons">
                    <a href="https://x.com/jamuinfo" target="_blank" class="btn btn-sm btn-primary">
                        <i class="fa fa-twitter"></i>
                    </a>&nbsp;
                    <a href="https://www.instagram.com/jamubodytreatments/" target="_blank" class="btn btn-sm btn-primary">
                        <i class="fa fa-instagram"></i>
                    </a>&nbsp;
                    <a href="https://www.facebook.com/jamubodytreatments/" target="_blank" class="btn btn-sm btn-primary">
                    <i class="fa fa-facebook"></i>
                    </a>&nbsp;
                </div>
                <div class="contact-info">
                    <i class="fa fa-whatsapp"></i>
                    <a href="https://wa.me/6281339675806">+62 813 3967 5806</a>
                </div>
                
                <div class="contact-info">
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@jamutraditions.com">info@jamutraditions.com</a>
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                JAMUTRADITIONS © (2025) ALL RIGHTS RESERVED
            </div>
            <div class="footer-bottom-right">
                <!-- <a href="#">PRIVACY POLICY</a>
                <a href="#">TERMS OF USE</a>
                <a href="#">PRESS</a>-->
            </div>
        </div>
    </div>
</footer>