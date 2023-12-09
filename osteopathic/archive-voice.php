<?php
 /*
 Template Name: archive-voice
 Template Post Type: post
 */
 ?>

<?php get_header();?>

  <main>
    <div class="voice-top-mv">
      <div class="voice-top-text">
        <h1 class="voice-mv-text voice-mv-back">Voice</h1>
        <p class="voice-mv-text1">お客様の声</p>
      </div>
      <div class="voice-mv-img-parent">
        <picture>
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/voice-mv-sp.png">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/voice-mv-pc.png">
          <img decoding="async" srcset="<?php echo get_template_directory_uri(); ?>/img/voice-mv-pc.png" alt="voiceメインビジュアル" loading="lazy" class="voice-mv-img">
        </picture>
      </div>
    </div>
    

    <section id="voice">
      <div class="voice">
        <ul class="voice-gp">

          <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
            // 投稿タイプ
              'post_type'      => 'post',
              // カテゴリー名
              'category_name' => 'voice',
              // 1ページに表示する投稿数
              'posts_per_page' => 5,
            );
            // データの取得
            $posts = get_posts($args);
          ?>

          <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>

          <li class="voice-parent">
            <div class="voice-img-parent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/<?php echo post_custom('custom_image'); ?>" alt="お客様のお顔" class="voice-img">
            </div>

            <div class="voice-text-gp">
              <p class="voice-name"><?php the_title(); ?></p>
              <p class="voice-comment">
                <?php the_content(); ?>
              </p>
            </div>
          </li>

          <?php endforeach; ?>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>

        </ul>
      </div>
    </section>
  </main>

  
  <?php get_footer(); ?>