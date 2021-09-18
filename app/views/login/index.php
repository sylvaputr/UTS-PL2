<?php 
error_reporting(error_reporting() & ~E_NOTICE)
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Beranda</title>
</head>

<body>
    <div class="row" align="center">

        <h1>Login</h1>

        <form action="<?php echo base64_encode('Login/login'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <label>Username</label>
                <input type="text" name="username" id="username" required><br>
            </div><br>
            
            <div class="row">
                <label>Password</label>
                <input type="password" name="password" id="password" required><br>
            </div><br>

            <div class="row">
                <input type="submit" value="Login" class="btn btn-success mt-2">
            </div>
        </form>
    </div>
</body>
</html>