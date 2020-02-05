<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>New Post</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title"  placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label>Teaser</label>
                    <input type="text" class="form-control" name="teaser"  placeholder="Teaser" required>
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" name="content" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publish</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
