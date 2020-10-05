<?php include 'inc/header.php'; ?>
<?php include 'inc/body.php'; ?>
    <br><br><br><br>
    <div class="card">
        <form class="card-body" action="login.php" method="POST">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" value="1">
                <label class="form-check-label" for="remember">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
        </form>
    </div>
<?php include 'inc/footer.php'; ?>