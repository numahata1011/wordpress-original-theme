<?php get_header(); ?>
    <!--header end-->
    <div id="main-body">
    <div id="main-body-left">

    <?php 
      if(have_posts()) :
      while(have_posts()) :
      the_post();
    ?>

    <div class="blogcard">
        <div class="posts">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="info"><?php echo get_the_date(); ?> 【<?php the_category(','); ?>】</div>
        <p><?php the_content(); ?></p>
      </div>
    </div>

    <div id="prenext">
      <div class="pre"><?php previous_post_link(); ?></div>
      <div class="next"><?php next_post_link(); ?></div>
    </div>

      <?php 
      endwhile;
      else:
      ?>
      <p>記事はありません</p>
      <?php endif; ?>

</div>
<!--mainbody end-->

<?php get_sidebar(); ?>
<!--sidebar end-->
</div>
<?php get_footer(); ?>
<!--footer end-->