<?php get_header(); ?>

<main class="inner">
  <?php if (have_posts()) : the_post(); ?>
      <div class="article">
        <!-- <div href="" class="article-category">カテゴリーの名前</div> -->
        <?php if (has_category()) : ?>
          <div class="article-category"><?php echo get_the_category_list(' '); ?>
          <?php endif; ?>
          </div>

          <!-- <h1 class="article-title">記事のタイトル</h1> -->
          <h1 class="article-title"><?php the_title(); ?></h1>

          <!-- <p class="article-date">2021.02.26</p> -->
          <p class="article-date"><?php echo get_the_date('Y.m.d'); ?></p>

          <div class="article-img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0'))); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" width="100%" alt="no-img">
            <?php endif; ?>
          </div>

          <div class="article-text">
            <?php the_content(); ?>
          </div>

      <?php else : ?>
        <p class="no-see">投稿が見つかりません～</p>
      <?php endif; ?>
      </div>
</main>
<?php get_footer(); ?>