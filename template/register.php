<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>
    <br><br><br><br>
    <div class="card">
        <form class="card-body" action="register.php" method="POST">
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" name="username" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="username">Full Name</label>
                <input type="text" name="name" class="form-control" id="username" placeholder="Enter Name">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
        </form>
    </div>
<?php include 'inc/footer.php'; ?>