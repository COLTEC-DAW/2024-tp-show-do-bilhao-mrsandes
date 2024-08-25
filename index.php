<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php include 'data.php'; ?>
    <title>Show do Bilhão</title>
</head>

<body>
    <header>
        <h1>Show do Bilhão</h1>
    </header>

    <main>
        <?php 
            for ($i = 0; $i < count($enunciados); $i++) {
                echo "<div class='pergunta'>";

                echo "<h2 class='enunciado'><span class='numero'>" . ($i + 1) . ". </span>" . $enunciados[$i] . "</h2>"; 

                echo "<ul class='alternativas'>";

                for ($j = 0; $j < count($alternativas[$i]); $j++) {
                    echo "<li class='alternativa'>" . chr(97 + $j) . ") "  . $alternativas[$i][$j] . "</li>";
                }

                echo "</ul>";
                echo "</div>";
            }
        ?>
    </main>
</body>
</html>

<span class="numero"></span>

