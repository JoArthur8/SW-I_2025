<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form action="processa_login.php" method="POST">
            <div class="mb-3"> 
                <input type="text" class="form-control" name="email" placeholder="Email:">
            </div>

            <div class="mb-3"> 
                <input type="password" class="form-control" name="senha" placeholder="Senha:">
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
        </form>
    </div>
</body>
</html>