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
    <div class="row p-4 justify-content-around">
        <?php foreach ($ALLProducts as $item) { ?>
            <div class="col-12 col-md-3 col-sm-6">
                <div class="card">
                    <?php
                    echo "<img class='card-img-top' src='" . $item->image . "'>";
                    ?>
                    <div class="card-body">
                        <?php
                        echo "<h5 class='card-title'>" . $item->titolo . "</h5>";
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>