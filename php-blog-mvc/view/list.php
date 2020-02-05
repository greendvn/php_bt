<h2>Post List</h2>
<a href="index.php?page=add">Add new post</a>
<div class="row">
    <?php foreach ($posts as $key => $post): ; ?>
        <div class="card" style="width: 20rem">
            <div class="card-header">
                <h5 class="card-title"><?php echo $post->getTitle() ?></h5>
            </div>
            <div class="card-body">
                <h6 class="card-title"><?php echo $post->getCreateDay() ?></h6>
                <p class="card-text"><?php echo $post->getTeaser() ?></p>
                <a href="index.php?page=view&id=<?php echo $post->getId(); ?>"  class="btn btn-primary">View</a>
                <a href="index.php?page=edit&id=<?php echo $post->getId(); ?>" class="btn btn-primary">Edit</a>
                <a href="index.php?page=delete&id=<?php echo $post->getId(); ?>"
                   onclick="return confirm('Ban chac chan muon xoa khong')"  class="btn btn-primary">Delete</a>
            </div>
        </div>

    <?php endforeach; ?>
</div>
