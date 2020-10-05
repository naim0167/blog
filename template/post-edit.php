<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>

    <h2 class="page-header">Edit Post</h2>
    <form method="POST" action="edit.php?id=<?php echo $post->id; ?>">
        <div class="form-group">
            <label>Company</label>
            <input class="form-control" name="company" type="text" value="<?php echo $post->company; ?>">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
                <option value="0">Choose Categories</option>
                <?php foreach($categories as $category): ?>
                    <?php if($post->category_id == $category->id): ?>
                        <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input class="form-control" name="job_title" type="text" value="<?php echo $post->job_title; ?>">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"><?php echo $post->description; ?></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input class="form-control" name="location" type="text" value="<?php echo $post->location; ?>">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input class="form-control" name="salary" type="text" value="<?php echo $post->salary; ?>">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input class="form-control" name="contact_user" type="text" value="<?php echo $post->contact_user; ?>">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input class="form-control" name="contact_email" type="text" value="<?php echo $post->contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Update" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>