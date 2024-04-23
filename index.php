<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet"> <!-- Assuming you have a separate CSS file for custom styles -->
</head>
<body>
    <?php require_once "header.php"; ?>
    <?php require_once "banner.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php require_once "description.php"; ?>
            </div>
            <div class="col-lg-4">
                <?php require_once "item.php"; ?>
            </div>
        </div>
    </div>
    <?php require_once "footer.php"; ?>

    <!-- Optional: Load JavaScript libraries if needed -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <!-- Optional: Load custom JavaScript file -->
    <script src="script.js"></script>
</body>
</html>
