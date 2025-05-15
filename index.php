<?php include 'inc/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Jacob Ombati Gitenya</h1>
            <h2>ICT Specialist | TVET CDACC Certified</h2>
            <p>Diploma Level 6 in Information Communication Technology</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">View Projects</a>
                <a href="contact.php" class="btn btn-secondary">Contact Me</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="assets/images/profile-placeholder.jpg" alt="Jacob Ombati Gitenya">
        </div>
    </section>

    <!-- Professional Introduction -->
    <section class="professional-intro">
        <div class="container">
            <h2 class="section-title">Professional Profile</h2>
            <div class="intro-content">
                <p>As a TVET CDACC-certified ICT professional with a Diploma Level 6 qualification from Kenya Coast National Polytechnic, I bring comprehensive expertise in software development, network administration, and database management.</p>
                
                <p>My technical competencies span:</p>
                <ul class="competency-list">
                    <li><strong>Web Development:</strong> Building responsive, accessible websites using HTML5, CSS3, JavaScript, and PHP</li>
                    <li><strong>Database Systems:</strong> Designing and implementing MySQL databases with optimized queries</li>
                    <li><strong>Software Engineering:</strong> Developing applications in Java, Python, and C/C++</li>
                    <li><strong>Networking:</strong> Configuring and troubleshooting computer networks</li>
                    <li><strong>System Administration:</strong> Software installation, configuration, and maintenance</li>
                </ul>
                
                <p>What sets me apart:</p>
                <div class="value-propositions">
                    <div class="value-card">
                        <i class="fas fa-award"></i>
                        <h3>CBET-Accredited</h3>
                        <p>Formally certified in competency-based education and training modules</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Problem Solver</h3>
                        <p>Analytical approach to developing technical solutions</p>
                    </div>
                    <div class="value-card">
                        <i class="fas fa-project-diagram"></i>
                        <h3>Project Experience</h3>
                        <p>Hands-on experience building real-world applications</p>
                    </div>
                </div>
                
                <div class="career-goal">
                    <p>I'm currently seeking opportunities to apply my technical skills in an internship or junior developer role, with particular interest in:</p>
                    <ul>
                        <li>Web application development</li>
                        <li>Enterprise software solutions</li>
                        <li>ICT infrastructure support</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Links -->
    <section class="quick-links">
        <div class="link-card">
            <i class="fas fa-graduation-cap"></i>
            <h3>Education</h3>
            <p>My academic journey from Oceania Junior School to Kenya Coast National Polytechnic</p>
            <a href="about.php#education" class="btn btn-outline">Learn More</a>
        </div>
        <div class="link-card">
            <i class="fas fa-code"></i>
            <h3>Skills</h3>
            <p>Programming languages and CBET-accredited units I've mastered</p>
            <a href="skills.php" class="btn btn-outline">View Skills</a>
        </div>
        <div class="link-card">
            <i class="fas fa-project-diagram"></i>
            <h3>Projects</h3>
            <p>Explore my completed projects with live demos</p>
            <a href="#projects" class="btn btn-outline">See Projects</a>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="featured-projects">
        <h2>Featured Projects</h2>
        <div class="project-grid">
            <!-- Project 1 -->
            <div class="project-card">
                <img src="assets/images/projects/project1.jpg" alt="Project 1">
                <div class="project-info">
                    <h3>E-Commerce Website</h3>
                    <p>Built with HTML, CSS, JavaScript, PHP and MySQL</p>
                    <div class="project-links">
                        <a href="projects/project1.html" class="btn btn-small">Details</a>
                        <a href="#" class="btn btn-small btn-outline">Live Demo</a>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="project-card">
                <img src="assets/images/projects/project2.jpg" alt="Project 2">
                <div class="project-info">
                    <h3>Student Management System</h3>
                    <p>Java application with MySQL database</p>
                    <div class="project-links">
                        <a href="projects/project2.html" class="btn btn-small">Details</a>
                        <a href="#" class="btn btn-small btn-outline">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="projects/" class="btn btn-primary">View All Projects</a>
        </div>
    </section>

    <!-- Social Proof -->
    <section class="social-proof">
        <h2>Connect With Me</h2>
        <div class="social-widgets">
            <!-- LinkedIn Badge -->
            <div class="linkedin-badge">
                <div class="LI-profile-badge" data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="dark" data-vanity="jacob-ombati-gitenya">
                    <a class="LI-simple-link" href='https://ke.linkedin.com/in/jacob-ombati-gitenya?trk=profile-badge'>Jacob Ombati Gitenya</a>
                </div>
            </div>
            <!-- GitHub Stats -->
            <div class="github-stats">
                <img src="https://github-readme-stats.vercel.app/api?username=jacobgitenya&show_icons=true&theme=dark" alt="GitHub Stats">
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>