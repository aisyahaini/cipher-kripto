<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Gambar Latar Belakang</title>
    <style>
        .bg-image {
            background-image: url('https://www.example.com/images/bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            position: relative;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        nav ul {
            display: flex;
            justify-content: space-around;
            list-style: none;
            padding: 0;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            padding: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            z-index: 2;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container form input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="bg-image">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>

        <div class="form-container">
            <form>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>