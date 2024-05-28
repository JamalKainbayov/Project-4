<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <?php include 'header.php'?>
    <?php wp_nav_menu(); ?>
</head>
<body>
<h1><?php echo get_the_title()?></h1>
<p><?php echo get_the_content()?></p>
</body>
<footer>
    <?php include 'footer.php'?>
</footer>
</html>
