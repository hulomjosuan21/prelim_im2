<?php
require_once('connection.php');
$newConnection->addProduct();
$newConnection->editStudent();
$newConnection->deleteProduct();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Prelim</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Prelim Hulom</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex" role="search">
                    <button class="btn btn-outline-success me-2" type="submit">Filter</button>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="category">
                                <option selected disabled>Open this category menu</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Home & Kitchen">Home & Kitchen</option>
                                <option value="Beauty">Beauty</option>
                                <option value="Sports & Outdoors">Sports & Outdoors</option>
                                <option value="Books">Books</option>
                                <option value="Toys">Toys</option>
                                <option value="Automotive">Automotive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Price" name="price">
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" placeholder="Quantity" name="quantity">
                        </div>
                        <div class="mb-3">
                            <input type="Date" class="form-control" placeholder="Date Purchased" name="created_at">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="add_product">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-bag-shopping"></i> Add Products
        </button>
    </div>

    <main class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date Purchase</th>
                    <th scope="col">Actions</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = $newConnection->openConnection();
                $stmt = $connection->prepare('SELECT * FROM products_table');
                $stmt->execute();
                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                ?>
                    <tr>
                        <th scope="row"><?= $row->product_id ?></th>
                        <td><?= $row->product_name ?></td>
                        <td><?= $row->category ?></td>
                        <td>₱ <?= $row->price ?></td>
                        <td><?= $row->quantity ?>x</td>
                        <td><?= $row->created_at ?></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal<?= $row->product_id ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <button class="btn btn-danger" value="<?php echo $row->product_id ?>" name="delete_product"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                        <?php include('edit_modal.php') ?>
                    </tr>
                <?php
                }

                ?>

            </tbody>
        </table>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>