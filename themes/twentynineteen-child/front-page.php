<?php
/**
 * The main template file
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="bg-zenifes">
            <section id="event-block" class="event-block-area">
                <div class="section-inner">
                    <div class="-align--center">
                        <h2 class="front-subtitle -align--center -yellowliner -inline-block">銭函フェス２０１９　開催決定！</h2>
                        <div>
                            <span class="-block--only-sp">海の日、銭函が音楽につつまれます！</span>
                            <span class="-block--only-sp">今年もまた、のんびりとしつつも熱い一日がやってきます！</span>
                        </div>
                    </div>

                    <div class="event-infomation">
                        <div class="-flexbox">
                            <div class="-bg--blue -text--white -border-radius -align--center -spacing--wide">日時</div>
                            <div>2019年7月15日（月・祝：海の日）</div>
                        </div>
                        <div class="-flexbox">
                            <div class="-bg--blue -text--white -border-radius -align--center -spacing--wide">メインステージ</div>
                            <div>光超寺（メイン会場）　小樽市銭函２丁目６−１</div>
                        </div>
                        <div class="-flexbox">
                            <div class="-bg--blue -text--white -border-radius -align--center -spacing--wide">カフェステージ</div>
                            <div>
                                <span class="-block">しろくまコーヒー／レストラン癒月／</span>
                                <span class="-block">Cafe&Hall Matano／View Cafe／sunaie</span>
                                <span class="-block">※会場について　<a href="<?php echo esc_url( home_url( '/' ) ); ?>stage" class="-text--lgray -text--underline"> 詳しくはこちら</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="news-block" class="news-block-area">
                <div class="section-inner">
                    <h3 class="-font-size--medium">お知らせ</h3>
                    <div class="news-list -border-radius -bg--white">
                        <ul>
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
                    </div>
                </div>
            </section>
        </div>
        <section id="video-block" class="video-block-area -bg--lgray -align--center ">
            <div class="section-inner">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/5qEX3kgxFwk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>「この海越えて」 Kiho × 中田雅史　　作詞・作曲：中田雅史</p>
            </div>
        </section>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
