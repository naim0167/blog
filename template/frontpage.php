<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>

    <div class="jumbotron">
        <h1>Find A Post</h1>
        <form action="index.php" POST="GET">
            <select name="category" class="form-control">
                <option value="0">Choose a category</option>
                <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?> </option>
                <?php endforeach; ?>
            </select> <br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
    </div>
    <h3><?php echo $title?></h3> <br>
    <?php foreach ($posts as $post) : ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?php echo $post->job_title; ?></h4>
            <p><?php echo $post->description; ?></p>
        </div>
        <div class="col-md-2">
            <a href="post.php?id=<?php echo $post->id?>" class="btn btn-primary">View</a>
        </div>
    </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>