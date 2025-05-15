<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jacob Ombati Gitenya | ICT Specialist</title>
    <meta name="description" content="Portfolio of Jacob Ombati Gitenya, TVET CDACC-certified ICT professional with Diploma Level 6 qualification">
    <meta name="keywords" content="ICT, Kenya, Mombasa, TVET CDACC, Web Development, Programming, CBET">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Share+Tech+Mono&display=swap" rel="stylesheet">
    
    <!-- LinkedIn Badge -->
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <!-- Dark Mode CSS (will be toggled by JS) -->
    <link rel="stylesheet" href="assets/css/dark-mode.css" id="dark-mode-style" disabled>
</head>
<body>
    <!-- Dark Mode Toggle -->
    <div class="dark-mode-toggle">
        <input type="checkbox" id="dark-mode-switch">
        <label for="dark-mode-switch">
            <i class="fas fa-sun"></i>
            <i class="fas fa-moon"></i>
            <span class="ball"></span>
        </label>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo">
                <span class="tech-text">JOG</span> Portfolio
            </a>
            
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="contact.php" class="btn btn-outline">Contact</a></li>
                
                <!-- Language Selector (for future multilingual support) -->
                <li class="language-selector">
                    <select id="language-select">
                        <option value="en">EN</option>
                        <option value="sw">SW</option>
                    </select>
                </li>
            </ul>
        </div>
    </nav>