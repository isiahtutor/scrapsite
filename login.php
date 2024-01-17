<?php
    session_start();

    if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Scrapsite Login</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="d-flex">
            <form class="p-5"
                    action="auth.php"
                    method="post"
                    style="width:30rem">
                <h1 class="login">Login</h1>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert-danger" role="alert">
                        <?=$_GET['error']?>
                    </div>
                <?php } ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" 
                            class="form-label">Email
                    </label>
                    <input type="email"
                            name="email" 
                            class="form-control" 
                            id="exampleInputEmail1" 
                            aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" 
                            class="form-label">Password
                    </label>
                    <input type="password" 
                            name="password"
                            class="form-control" 
                            id="exampleInputPassword1">
                </div>
                <button type="submit" 
                        class="btn">LOGIN
                </button>

            </form>
        </div>
    </body>
</html>

<?php

}else {
    header("Location: homepage.html");
}
?>