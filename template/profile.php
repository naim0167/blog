<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>
    <br><br><br><br>
    <div class="card">
        <div class="card-body>
            <ul class="list-group">
                <li class="list-group-item"><strong>User Id:</strong> <?php echo $userInformation->id; ?></li>
                <li class="list-group-item"><strong>Full Name:</strong> <?php echo $userInformation->name; ?></li>
                <li class="list-group-item"><strong>Username:</strong> <?php echo  $userInformation->username; ?></li>
                <li class="list-group-item"><strong>Role:</strong> <?php echo $userInformation->joined; ?></li>
            </ul>
        </div>
        <br><br>
        <a href="index.php">Go Back</a>
        <br><br>
        <div class="card-body bg-light">
            <a href="editprofile.php?id=<?php echo $userid; ?>" class="btn btn-primary">Edit</a>
<!-- DELETE-->
            <form style="display: inline;" method="POST" action="profile.php">
                <input type="hidden" name="del_id" value="<?php echo $userInformation->user_id?>">
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>


<?php include 'inc/footer.php'; ?>