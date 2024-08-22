<?php include '../includes/header.php'; ?>
<h2>Login</h2>
<form action="login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password">
    <button type="submit">Entrar</button>
</form>
<?php include '../includes/footer.php'; ?>
