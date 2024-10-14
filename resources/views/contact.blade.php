<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/welcome">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
            </ul>
        </div>
    </nav>

    <!-- Contact Form Section -->
    <div class="container">
        <h1 class="text-center mt-5">Get in Touch with Us</h1>
        <form class="mt-4">
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Your full name">
            </div>
            <div class="form-group">
                <label for="emailAddress">Email Address</label>
                <input type="email" class="form-control" id="emailAddress" placeholder="Your email address">
            </div>
            <div class="form-group">
                <label for="userMessage">Your Message</label>
                <textarea class="form-control" id="userMessage" rows="4" placeholder="Type your message here"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send Message</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-dark text-center mt-5 p-4">
        <p>&copy; 2024 Laravel Hub. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>