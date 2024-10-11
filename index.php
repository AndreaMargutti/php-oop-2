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
    <title>php-oop-2</title>
</head>

<body>
    <main class="container text-center py-2">
        <h1>E-Commerce OOP</h1>
        <div class="row"></div>
        <?php foreach($products as $product) { ?>
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product->name; ?>
                    </h5>
                    <p class="card-text">

                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php echo $product->price; ?>
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
                    <!--Nel caso in cui NON fosse cibo...-->
                    <?php } else { ?>
                    <li class="list-group-item">
                        <?php echo $product->sound; ?>
                    </li>
                    <li class="list-group-item">
                        <?php echo $product->gameType; ?>
                    </li>
                    <?php } ?>
                    <li class="list-group-item text-primary">
                        <?php echo $product->possibleSellers?>
                    </li>
                </ul>
            </div>
        </div>
        <?php } ?>
    </main>
</body>

</html>