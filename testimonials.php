<?php include 'inc/header.php'; ?>

<main>
    <section class="testimonials-intro">
        <h1>Testimonials</h1>
        <p>What my teachers, colleagues, and clients say about my work and professional attitude.</p>
    </section>

    <!-- Testimonials Grid -->
    <section class="testimonials-grid">
        <div class="testimonial-card">
            <div class="testimonial-content">
                <div class="quote-icon">"</div>
                <p>Jacob demonstrated exceptional skills in our web development course. His final project was one of the most comprehensive e-commerce systems we've seen from a student.</p>
            </div>
            <div class="testimonial-author">
                <img src="assets/images/testimonials/teacher1.jpg" alt="Mr. Kamau" class="author-image">
                <div class="author-info">
                    <h4>Mr. Kamau</h4>
                    <p>ICT Lecturer, Kenya Coast National Polytechnic</p>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-content">
                <div class="quote-icon">"</div>
                <p>Working with Jacob on our group project was a pleasure. He took leadership in the database design and implementation, ensuring our system performed optimally.</p>
            </div>
            <div class="testimonial-author">
                <img src="assets/images/testimonials/student1.jpg" alt="Sarah M." class="author-image">
                <div class="author-info">
                    <h4>Sarah M.</h4>
                    <p>Fellow Student</p>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-content">
                <div class="quote-icon">"</div>
                <p>Jacob developed a custom inventory system for our small business. He was professional, met all deadlines, and provided excellent after-support.</p>
            </div>
            <div class="testimonial-author">
                <img src="assets/images/testimonials/client1.jpg" alt="Mr. Otieno" class="author-image">
                <div class="author-info">
                    <h4>Mr. Otieno</h4>
                    <p>Business Owner, Mombasa</p>
                </div>
            </div>
        </div>

        <div class="testimonial-card">
            <div class="testimonial-content">
                <div class="quote-icon">"</div>
                <p>His understanding of networking concepts during our practical sessions was impressive. Jacob would be an asset to any IT team.</p>
            </div>
            <div class="testimonial-author">
                <img src="assets/images/testimonials/teacher2.jpg" alt="Ms. Achieng" class="author-image">
                <div class="author-info">
                    <h4>Ms. Achieng</h4>
                    <p>Networks Instructor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Testimonial Form -->
    <section class="add-testimonial">
        <h2>Add Your Testimonial</h2>
        <p>If you've worked with me or know my professional capabilities, I'd appreciate your feedback.</p>
        
        <form action="inc/submit-testimonial.php" method="POST" class="testimonial-form">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="role">Your Role/Position</label>
                <input type="text" id="role" name="role" required>
            </div>
            <div class="form-group">
                <label for="testimonial">Your Testimonial</label>
                <textarea id="testimonial" name="testimonial" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Upload Photo (Optional)</label>
                <input type="file" id="photo" name="photo" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit Testimonial</button>
        </form>
    </section>
</main>

<?php include 'inc/footer.php'; ?>