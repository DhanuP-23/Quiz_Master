<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Quiz Master</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #fff7e6, #ffe4b3);
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 50px 20px;
        }
        .about-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .about-header h2 {
            font-size: 2.8rem;
            color: #e67e22;
        }
        .about-header p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }
        .about-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .about-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            transition: transform 0.3s;
        }
        .about-card:hover {
            transform: scale(1.05);
        }
        .about-card h3 {
            color: #d35400;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        .about-card p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }
        .about-footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #aaa;
        }
        .about-footer a {
            color: #e67e22;
            text-decoration: none;
            font-weight: bold;
        }
        .about-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- About Header -->
        <div class="about-header">
            <h2><b>About Us</b></h2>
            <p>Welcome to the Quiz Master, where education meets technology.</p>
            <p><b>Real-Time Assessment Tracking:</b><br>
            Track student progress as it happens, ensuring accurate monitoring throughout the exam.</p>
            <p><b>Instant Result Generation:</b><br>
            Students get their results immediately after completing the exam, helping them stay updated on their performance.</p>
            <p><b>Automatic Grading:</b><br>
            Save time and effort with automatic grading for objective-based questions, providing instant feedback.</p>
            <p><b>User-Friendly Interface</b><br>
            Designed with both students and educators in mind, our intuitive platform ensures smooth navigation and effortless exam management.</p>
        </div>

        <!-- About Content -->
        <div class="about-section">
            <!-- Mission Card -->
            <div class="about-card">
                <h3><b>Our Mission</b></h3>
                <p>
                    Our mission is to make examinations seamless, accessible, and secure for students and institutions. 
                    We strive to enhance the educational experience through technology and innovative solutions.
                </p>
            </div>

            <!-- Vision Card -->
            <div class="about-card">
                <h3><b>Our Vision</b></h3>
                <p>
                    Our vision is to become the most trusted platform for digital examinations, providing educators and students 
                    with cutting-edge tools that enable efficient and secure assessments.
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="about-footer">
            <p>&copy; 2025 Quiz Master | All Rights Reserved</p>
            <a href="index.php">Back to Home Page</a>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
