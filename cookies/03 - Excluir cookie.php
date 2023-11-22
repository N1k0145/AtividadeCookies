<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exclusão de um cookie</title>
</head>
<body>
    <h1>Exclusão de um cookie</h1>

    <?php
    setcookie("nome", "Maria Pia", time() - 3600);
    ?>

    <p>O cookie foi excluido.</p>
</body>
</html>