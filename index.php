<?php
include __DIR__ . './database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Pet Shop</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h1>BoolShop</h1>
        </div>
        <div class="row">
            <h4>
                I nostri prodotti:
            </h4>
        </div>
        <div class="row">
            <?php foreach ($ALLProducts as $item) { ?>
                <div class="col-12 col-md-3 col-sm-6">
                    <div class="card my-2">
                        <?php
                        echo "<img class='card-img-top' src='" . $item->image . "'>";
                        ?>
                        <div class="card-body">
                            <?php
                            echo "<h5 class='card-title'>" . $item->titolo . "</h5>";
                            ?>
                            <?php
                            echo "<div class='card-text'>" . $item->categoria . "</div>";
                            ?>
                            <?php
                            echo "<div class='card-text'>" . $item->prezzo . "</div>";
                            ?>
                            <?php
                            if ($item instanceof Food) {
                                echo '<p>Ingredienti: ' . implode(', ', $item->food) . '</p>';
                            }
                            if ($item instanceof Other) {
                                echo '<p>Dimensioni: ' . implode(', ', $item->other) . '</p>';
                            }
                            if ($item instanceof Toys) {
                                echo '<p>Ingredienti: ' . $item->toys . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>