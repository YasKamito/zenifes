<?php
/**
 * The main template file
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

        <div class="container">

            <h2 class="-align--center -font-size--large">銭函フェス２０１９　開催決定！</h2>
            
            <div class="-align--center">
                <span class="-block--only-sp">海の日、銭函が音楽につつまれます！</span>
                <span class="-block--only-sp">今年もまた、のんびりとしつつも熱い一日がやってきます！</span>
            </div>

            <div class="event-infomation">
                <div>
                    <span class="-bg--blue -text--white -border-radius -inline-block -align--center">日時</span>
                    <span class="-inline-block">2019年7月15日（月・祝：海の日）</span>
                </div>
                <div>
                    <span class="-bg--blue -text--white -border-radius -inline-block -align--center">メインステージ</span>
                    <span class="-inline-block">光超寺（メイン会場）　小樽市銭函２丁目６−１</span>
                </div>
                <div>
                    <span class="-bg--blue -text--white -border-radius -inline-block -align--center">カフェステージ</span>
                    <span class="-inline-block">しろくまコーヒー／レストラン癒月／Cafe&Hall Matano／View Cafe／sunaie　　※会場について　<a href=""> 詳しくはこちら</a></span>
                </div>
            </div>

            <section id="news-block" class="news-block-erea">
            <h3>お知らせ</h3>
            <ul class="news">
            <?php
            // Get Post
            $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
            );
            $newslist = get_posts( $args );
            foreach( $newslist as $post ): ?>
            <li>
                <div class="entry-meta">
                <?php echo esc_html( get_the_time( 'Y.m.d' )); ?>
                </div><!-- .entry-meta -->
                <div class="post-title">
                <a href="<?php the_permalink(); ?>">
                    <?php echo $post->post_title; ?>
                </a>
                </div>
            </li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
            </ul>

            </section>

            <section id="video-block" class="video-block-erea">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/atXa6xuBasg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            </section>
        </div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
