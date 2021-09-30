<?php get_header(); ?>

<section class="cat-fv">
  <div class="cat-fv-main">
    <p class="cat-fv-main-desc"><?php single_cat_title(); ?></p>
  </div>
</section>

<main class="main">
  <div class="main-inner">
    <div class="main-inner-flex">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="post-link">

            <div class="post-link-img">
              <!-- <img class="post-link-img-image" src="img/blog__first.jpg" alt=""> -->
              <?php if (has_post_thumbnail()) : ?>
                <img class="post-link-img-image">
                <?php the_post_thumbnail('post-thumbnails', array('width' => '100%', 'height' => '180px',  'alt' => the_title_attribute('echo=0'))); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri() ?>/img/no-images.png" alt="">
              <?php endif; ?>

              <?php if (!is_category() && has_category()) : ?>
                <p class="category-tag">
                  <?php
                  $postcat = get_the_category();
                  echo $postcat[0]->name;
                  ?>
                </p>
              <?php endif; ?>
            </div>

            <div class="post-link-desc">
              <!-- <h2 class="post-link-desc-title">タイトル</h2> -->
              <h2 class="post-link-desc-title">
                <?php
                if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                  $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                  echo $title . '…';
                } else {
                  echo $post->post_title;
                }
                ?>
              </h2>
              <!-- <p class="post-link-desc-date">2021-02-26</p> -->
              <p class="post-link-desc-date"><?php echo get_the_date("Y-m-d") ?></p>
            </div>
          </a>
        <?php endwhile; ?>
        <?php endelse: ?>
        <p>投稿が見つかりません～</p>
      <?php endif ?>


      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>