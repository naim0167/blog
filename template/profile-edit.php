<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>
    <br><br><br><br>
    <div class="card">
        <form class="card-body" action="editprofile.php?id=<?php echo $userinfo->id; ?>" method="POST">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" name="username" class="form-control" id="name" placeholder="Enter Name" value="<?php echo $userinfo->username; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="username">Full Name</label>
                <input type="text" name="name" class="form-control" id="username" placeholder="Enter Name" value="<?php echo $userinfo->name; ?>">
            </div>
            <button type="submit" class="btn btn-primary float-right" value="submit" name="submit">Update</button>
        </form>
    </div>
<?php include 'inc/footer.php'; ?>