<?php /* Template Name: Jamal Template */ ?>
<?php get_header()?>
<?php include 'nav.php'?>
<body>
<h1><?php echo get_the_title()?></h1>
<?php echo get_the_content()?>
<div id="timeline">
    <div class="year-line" id="year-2023"><span class="year-label">2023</span><span class="year-text">LOL</span></div>
    <div class="year-line" id="year-2022"><span class="year-label">2022</span><span class="year-text">Text for 2022</span></div>
    <div class="year-line" id="year-2021"><span class="year-label">2021</span><span class="year-text">Text for 2021</span></div>
    <div class="year-line" id="year-2020"><span class="year-label">2020</span><span class="year-text">Text for 2020</span></div>
    <div class="year-line" id="year-2019"><span class="year-label">2019</span><span class="year-text">Text for 2019</span></div>
    <div class="year-line" id="year-2018"><span class="year-label">2018</span><span class="year-text">Text for 2018</span></div>
    <div class="year-line" id="year-2017"><span class="year-label">2017</span><span class="year-text">Text for 2017</span></div>
    <div class="year-line" id="year-2016"><span class="year-label">2016</span><span class="year-text">Text for 2016</span></div>
</div>
</body>
<footer>
    <?php get_footer()  ?>
</footer>
<style>
    <?php include 'media.css'; ?>
</style>

