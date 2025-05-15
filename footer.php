<footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>Jacob Ombati Gitenya</h3>
                    <p>TVET CDACC-certified ICT professional with Diploma Level 6 qualification. Specializing in web development, database management, and software installation.</p>
                    <div class="contact">
                        <span><i class="fas fa-phone"></i> +254 7XX XXX XXX</span>
                        <span><i class="fas fa-envelope"></i> jacob.gitenya@example.com</span>
                    </div>
                </div>
                
                <div class="footer-section links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="projects/">Projects</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section social">
                    <h3>Connect With Me</h3>
                    <div class="social-icons">
                        <a href="https://linkedin.com/in/jacob-ombati-gitenya" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com/jacobgitenya" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://twitter.com/jacobgitenya" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://wa.me/2547XXXXXXXX" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    
                    <!-- Newsletter Subscription -->
                    <div class="newsletter">
                        <h4>Stay Updated</h4>
                        <form action="inc/subscribe.php" method="POST">
                            <input type="email" name="email" placeholder="Your Email" required>
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date("Y"); ?> Jacob Ombati Gitenya. All Rights Reserved.</p>
                <p>TVET CDACC Certified ICT Professional</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- JavaScript Files -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/dark-mode.js"></script>
    <script src="assets/js/timeline.js"></script>
    
    <!-- Animation on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html>