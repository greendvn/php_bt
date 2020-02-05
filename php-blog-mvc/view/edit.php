<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Edit Post</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <input type="text" class="form-control" name="id" placeholder="Title"
                       value="<?php echo $post->getId() ?>" hidden>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title"
                           value="<?php echo $post->getTitle() ?>" required>
                </div>
                <div class="form-group">
                    <label>Teaser</label>
                    <input type="text" class="form-control" name="teaser" placeholder="Teaser" value="<?php echo $post->getTeaser() ?>" required>
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content" rows="10"><?php echo $post->getContent() ?> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>