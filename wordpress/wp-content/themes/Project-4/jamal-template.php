<?php /* Template Name: Jamal Template */ ?>
<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>

</body>
<footer>
    <?php get_footer()  ?>
</footer>
<style>
    <?php include 'media.css'; ?>
</style>
<footer>
    <div class="Copyright">
        <?php echo "© " . date("Y") . " Niek Hendrix"; ?>
    </div>
</footer>

