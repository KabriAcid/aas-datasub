<?php
$title = "Login";
require __DIR__ . '/../../partials/header.php';
?>

<body>
    <?php require __DIR__ . '/../../partials/navbar.php'; ?>
    <main class="container">
        <form action="process.php" method="post" class="shadow p-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email Address" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" name="login">Submit</button>
                </div>
                <div class="mt-3">
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </div>
        </form>
    </main>
</body>