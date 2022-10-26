<?php
$blog_query = new WP_Query(
	array(
		'post_type'      => 'blog',
		'posts_per_page' => 3,
	)
);

?>

<?php get_header(); ?>
</section>
<main id="main">
    <section class="blog">
        <div class="ttl inner">
            <div class="ttl section-ttl">
                <h2 class="robot ttl-text1">BLOG</h2>
                <p class="ttl-text2 notosans">What I think</p>
            </div>

            <!--
            <h2 class="robot ttl-text1">BLOG</h2>
            <p class="notosans ttl-text2">ブログ</p>
            -->
        </div>

        <?php if ($blog_query->have_posts()): ?>
        <ul class="blog-content">
        <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>">
                <p class="blog-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '' ); ?></a></p>
                <dl class="notosans">
                    <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
                    <dd><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></dd>
                </dl>
                <p class="viewmore"><a href="<?php the_permalink(); ?>">view more</a></p>
            </li>
        <?php endwhile; ?>
        <?php else: ?>
            <p>記事はありません。</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        </ul>
        <p class="button-container robot"><a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">MORE</a>
        </p>
    </section>
</main>
<?php get_footer(); ?>
