<?php /* Template Name: Jamal Template */ ?>
<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>
<div id="timeline">
    <div class="year-line" id="year-2016"></div>
    <div class="year-line" id="year-2017"></div>
    <div class="year-line" id="year-2018"></div>
    <div class="year-line" id="year-2019"></div>
    <div class="year-line" id="year-2020"></div>
    <div class="year-line" id="year-2021"></div>
    <div class="year-line" id="year-2022"></div>
    <div class="year-line" id="year-2023"></div>
</div>
</body>
<footer>
    <?php get_footer()  ?>
</footer>
<style>
    <?php include 'media.css'; ?>
</style>

