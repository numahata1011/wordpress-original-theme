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
        <p><?php the_content(); ?></p>
      </div>
    </div>

      <?php 
      endwhile;
      else:
      ?>
      <p>ページはありません</p>
      <?php endif; ?>

</div>
<!--mainbody end-->

<?php get_sidebar(); ?>
<!--sidebar end-->
</div>
<?php get_footer(); ?>
<!--footer end-->