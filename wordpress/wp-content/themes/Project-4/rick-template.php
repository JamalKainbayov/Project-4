<?php /* Template Name: Rick Template */ ?>
<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>
<div class="Sldiers">
    <img src="<?php echo esc_html( get_field('slider-2') ); ?>" alt="hi">
    <img src="<?php echo esc_html( get_field('slider-1') ); ?>" alt="hi1">
</div>
<style>
    <?php include 'style.css'; ?>
</style>
