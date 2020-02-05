<h2>Product List</h2>
<a href="index.php?page=add">Add new Product</a>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <th scope="row"><?php echo ++$key ?></th>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <td><?php echo $product->getDescription() ?></td>
            <td>
                <a href="index.php?page=delete&id=<?php echo $product->getId(); ?>"
                   onclick="return confirm('Ban chac chan muon xoa khong')" class="btn btn-warning btn-sm">Delete</a>
                <a href="index.php?page=edit&id=<?php echo $product->getId(); ?>"
                   class="btn btn-primary btn-sm">Update</a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>