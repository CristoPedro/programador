<?php include '../includes/header.php'; ?>
<h2>Registro</h2>
<form action="register.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password">
    <button type="submit">Registrar</button>
</form>
<?php include '../includes/footer.php'; ?>
