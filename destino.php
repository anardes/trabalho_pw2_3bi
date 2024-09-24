<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ARRAYS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
   <div class="container px-6 justify-content-center align-items-center border p-3 ">
    <h1 class="text-primary">Arrays</h1>

    <?php
    echo "<hr><h2>Fill</h2>";
    $fillAr = array_fill(0, 3, "Ágata");
    echo "O array é: " . implode(", ", $fillAr). "<hr><br><br>";
    //criei um fill que repete três vezes o nome Ágata

    echo "<h2>Pop</h2>";
    $alunos = array("Maria", "Ana Carla", "Matteo", "Kaique", "Willgner", "Levi", "Hellen", "Felícia");
    $ultimo = array_pop($alunos);
    //criei um array alunos e retirei o último

    echo "O aluno retirado foi:  $ultimo \n" . "<br> O array restante é: " . implode(", ", $alunos) . "<hr><br><br>";
    //mostrei quem foi retirado e quais sobraram

    echo "<h2>Shift</h2>";
    $alunos2 = array("Maria", "Ana Carla", "Matteo", "Kaique", "Willgner", "Levi", "Hellen", "Felícia");
    $primeiro = array_shift($alunos2);
    //retirei o primeiro aluno 

    echo "O primeiro aluno era: $primeiro\n <br>" . "O array restante é: " . implode(", ", $alunos2) . "<hr><br><br>";
    //mostrei quem foi retirado e quem sobrou
    

    echo "<h2>Slice</h2>";
    $alunos3 = array("Maria", "Ana Carla", "Matteo", "Kaique", "Willgner", "Levi", "Hellen", "Felícia");
    $cortado = array_slice($alunos3, 3, 4, 5);
    //tirei do array alunos3 as posições 3, 4 e 5

    echo "Os alunos retirados foram: \n" . implode(", ", $cortado) . "<hr><br><br>";
    //mostrei os alunos retirados

    echo "<h2>Sort</h2>";
    sort($alunos); 
    //usei o sort para organizar a array em ordem alfabética
    echo "O array em ordem ficou: " . implode(", ", $alunos) . "<hr><br><br>";

    echo "<img src='./img.jfif'/>";
    echo "<p>&copy; 2024 by Ana Luisa Nardes Motta.</p>";
    ?>
    
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
