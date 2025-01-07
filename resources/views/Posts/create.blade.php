<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
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

    <!-- Add Blog Form Section -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="mb-4">Add a New Blog Post</h1>
                <form method="POST" action="{{ url('posts.store') }}">
                    @csrf
                    <!-- Blog Title -->
                    <div class="mb-3">
                        <label for="blogTitle" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="blogTitle" name="title" placeholder="Enter blog title" required>
                    </div>
                    <!-- Author Name -->
                    <div class="mb-3">
                        <label for="authorName" class="form-label">Author Name</label>
                        <input type="text" class="form-control" id="authorName" name="author" placeholder="Enter your name" required>
                    </div>
                    <!-- Blog Image URL -->
                    <!-- <div class="mb-3">
                        <label for="blogImage" class="form-label">Blog Image URL</label>
                        <input type="url" class="form-control" id="blogImage" name="blogImage" placeholder="Enter image URL (optional)">
                    </div> -->
                    <!-- Blog Content -->
                    <div class="mb-3">
                        <label for="blogContent" class="form-label">Blog Content</label>
                        <textarea class="form-control" id="blogContent" name="content" rows="10" placeholder="Write your blog content here..." required></textarea>
                    </div>
                    <!-- Blog Tags -->
                    <div class="mb-3">
                        <label for="blogTags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="blogTags" name="tags" placeholder="Enter tags (comma-separated)">
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit Blog</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2023 My Blog. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>