<?php
include "./raccolta.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>PHP_AJAX_DISCHI</title>
</head>

<body>
        <!-- ciclo for each per restituire risultato -->
            <?php foreach ($playlist as $item) { ?>
                    <img src="<?php echo $item['poster']; ?>" alt="">
                    <h3> <?php echo $item['title']; ?> </h3>
                    <h4> <?php echo $item['author']; ?> </h4>
                    <h4> <?php echo $item['genre']; ?> </h4>
                    <h4> <?php echo $item['year']; ?> </h4>

            <?php } ?>
            </ul>
</body>

</html>