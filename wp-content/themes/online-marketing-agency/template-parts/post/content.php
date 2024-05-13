<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Online Marketing Agency
 * @since 1.0
 * @version 1.4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <?php if(has_post_thumbnail()) { ?>
    <?php the_post_thumbnail(); ?>
  <?php }?>
  <div class="article_content">
    <h3><?php the_title(); ?></h3>
    <p class="mb-0">
      <?php $online_marketing_agency_excerpt = get_the_excerpt(); echo esc_html( online_marketing_agency_string_limit_words( $online_marketing_agency_excerpt,30 ) ); ?> <?php echo esc_html('...', 'online-marketing-agency'); ?>
      <a href="<?php the_permalink(); ?>" class="read-btn"><?php echo esc_html('Read More', 'online-marketing-agency'); ?><span class="screen-reader-text"><?php echo esc_html('Read More', 'online-marketing-agency'); ?></span></a>
    </p>
    <div class="clearfix"></div>
  </div>
  <div class="metabox"> 
    <span class="entry-comments"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','online-marketing-agency'), __('0 Comments','online-marketing-agency'), __('% Comments','online-marketing-agency') ); ?></span>
    <span class="entry-date"><span><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span></span>
  </div>
</article>