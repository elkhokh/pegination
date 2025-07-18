<?php
require_once 'inc/header.php';
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
        <nav class="d-flex justify-content-center ">
            <ul class="pagination">
                <!-- <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li> -->
            <?php for($i=1 ; $i <= $page_number ; $i++): ?>
                <!-- <li class="page-item active"><span class="page-link"></span></li> -->
                <li class="page-item<?= $i == $page ? ' active' : '' ?>">
                    <a class="page-link" href="<?="?page=". $i ?>"><?= $i?></a>
                </li>
            <?php endfor ; ?>
                <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
            </ul>
        </nav>
    <?php else: ?>
        <div class="alert alert-warning text-center">No products found.</div>
    <?php endif; ?>
</div>

<?php require_once 'inc/footer.php'; ?>



