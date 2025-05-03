<?php
require_once 'inc/header.php';
require_once 'Database/config.php';
require_once 'Database/db.php';
require_once 'Database/migration.php';
?>

<div class="container my-5">
    <h2 class="text-center mb-4">Products List</h2>

    <?php if (!empty($products)): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Category</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <th scope="row"><?= ($product->id) ?></th>
                            <td><?= $product->name ?></td>
                            <td><?= $product->price ?></td>
                            <td><?= $product->quantity ?></td>
                            <td><?= $product->category ?></td>
                            <td><?= $product->created_at ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav class="d-flex justify-content-center mt-4">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><span class="page-link">2</span></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    <?php else: ?>
        <div class="alert alert-warning text-center">No products found.</div>
    <?php endif; ?>
</div>

<?php require_once 'inc/footer.php'; ?>
<!-- git remote add origin https://github.com/elkhokh/pegination.git
git branch -M master
git push -u origin master -->