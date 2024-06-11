<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>
</body>
<?php get_footer()  ?>
</html>

<style>
    <?php include 'style.css'; ?>
</style>