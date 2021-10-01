<?php get_header(); ?>

<section class="cat-fv">
  <div class="cat-fv-main">
    <p class="cat-fv-main-desc"><?php single_cat_title(); ?></p>
  </div>
</section>

<main class="main">
  <div class="main-inner">
    <div class="main-inner-flex">
      <!--左投稿一覧 右サイドバー -->

      <section class="post">
        <!--左 投稿-->
        <div class="post-flex">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <a href="<?php the_permalink() ?>" class="post-flex-container">
                <!-- <p class="post-flex-container-img-tag">キャリア</p> -->
                <?php if (!is_category() && has_category()) : ?>
                  <p class="post-flex-container-img-tag">
                    <?php $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?>
                  </p>
                <?php endif; ?>

                <div class="post-flex-container-img">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('post-thumbnails', array('width' => '100%', 'height' => '180px',  'alt' => the_title_attribute('echo=0'))); ?>
                    <!-- <img class="post-flex-container-img-image" alt="アイキャッチ画像がありません"> -->
                    <!-- <img src="./img/blog__first.jpg" class="post-flex-container-img-image"  alt=""> -->
                  <?php else : ?>
                    <img class="post-flex-container-img-noimage" src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                  <?php endif ?>
                </div>
                <div class="post-flex-container-desc">
                  <h2 class="post-flex-container-desc-title">
                    <?php
                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '…';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </h2>
                  <p><?php echo get_the_date('Y-m-d'); ?></p>
                </div>
              </a>
            <?php endwhile; ?>
          <?php else : ?>
            <p class="no-see">投稿が見つかりません～</p>
          <?php endif; ?>
        </div>
      </section>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>