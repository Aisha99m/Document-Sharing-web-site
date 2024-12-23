<?php
session_start();
// Check if user is logged in
if (isset($_SESSION['login_id'])) {
    header('Location: index.php'); // Redirect to the main page if logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Sharing Platform</title>
    <link rel="stylesheet" href="assets\dist\css\styleland.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <div class="logo">DocShare</div>
            <ul>
                <li><a href="#features">Features</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php" class="btn-signup">Sign Up</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Share & Collaborate Securely</h1>
            <p>Upload, rate, and comment on documents with ease. Keep your files organized and accessible from anywhere.</p>
            <a href="login.php" class="btn-cta">Get Started</a>
        </div>
    </section>
    <!-- Features Section -->
    <section id="features">
        <h2>Features</h2>
        <div class="feature-box">
            <div>
                <h3>Secure Document Sharing</h3>
                <p>All your files are securely stored and protected, ensuring privacy and reliability when sharing documents with others.</p>
            </div>
            <div>
                <h3>Rating System</h3>
                <p>Rate documents and provide feedback to help others find the most valuable and relevant content quickly.</p>
            </div>
            <div>
                <h3>Comments & Discussions</h3>
                <p>Engage in conversations about documents by leaving comments and initiating discussions with others.</p>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>DocShare is a platform designed for secure document sharing, collaboration, and feedback. Our mission is to provide a user-friendly experience for managing, rating, and commenting on documents. Whether you’re sharing research, reports, or other types of documents, DocShare makes the process easy and efficient.</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 DocShare. All Rights Reserved. | <a href="terms.html">Terms of Service</a> | <a href="privacy.html">Privacy Policy</a></p>
    </footer>
</body>
</html>
