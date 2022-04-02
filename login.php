<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginHeader">
        <h1>Login</h1>
    </div>
    
    <div class="loginForm">
        <form action="prosesLogin.php" method="post">
            <div class="loginUsername">
                Username
                <input type="text" name="usernameLogin" required>
            </div>

            <div class="loginPassword">
                Password
                <input type="password" name="passwordLogin" required>
            </div>

            <?php
                session_start();

                if(isset($_SESSION['loginMsg'])){
                    echo $_SESSION['loginMsg'];
                    unset($_SESSION['loginMsg']);
                }else echo "";
                
            ?>

            <div class="buttonMenu">
                <div class="loginBtn">
                    <input type="submit" value="Login" name="Login">
                </div>

                <div class="kembaliBtn">
                    <a href="welcome.php">
                        Kembali
                        <!-- <button>Kembali</button> -->
                    </a>
                </div>
            </div>
        </form>
    </div>
    
    

</body>
</html>