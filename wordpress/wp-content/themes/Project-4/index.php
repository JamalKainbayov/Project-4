<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>
</body>
<?php get_footer()  ?>
<img src="<?php echo esc_html( get_field('slider-2') ); ?>" alt="hi">
</html>

<style>
    <?php include 'style.css'; ?>
</style>