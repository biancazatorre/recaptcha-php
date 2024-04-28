<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Autenticação com reCAPTCHA</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="process.php">
        <input type="text" name="username" placeholder="Usuário" required><br>
        <input type="password" name="password" placeholder="Senha" required><br>
        <div class="g-recaptcha" data-sitekey="6LcTI8kpAAAAAFrIGx8YRC-vbW7_z2CXv42ViMlO"></div><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>