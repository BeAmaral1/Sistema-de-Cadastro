<!DOCTYPE html>
<html>
<head>
    <title>Modelo</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('lojinha.jpg') no-repeat;
            background-size: cover;
            background-position-y: 25%;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            width: 400px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .login-form {
            text-align: center;
        }

        .login-form h1 {
            margin-bottom: 20px;
            font-size: 40px;
            color: #333;
        }

        .input-box {
            margin-bottom: 20px;
            position: relative;
        }

        .input-box input {
            width: 90%; /* Alterado para 90% */
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .input-box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 10px;
            color: #777;
        }

        .btn {
    padding: 15px 30px; /* Aumenta o padding para aumentar o tamanho do botão */
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    text-decoration: none;
    width: 100%; /* Largura total */
    max-width: 200px; /* Largura máxima */
    margin: 0 auto; /* Centraliza o botão */
    display: block; /* Transforma em bloco para ocupar a largura total */
}

.btn:hover {
    background-color: #45a049;
}

        .register-link {
            margin-top: 10px;
            font-size: 14.5px;
            text-align:center ;
            margin: top 20px 0 15px;
            color: #333;
        }

        .register-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="pages/home.php" method="POST" class="login-form">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="usu" placeholder="Usuário">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="pas" placeholder="Senha">
                <i class='bx bxs-lock'></i>
            </div>
            <div class="remember-forgot">
    <label><input type="checkbox" style="margin-right: 5px;">Lembrar-me</label><br>
    <a href="#" style="text-decoration: none; color: #4CAF50;">Esqueceu a senha?</a>
</div>
            <button type="submit" class="btn">Confirmar</button>
            <div class="register-link">
    <p>Faça o seu cadastro <a href="#" style="text-decoration: none; color: #4CAF50;">Registrar-se</a></p>
</div>
        </form>
    </div>
</body>
</html>
