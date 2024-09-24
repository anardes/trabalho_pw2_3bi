<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center display-6">Login</h1>
   <div class="container px-6 justify-content-center align-items-center">
        <form method="post">
            <div class="border px-4 ">
                <div class="my-5">
                    <label class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>

                <div class="my-5">
                    <label class="form-label">Senha:</label>
                    <input type="password" class="form-control" name="senha" id="password" required>
                </div>

                <div class="flex-column align-items-center">
                    <button class="btn btn-success" type="submit">Login</button>
                </div>
            </div>
        </form>
    </div>
     
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $email_correto = "123@email.com";
        $senha_correta_md5 = md5("senha123");

        $senha_usuario_md5 = md5($senha);

        if ($email === $email_correto && $senha_usuario_md5 === $senha_correta_md5) {
            header('Location: destino.php');
            exit; 
        } 
        else {
            $error = "E-mail ou senha inválidos.";
            echo "<p class='text-danger align-items-center'>$error</p>";
        }
    }
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>