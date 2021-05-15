<?php
require_once("../crud/php/compenent.php");
require_once("../crud/php/db.php");
Createdb();
require_once("../crud/php/operation.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-Store</title>
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- CSS-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>

<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>

            <div class="d-flex justify-content-center">
                <form action="" method="POST" class="w-50">
                    <div class="pt-2">
                        <?php inputElement("@", "ID", "book_id", ""); ?>
                    </div>
                    <div class="pt-2">
                        <?php inputElement("Detail", "Book Name", "book_name", ""); ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php inputElement("People", "Publisher", "book_publisher", ""); ?>
                        </div>
                        <div class="col">
                            <?php inputElement("$", "Price", "book_price", ""); ?>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="buttons">
                            <?php buttonElement("btn-create", "btn btn-success", "<i class='fas fa-plus'></i>", "create", "dat-toogle='tooltip' data-placment='bottom' title='Create'") ?>
                            <?php buttonElement("btn-read", "btn btn-primary", "<i class='fas fa-sync'></i>", "read", "dat-toogle='tooltip' data-placment='bottom' title='Read'") ?>
                            <?php buttonElement("btn-update", "btn btn-light", "<i class='fas fa-pen-alt'></i>", "update", "dat-toogle='tooltip' data-placment='bottom' title='Update'") ?>
                            <?php buttonElement("btn-delete", "btn btn-danger", "<i class='fas fa-trash-alt'></i>", "delete", "dat-toogle='tooltip' data-placment='bottom' title='Delete'") ?>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Boostrap Table -->
            <div class="d-flex table-data">
                <table class="table table-stripped table-dark">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Book Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <tr>
                            <td>1</td>
                            <td>Book name</td>
                            <td>Dailt Tution</td>
                            <td>123</td>
                            <td><i class="fas fa-edit btnedit"></td>
                        </tr>
                    </tbody>
                </table>

            </div>


        </div>


    </main>




    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>