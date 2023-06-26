<div id="particles-js"></div>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
<link href="../css/particles.css" rel="stylesheet">
<script src="http://localhost:8080/Bombeiros/js/particles.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../css/stylelogin.css" rel="stylesheet">
</head>
<body>
        
    <div class="wrapper">
            <div class="form-box login">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input class="login-input" type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="login-input" type="password" required name="password">
                        <label>Password</label>
                    </div>
                    <button type="submit" class="btn" value="Login">Login</button>
                    <div class="login-register">
                        <p>Não tens conta?<a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>


            <div class="form-box register">
                <h2>Registar</h2>
                <form action="connect.php" method="post">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input class="login-input" type="text" required id="name" name="name">
                        <label>Nome</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input class="login-input" type="email" required id="email" name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input class="login-input" type="password" required id="password" name="password">
                        <label>Password</label>
                    </div>
                    <button type="submit" class="btn">Registar</button>
                    <div class="login-register">
                        <p>Já tens conta?<a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <script src="../js/scriptlogin.js"></script>
</body>
</html>