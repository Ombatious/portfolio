<?php include 'inc/header.php'; ?>

<main>
    <section class="contact-intro">
        <h1>Get In Touch</h1>
        <p>I'm available for internship opportunities, freelance projects, and full-time positions. Feel free to reach out through any of the following channels.</p>
    </section>

    <div class="contact-container">
        <!-- Contact Form -->
        <section class="contact-form">
            <h2>Send Me a Message</h2>
            <form action="inc/send-mail.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>

        <!-- Contact Info -->
        <section class="contact-info">
            <h2>Contact Information</h2>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h3>Location</h3>
                    <p>Mombasa, Kenya</p>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <h3>Email</h3>
                    <p>jacob.gitenya@example.com</p>
                </div>
            </div>
            <div class="info-item">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <h3>Phone</h3>
                    <p>+254 7XX XXX XXX</p>
                </div>
            </div>

            <!-- WhatsApp Chat -->
            <div class="whatsapp-chat">
                <a href="https://wa.me/2547XXXXXXXX" class="btn btn-success">
                    <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                </a>
            </div>

            <!-- Social Media Links -->
            <div class="social-links">
                <a href="https://linkedin.com/in/jacob-ombati-gitenya" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/jacobgitenya" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://twitter.com/jacobgitenya" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>

            <!-- Google Maps -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.818774238519!2d39.66307231476142!3d-4.043511996796593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184012e78ec02c3d%3A0x16a7f9f4b4f0b1e0!2sMombasa%2C%20Kenya!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </div>
</main>

<?php include 'inc/footer.php'; ?>