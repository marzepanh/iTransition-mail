    <?php
    require_once '../vendor/connect.php';

    $result = mysqli_query($connect, "SELECT * FROM `users`");
    ?>
<!doctype html>
<html>
<head>
    <title>Chat</title>
    <meta name="description" content="Our first page">
    <meta name="keywords" content="html tutorial template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img class="bi me-2"
                     src="../images/auth.svg" alt="" width="60" height="50">
            </a>
            <?php
            if(!isset($_COOKIE['user'])):
                ?>
                <div class="col-md-3 text-end">
                    <a class="btn btn-primary" href="../public/signin.php" role="button">Login</a>
                    <a class="btn btn-primary" href="../public/signup.php" role="button">Sign-up</a>
                </div>
            <?php else: ?>
                <p>Hello, <?= $_COOKIE['user']?> <a href="../vendor/exit.php">exit</a></p>
            <?php endif; ?>
        </header>
    </div>
</head>
<body>
<form action="../vendor/sendMessage.php" method="post">
    <div class="container-lg m-lg-auto">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Send message to:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="receiverName">
            <?php
            while ($user = mysqli_fetch_assoc($result)) {
            ?>
            <option><?=$user['name']?></option>
                <?php
            }
            ?>
        </select>
    </div>

    <div class="form-grouwp">
        <label for="exampleFormControlInput1">Subject</label>
        <input class="form-control" id="exampleFormControlInput1" placeholder="Subject" name="subject">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
    </div>
        <div class="btn-group" role="group" aria-label="Third group">
            <button type="submit" class="btn btn-primary mt-3">Send</button>
        </div>
    </div>

</form>
</body>
</html>

