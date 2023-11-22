<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Criação de um cookie</title>
</head>
<body>
    <h1>Criação de um cookie</h1>

    <?php
        setcookie("nome", "João Melão", time() + 3600);
    ?>
    
    <p> O cookie foi criado.</p>
</body>
</html>