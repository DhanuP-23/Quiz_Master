<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Project Worlds || Feedback</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to bottom right, #fdf6e3, #ffe5b4);
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .feedback-container {
        width: 100%;
        max-width: 800px;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    .feedback-container h1 {
        font-size: 2.5rem;
        color: #ff6f00;
        text-align: center;
        margin-bottom: 20px;
        font-weight: 600;
    }
    .form-control {
        border: 2px solid #ffc107;
        border-radius: 8px;
        padding: 10px;
        transition: all 0.3s;
    }
    .form-control:focus {
        border-color: #ff6f00;
        box-shadow: 0 0 10px rgba(255, 193, 7, 0.5);
    }
    .btn {
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        transition: all 0.3s;
    }
    .btn-primary {
        background-color: #ff6f00;
        border: none;
        color: #fff;
    }
    .btn-primary:hover {
        background-color: #e65c00;
        box-shadow: 0 5px 10px rgba(230, 92, 0, 0.3);
    }
    .btn-secondary {
        background-color: #fff;
        color: #ff6f00;
        border: 2px solid #ff6f00;
    }
    .btn-secondary:hover {
        background-color: #ff6f00;
        color: #fff;
        box-shadow: 0 5px 10px rgba(255, 111, 0, 0.3);
    }
    textarea {
        resize: none;
    }
</style>
<script>
function validateForm() {
    var name = document.forms["feedbackForm"]["name"].value;
    var subject = document.forms["feedbackForm"]["subject"].value;
    var email = document.forms["feedbackForm"]["email"].value;
    var nameRegex = /^[A-Za-z\s]+$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!nameRegex.test(name)) {
        alert("Name can only contain alphabets and spaces");
        return false;
    }

    if (!nameRegex.test(subject)) {
        alert("Subject can only contain alphabets and spaces");
        return false;
    }

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    return true;
}
</script>
</head>
<body>

<div class="feedback-container">
    <h1>We Value Your Feedback</h1>
    <form name="feedbackForm" role="form" method="post" action="feed.php?q=feedback.php" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" placeholder="Enter your name" class="form-control" type="text">
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input id="subject" name="subject" placeholder="Enter subject" class="form-control" type="text">
        </div>

        <div class="form-group">
            <label for="email">E-Mail Address</label>
            <input id="email" name="email" placeholder="Enter your email-id" class="form-control" type="email">
        </div>

        <div class="form-group">
            <label for="feedback">Feedback</label>
            <textarea rows="5" cols="8" id="feedback" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
        </div>

        <div class="form-group text-center">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
            <a href="index.php" class="btn btn-secondary">Back to Home Page</a>
        </div>
    </form>
</div>

</body>
</html>
