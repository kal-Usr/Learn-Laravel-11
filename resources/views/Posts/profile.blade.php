<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User  Profile -sdfsafa</title>
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
            <!-- Profile Section -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="" alt="Profile Picture" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                        <h2 class="card-title">olkdflask</h2>
                        <p class="card-text">dfasdfadf</p>
                        <ul class="list-unstyled">
                            <li><strong>Email:</strong> fsdfas</li>
                            <li><strong>Location:</strong> fdsfaf</li>
                            <li><strong>Joined:</strong> fdfasddfs</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Recent Posts Section -->
            <div class="col-lg-8">
                <h1 class="mb-4">fdsfasf</h1>
                <!-- Loop through posts (dynamic data from backend) -->
                
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">fdsfaf/h2>
                        <p class="card-text">dfsfa</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on fdsfas
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