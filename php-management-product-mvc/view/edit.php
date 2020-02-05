<h2> Update Product</h2>
<div class="col-12">
    <form method="post" action="index.php?page=edit">
        <input type="text" class="form-control" name="id"   value="<?php echo $product->getId(); ?>" hidden>
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="name" placeholder="name"
                   value="<?php echo $product->getName(); ?>" required>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="0.0" value="<?php echo $product->getPrice(); ?>"required>
        </div>
        <div class="form-group">
            <label>Manufacturer</label>
            <input type="text" class="form-control" name="manufacturer" placeholder="manufacturer" value="<?php echo $product->getManufacturer(); ?>"required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" rows="3"><?php echo $product->getDescription(); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
    </form>
</div>
</div>