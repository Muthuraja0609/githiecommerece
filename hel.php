<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Background styling */
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }

        .background {
            background-image: url('https://source.unsplash.com/1600x900/?nature,water'); /* Add a background image */
            background-size: cover;
            background-position: center;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        /* Glass container */
        .glass-container {
            background: rgba(255, 255, 255, 0.1); /* Semi-transparent background */
            backdrop-filter: blur(10px); /* Blur effect */
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2); 
            /* Light border */
        }

        /* Glass card */
        .glass-card {
            background: rgba(255, 255, 255, 0.2); /* Semi-transparent card background */
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }

        /* Form styling */
        .glass-card h2 {
            color: #fff;
            margin-bottom: 20px;
            color:black;
        }

        .glass-card .form-label {
            color: #000; /* Set form label color to black */
            font-weight: bold; /* Make the label stand out */
        }

        .glass-card .form-control {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent input background */
            border: none;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .glass-card .form-control:focus {
            background: rgba(255, 255, 255, 0.9); /* Slightly more opaque on focus */
            box-shadow: none;
        }

        .glass-card .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
        }

        .glass-card .btn-primary:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="background">
        <div class="glass-container">
            <div class="glass-card">
                <h2 class="text-center mb-4">Admin Login</h2>
                <form id="loginForm" onsubmit="return validateForm(event)">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                        <div id="usernameError" class="error"></div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                        <div id="passwordError" class="error"></div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    <div id="loginError" class="error mt-3"></div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function validateForm(event) {
            // Prevent form submission for validation
            event.preventDefault();

            // Clear previous error messages
            document.getElementById('usernameError').innerText = '';
            document.getElementById('passwordError').innerText = '';
            document.getElementById('loginError').innerText = '';

            // Get form values
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            // Initialize flag for validation
            var isValid = true;

            // Validate username and password
            if (username === '') {
                document.getElementById('usernameError').innerText = 'Username is required';
                isValid = false;
            } else if (username !== 'admin') {
                document.getElementById('usernameError').innerText = 'Invalid Username';
                isValid = false;
            }

            if (password === '') {
                document.getElementById('passwordError').innerText = 'Password is required';
                isValid = false;
            } else if (password !== 'admin123') {
                document.getElementById('passwordError').innerText = 'Invalid Password';
                isValid = false;
            }

            // If validation is successful, login
            if (isValid) {
                window.location.href = "dash.php";
                // In a real-world scenario, you'd typically redirect or perform an AJAX login request.
            } else {
                document.getElementById('loginError').innerText = 'Invalid username or password.';
            }

            return isValid;
        }
    </script>
</body>
</html>
