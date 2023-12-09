

<?php get_header();?>

  <main>
    <div class="information-top-mv">
      <div class="information-top-text">
        <h1 class="information-mv-text information-mv-back">Information</h1>
        <p class="information-mv-text1">お知らせ</p>
      </div>
      <div class="information-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/information-mv-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/information-mv-pc.png">
          <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/information-mv-pc.png" alt="informationメインビジュアル" loading="lazy" class="information-mv-img">
        </picture>
      </div>
    </div>
    

    <section id="information-detail">
      <div class="information-detail-gp">
        <div class="information-text-gp">
          <h2 class="information-detail-title"><?php the_title(); ?></h2>
          <div class="information-date-and-time">
            <p class="information-date"><?php echo get_the_date(); ?></p>
            <p class="information-day">営業日時</p>
          </div>
        </div>
        <div class="detail-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo post_custom('custom_image'); ?>" alt="お知らせの投稿記事画像" class="information-detail-img">
        </div>
        <div class="detail-text-parent">
          <?php the_content(); ?>
        </div>
      </div>

      <?php get_sidebar(); ?>

    </section>
  </main>

  <?php get_footer(); ?>