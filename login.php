<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MyTrees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
<?php require('inc/header.php')?>
    <div class="container text-center p-5" style="max-width: 60%;">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="actions/login.php">
                    <div class="col-12 mb-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/2220/2220061.png" alt="Logo" width="100" height="100">
                        <p class="h1">Welcome to MyTrees!<br />Please login to continue.</p>
                        <br />
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Email: </span>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Password: </span>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require('inc/footer.php')?>
</body>

</html>
