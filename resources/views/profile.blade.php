<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <style>
        * {
            font-family: "Ubuntu", system-ui;
            font-weight: 500;
            font-style: normal;
        }
        body {
            background-color: #E2F1E7;
            padding: 0;
            margin: 0;
        } 
        
        .navbar {
            background-color: #02293b;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar .navcon, .dashboard-link {
            color: white;
            font-size: 21px;
            display: flex;
            align-items: center;
            margin-right: 30px;
            text-decoration: none;
        }
        .navbar .navcon p {
            margin-left: 30px;
        }
        
        .dashboard-link i, .navbar .navcon i {
            margin-right: 18px;
            font-size: 26px;
        }
        
        .profile-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 5px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .profile-icon {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #02293b;
            color: white;
            font-size: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px auto;
        }
        
        .profile-details {
            text-align: center;
            margin-top: 20px;
        }
        
        .profile-details h2 {
            font-size: 26px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .profile-details p {
            font-size: 20px;
            color: #555;
            margin: 5px 0;
        }

        .social-links {
            text-align: center;
            margin-top: 15px;
        }

        .social-links a {
            margin: 0 8px;
            color: #555;
            font-size: 24px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #007bff;
        }

        .profile-box {
            margin-top: 20px;
            padding: 20px;
            border-top: 1px solid #ddd;
        }

        .profile-box h3 {
            color: #333;
            font-size: 20px;
        }
        
        .profile-container input {
            width: calc(100% - 24px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
        }
        
        .profile-container button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .profile-container button:hover {
            background-color: #0056b3;
        }

        .profile-container button i {
            margin-right: 8px;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        
        .stat-box {
            text-align: center;
            padding: 20px;
            width: 45%;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .stat-box h4 {
            font-size: 18px;
            color: #333;
            margin-bottom: 5px;
        }
        
        .stat-box p {
            font-size: 24px;
            color: #007bff;
        }
        .alert-success {
        background-color: #d4edda;  /* Light green background */
        color: #155724;  /* Dark green text */
        padding: 15px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        margin-bottom: 15px;
    }

    .alert-success i {
        margin-right: 10px;
        color: #28a745; /* Green icon color */
        font-size: 18px;
    }

    </style>
</head>
<body>
    <div class="navbar">
        <div class="navcon">
            <p>Profil</p>
        </div>
        <a href="/dashboard" class="dashboard-link">
            <i class="fas fa-home"></i>
            <span>/ Profil</span>
        </a>
    </div>
    
    <div class="profile-container">
        <div class="profile-icon">
            {{ strtoupper(substr(session('user_name', 'User Name'), 0, 1)) }}
        </div>
        <div class="profile-details">
            <h2>{{ $user->name }}</h2>
            <p>{{ $user->email }}</p>
        </div>

        <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <div class="stats-container">
            <div class="stat-box">
                <h4>Completed Tasks</h4>
                <p>75%</p>
            </div>
            <div class="stat-box">
                <h4>Profile Completeness</h4>
                <p>85%</p>
            </div>
        </div>

        <div class="profile-box">
            <h3>Update Password</h3>
            @if (session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> <!-- Success icon -->
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif        
            <form action="{{ route('profile.updatePassword') }}" method="POST">
                @csrf
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                <button type="submit">
                    <i class="fas fa-lock"></i> Update Password
                </button>
            </form>        
        </div> <!-- End of profile-box -->
    </div> <!-- End of profile-container -->
</body>
</html>
