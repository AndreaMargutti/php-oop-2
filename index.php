<?php 
require_once __DIR__ . "/db/data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
    integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
    crossorigin='anonymous' />
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <!--General Style-->
    <link rel="stylesheet" href="./style/general.css">
    <title>php-oop-2</title>
</head>

<body>
    <header class="mb-3 d-flex justify-content-center align-items-center">
        <h1>E-Commerce OOP</h1>
    </header>
    <main class="container text-center">
        <section class="row row-cols-2">
            <?php foreach($products as $product) { ?>
            <div class="col my-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $product->name; ?>
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            Prezzo:
                            <?php echo $product->price; ?>
                        </li>
                        <li class="list-group-item">
                            Quantità Disponibile:
                            <?php echo $product->inStock; ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $product->locate; ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $product->category->type; ?>
                            <br>
                            <img src="<?php echo $product->category->icon; ?>" alt="dog icon" width="5%">
                        </li>
                        <!--Inizio specifiche per cibo-->
                        <?php if(is_a($product, "Food")) { ?>
                        <li class="list-group-item">
                            <?php echo $product->brand; ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $product->solidity; ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $product->size; ?>
                        </li>
                        <!--Nel caso in cui fosse un gioco...-->
                        <?php } else if (is_a($product, "Game")){ ?>
                        <li class="list-group-item">
                            <?php if($product->sound) {
                            echo "Rumoroso";
                            } else {
                                echo "Silenzioso";
                            } ?>
                        </li>
                        <li class="list-group-item">
                            <?php echo $product->gameType; ?>
                        </li>
                        <?php } else if(is_a($product, "Kennel")) {  ?>
                        <li class="list-group-item">
                            <?php echo $product->height ?>
                        </li>
                        <li class="list-group-item">
                        <?php echo $product->width ?>
                        </li>
                        <?php } ?>
                        <li class="list-group-item text-primary">
                            <?php echo $product->possibleSellers; ?>
                        </li>
                        <li class="list-group-item text-primary">
                            <!--Esegui la funzione e, se non riesci, lancia l'eccezzione!-->
                            <?php try {
                                echo $product->buy(-4);       
                            } catch (ArithmeticError $e) {
                                echo $e->getMessage();
                            } ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </section>
    </main>
</body>

</html>