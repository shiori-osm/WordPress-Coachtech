<?php get_header(); ?>

<?php if (have_posts()) : the_post(); ?>

  <main class="inner">
    <div class="article">
      <!-- <div href="" class="article-category">MySQL</div> -->
      <?php if (has_category()) : ?>
        <div class="article-category"><?php echo get_the_category_list(' '); ?></div>
      <?php endif; ?>

      <!-- <h1 class="article-title">データベースのMySQLの解説。意外と簡単</h1> -->
      <h1 class="article-title"><?php the_title(); ?></h1>

      <!-- <p class="article-date">2021.02.26</p> -->
      <p class="article-date"><?php echo get_the_date('Y.m.d'); ?></p>

      <div class="article-img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0'))); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
        <?php endif; ?>
      </div>

      <div class="article-text">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endelse: ?>
    <p>投稿が見つかりません</p>
  <?php endif; ?>
  </main>
<?php get_footer(); ?>