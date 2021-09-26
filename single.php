<?php get_header(); ?>

<main class="inner">
  <?php if (have_posts()) : the_post(); ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="article">
        <!-- <div class="article-category">MySQL</div> -->
        <?php if (has_category()) : ?>
          <div class="article-category">
            <?php echo get_the_category_list(""); ?>
          </div>
        <?php endif; ?>

        <!-- <h1 class="article-title">データベースのMySQLの解説。意外と簡単</h1> -->
        <h1 class="article-title"><?php the_title(); ?></h1>
        <!-- <p class="article-date">2021.02.26</p> -->
        <p class="article-date"><?php echo get_the_date("Y.m.d") ?></p>

        <div class="article-img">
          <!-- <img class="article-img-img" src="./img/blog__first.jpg" alt=""> -->
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
          <?php endif ?>
        </div>

        <div class="article-text">
          <!-- <h2 class="article-text-h2">サンプル見出しがここには入ります。</h2>
          <p>サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。</p>

          <h3 class="article-text-h3">サンプル見出しがここには入ります。</h3>
          <p>サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。</p>

          <h4 class="article-text-h4">サンプル見出しがここには入ります。</h4>
          <p>サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。</p>

          <h2 class="article-text-h2">サンプル見出しがここには入ります。</h2>
          <p>サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。</p>

          <h3 class="article-text-h3">サンプル見出しがここには入ります。</h3>
          <p>サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。</p>

          <h4 class="article-text-h4">サンプル見出しがここには入ります。</h4>
          <p>サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。サンプルテキストがここにはたくさん入ります。</p>
        </div> -->
          <?php the_content(); ?>
        </div>
</main>


<?php endwhile; ?>
<?php endelse: ?>
<p>投稿が見つかりません</p>
<?php endif; ?>
<?php get_footer(); ?>