<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Manipulação de um cookie</title>
</head>
<body>
    <h1>Manipulação de um cookie</h1>

    <?php
    setcookie("nome", "Maria Pia", time() + 3600);
    ?>

    <p>O valor do cookie foi alterado para "Maria Pia".</p>
</body>
</html>