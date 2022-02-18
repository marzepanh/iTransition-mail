<!doctype html>
<html>
<head>
    <title>Chat</title>
    <meta name="description" content="Our first page">
    <meta name="keywords" content="html tutorial template">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="app.js" type="text/javascript"></script>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2"
                     src="images/auth.svg" alt="" width="60" height="50">
            </a>
            <?php
            if(!isset($_COOKIE['user'])):
                ?>
                <div class="col-md-3 text-end">
                    <a class="btn btn-primary" href="public/signin.php" role="button">Login</a>
                    <a class="btn btn-primary" href="public/signup.php" role="button">Sign-up</a>
                </div>
            <?php else: ?>
                <p>Hello, <?= $_COOKIE['user']?> <a href="vendor/exit.php">exit</a></p>
            <?php endif; ?>
        </header>
    </div>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
if(isset($_COOKIE['user'])):
    ?>
    <div class="container-lg">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">From</th>
            <th scope="col">Date</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody id="messages">
        <!-- Messages -->
        </tbody>
    </table>
    </div>
    <div class="container-lg">
        <div class="btn-btn-primary">
            <a href="public/message.php" class="btn btn-primary">Send message</a>
        </div>
    </div>

<?php else: ?>
    <div class="container-lg">
        <div>
            <p>You need to be logged in to use chat.
                Please <a href="public/signin.php">login</a> / <a href="public/signup.php">sign up</a>.</p>
        </div>
    </div>
<?php endif; ?>

</body>
</html>

