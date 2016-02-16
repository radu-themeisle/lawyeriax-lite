<div class="col-md-4 news-box">
  <div class="news-title-wrap">
    <div class="news-date">
      <?php
      $day = the_date('d', '<span>', '</span>'); ?>
      <span> <?php $month = the_time('M'); ?> </span>
    </div>
    <div class="news-post-title-wrap">
      <h4 class="news-post-title">
        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h4>
    </div>
    <div class="news-posted-on">
      <a href="<?php the_author_link(); ?> " title="<?php the_author(); ?>"><?php the_author(); ?></a>
      <a href="<?php comments_link() ?>"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></a>
    </div>
  </div>
  <?php if (has_post_thumbnail()) { ?>
  <div class="news-img-wrap">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
      <?php the_post_thumbnail('post-thumbnails-home',array( 'alt' => get_the_title()));?>

    </a>
  </div> <?php } ?>
  <div class="border-left news-content-wrap">
    <p><?php the_excerpt();?></p>
  </div>
</div>
