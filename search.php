<?php get_header(); ?>
<div class="header-main haeder-main-lowerpage">
<div class="header-main-text haeder-main-lowerpage-content">
			<h2 class="robot haeder-main-lowerpage-content-ttl">BLOG</h2>
		</div>
	</div>
	</section>
<main>
	<section class="blog-archive blog">
		<div class="blog-archive-container">
		<div class="p-blog_form-wrapper">
            <form class="p-blog_search-group" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                <input class="p-blog__input" type="text" name="s" id="s" placeholder="SEARCH"/>
                <button class="p-blog__button" type="submit">検索する</button>
            </form>
        </div>
		<?php if (have_posts()): ?>
            <?php if (isset($_GET['s']) && empty($_GET['s'])): ?>
            <p class="p-search__result-text">検索キーワード未入力</p>
            <?php else: ?>
            <p class="p-search__result-text"> <?php echo '“' . $_GET['s'] . '”の検索結果：' . $wp_query->found_posts . '件' ?>  </p>
            <?php endif; ?>
            <ul class="blog-content">
                <?php while (have_posts()): the_post(); ?>
                    <li id="post-<?php the_ID(); ?>">
                        <p class="blog-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '' ); ?></a></p>
                        <dl class="notosans">
                            <dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
                            <dd><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></dd>
                        </dl>
                        <p class="viewmore"><a href="<?php the_permalink(); ?>">view more</a></p>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        <?php else: ?>
            <p class="p-blog__no-post">検索されたキーワードにマッチする記事はありませんでした</p>
        <?php endif; ?>
		</div>
		<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>
	</section>
</main>
<?php get_footer(); ?>
