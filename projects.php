<?php include 'inc/header.php'; ?>

<main>
    <section class="projects-intro">
        <h1>My Projects</h1>
        <p>Here are some of my completed projects showcasing my skills in web development, software engineering, and database management.</p>
    </section>

    <!-- Projects Filter -->
    <section class="projects-filter">
        <div class="filter-options">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="web">Web Development</button>
            <button class="filter-btn" data-filter="software">Software</button>
            <button class="filter-btn" data-filter="database">Database</button>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="projects-grid">
        <?php
        // Database connection
        require_once 'inc/db.php';
        
        try {
            $stmt = $db->query("SELECT * FROM projects ORDER BY is_featured DESC, created_at DESC");
            $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if ($projects) {
                foreach ($projects as $project) {
                    $tech_classes = str_replace(',', ' ', $project['technologies']);
                    $tech_classes = strtolower(preg_replace('/\s+/', '-', $tech_classes));
                    ?>
                    <div class="project-card <?php echo $tech_classes; ?>" data-category="<?php echo strtolower(explode(',', $project['technologies'])[0]); ?>">
                        <div class="project-image">
                            <img src="<?php echo $project['image_url'] ?: 'assets/images/projects/default.jpg'; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                            <?php if ($project['is_featured']): ?>
                                <span class="featured-badge">Featured</span>
                            <?php endif; ?>
                        </div>
                        <div class="project-info">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                            <div class="project-technologies">
                                <?php 
                                $technologies = explode(',', $project['technologies']);
                                foreach ($technologies as $tech): ?>
                                    <span class="tech-tag"><?php echo trim($tech); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <?php if ($project['project_url']): ?>
                                    <a href="<?php echo htmlspecialchars($project['project_url']); ?>" class="btn btn-small" target="_blank">Live Demo</a>
                                <?php endif; ?>
                                <?php if ($project['github_url']): ?>
                                    <a href="<?php echo htmlspecialchars($project['github_url']); ?>" class="btn btn-small btn-outline" target="_blank">GitHub</a>
                                <?php endif; ?>
                                <a href="project-detail.php?id=<?php echo $project['id']; ?>" class="btn btn-small">Details</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<p class="no-projects">No projects found. Check back soon!</p>';
            }
        } catch (PDOException $e) {
            echo '<p class="error">Error loading projects: ' . htmlspecialchars($e->getMessage()) . '</p>';
        }
        ?>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <h2>Have a project in mind?</h2>
        <p>I'm available for freelance work and collaborations. Let's discuss how I can help bring your ideas to life.</p>
        <a href="contact.php" class="btn btn-primary">Get In Touch</a>
    </section>
</main>

<?php include 'inc/footer.php'; ?>