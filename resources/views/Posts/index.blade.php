<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - User Posts</title>
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

    <!-- Main Content Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Posts Section -->
            <div class="col-lg-8">
                <a class="btn btn-success mb-2" href="{{ url('posts/create') }}">Tambah</a>
                <h1 class="mb-4">User  Posts</h1>
                <!-- Loop through posts (dynamic data from backend) -->
                @foreach($datas as $data)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">{{ $data['title']}}</h2>
                        <p class="card-text">{{$data['content']}}</p>
                        <a href="" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{ $data['date'] }} by <a href="#">{{ $data['author'] }}</a>
                    </div>
                </div>
                @endforeach
                <!-- Add more posts dynamically here -->
            </div>

            <!-- Sidebar Section -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">
                        About the Blog
                    </div>
                    <div class="card-body">
                        <p>Welcome to our blog! Here, users share their thoughts, ideas, and experiences. Join the community and start posting today!</p>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        Recent Posts
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><a href="#">Post Title 1</a></li>
                            <li><a href="#">Post Title 2</a></li>
                            <li><a href="#">Post Title 3</a></li>
                        </ul>
                    </div>
                </div>
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