<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>

</body>
<footer>
<?php get_footer()  ?>

    <div class="Copyright">
        <?php echo "© " . date("Y") . " Niek Hendrix"; ?>
    </div>

</footer>
<style>
    <?php include 'style.css'; ?>
</style>

