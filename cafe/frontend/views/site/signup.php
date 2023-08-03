<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký thành viên</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            
        }

        .form-container {
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            display: flex;
            align-items: center;
        }

        .form-group label {
            flex: 0 0 20%;
            padding-right: 10px;
        }

        .form-group .form-control {
            flex: 1;
            border: 1px solid #ccc;
            padding: 8px;
        }

        .form-group .input-group-text {
            background-color: #fff;
            border: 1px solid #ccc;
            color: #777;
        }

        .submit-btn {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 style="color: #555; text-align: center;">Đăng ký thành viên</h1>
        <form>
            <div class="form-group">
                <label for="username"><i class="fas fa-user"></i> Username</label>
                <input type="text" id="username" name="username" class="form-control" autofocus>
            </div>
            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="fullname"><i class="fas fa-user"></i> Full Name</label>
                <input type="text" id="fullname" name="fullname" class="form-control">
            </div>
            <div class="form-group">
                <label for="address"><i class="fas fa-map-marker-alt"></i> Address</label>
                <input type="text" id="address" name="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone"><i class="fas fa-phone"></i> Phone</label>
                <input type="text" id="phone" name="phone" class="form-control">
            </div>
            <div class="submit-btn">
                <button type="submit" class="btn btn-primary">Đăng Ký</button>
            </div>
        </form>
    </div>
</body>
</html>
