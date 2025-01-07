<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Blog Detail Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Title -->
                <h1 class="mb-4">Blog Post Title</h1>
                <!-- Blog Meta Information -->
                <p class="text-muted">Posted on January 1, 2023 by <a href="#">Author Name</a></p>
                <!-- Blog Image -->
                <img src="https://via.placeholder.com/800x400" class="img-fluid mb-4" alt="Blog Image">
                <!-- Blog Content -->
                <p class="lead">This is the introduction paragraph of the blog post. It provides a brief overview of the content.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa.</p>
                <!-- Blog Tags -->
                <div class="mt-4">
                    <span class="badge bg-secondary">Tag 1</span>
                    <span class="badge bg-secondary">Tag 2</span>
                    <span class="badge bg-secondary">Tag 3</span>
                </div>
            </div>
            <!-- Sidebar Section -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        About the Author
                    </div>
                    <div class="card-body">
                        <p>Author Name is a professional writer with expertise in web development and design. Follow them on <a href="#">Twitter</a> or <a href="#">LinkedIn</a>.</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        Recent Posts
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><a href="#">Recent Post 1</a></li>
                            <li><a href="#">Recent Post 2</a></li>
                            <li><a href="#">Recent Post 3</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-3">
        <div class="container">
            <p>&copy; 2023 My Blog. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>