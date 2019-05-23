<?php get_header();

?>
<div class="content <?php if(!get_option("mytheme_header_donghua")){echo 'donghua';} ?>" id="index_content">
<?php dynamic_sidebar('index_content');?>

</div>

<?php get_footer(); ?>
