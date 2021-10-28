<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($products);
// echo '</pre>';


?>

<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Product CRUD!</title>
</head>

<body>
    <div class="container">
        <h1 class='mt-3 text-center'>Product CRUD!</h1>

        <p><a class='btn btn-success' href="create.php">
                Create Product
            </a></p>

        <table class="table table-dark table-striped my-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $i => $product) : ?>
                    <tr>
                        <th scope="row">
                            <?php echo $i + 1; ?>
                        </th>
                        <td></td>
                        <td><?php echo $product['title'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                        <td><?php echo $product['create_date'] ?></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-primary">Edit</button>
                            <button type="button" class="btn btn-sm
                            btn-danger">Delete</button>
                        </td>


                    </tr>

                <?php endforeach; ?>



            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>

</html>