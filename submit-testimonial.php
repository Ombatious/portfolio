<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = sanitize($_POST['name']);
    $role = sanitize($_POST['role']);
    $testimonial = sanitize($_POST['testimonial']);
    
    // Handle file upload
    $photo_url = null;
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'assets/images/testimonials/';
        $file_name = time() . '_' . basename($_FILES['photo']['name']);
        $target_path = $upload_dir . $file_name;
        
        // Check if image file is actual image
        $check = getimagesize($_FILES['photo']['tmp_name']);
        if ($check !== false) {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
                $photo_url = $target_path;
            }
        }
    }
    
    // Insert into database
    try {
        $stmt = $db->prepare("INSERT INTO testimonials (name, role, testimonial, photo_url) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $role, $testimonial, $photo_url]);
        
        header('Location: ../testimonials.php?status=success');
        exit;
    } catch (PDOException $e) {
        header('Location: ../testimonials.php?status=error');
        exit;
    }
} else {
    header('Location: ../testimonials.php');
    exit;
}
?>