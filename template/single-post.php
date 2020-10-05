<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>

    <h2 class="page-header"><?php echo $post->job_title;?>(<?php echo $post->location;?>)</h2>
    <small>Posted By <?php echo $post->contact_user; ?> on <?php echo $post->post_date ?> </small>
    <hr>
    <p class="lead"><?php echo $post->description; ?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company:</strong> <?php echo $post->company; ?></li>
        <li class="list-group-item"><strong>Salary:</strong> <?php echo $post->salary; ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?php echo $post->contact_email; ?></li>
    </ul>
    <br><br>
    <a href="index.php">Go Back</a>
    <br><br>
    <div class="card-body bg-light">
        <a href="edit.php?id=<?php echo $post->id ?>" class="btn btn-primary">Edit</a>
        <form style="display: inline;" method="POST" action="post.php">
            <input type="hidden" name="del_id" value="<?php echo $post->id?>">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>
<?php include 'inc/footer.php'; ?>