<?php
/**
 * Template part for displaying Single Posts
 *
 * @subpackage Online Marketing Agency
 * @since 1.0
 * @version 1.4
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="single-post">
    <div class="article_content">
      <div class="article-text">
        <?php if(has_post_thumbnail()) { ?>
          <?php the_post_thumbnail(); ?>  
        <?php }?>
        <div class="metabox"> 
          <span class="entry-author"><i class="fas fa-user"></i><?php the_author(); ?></span>
          <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>
          <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','online-marketing-agency'), __('0 Comments','online-marketing-agency'), __('% Comments','online-marketing-agency') ); ?></span>
        </div>
        <p><?php the_content(); ?></p>
        <div class="single-post-tags mt-3"><?php the_tags(); ?></div>
        <hr>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</article>