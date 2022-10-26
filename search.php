<?php get_header(); ?>
</section>
<main>
    <?php
    $s = $_GET['s'];
    $placenum = $_GET['placenum'];
    $low = $_GET['low'];
    $high = $_GET['high'];
    $post_tag = $_GET['kodawari'];

    if ($post_tag) {
        $taxquerysp[] = array(
            'taxonomy' => 'kodawari',
            'terms' => $post_tag,
            'include_children' => false,
            'field' => 'slug',
            'operator' => 'AND'
        );
    }

    if ($placenum) {
        $taxquerysp[] = array(
            'taxonomy' => 'place',
            'terms' => $placenum,
            'include_children' => false,
            'field' => 'slug',
            'operator' => 'AND'
        );
    }
    $taxquerysp['relation'] = 'AND';

    ?>

    <?php if ($s) { ?>検索キーワード：<?php echo $s; ?><br><?php } ?>
    <?php if ($placenum) { ?>間取りタイプ：<?php echo get_term_by('slug', $placenum, "place")->name; ?><br><?php } ?>
    <?php
    if (is_array($post_tag)) { ?>こだわり(タグ)：<?php
        foreach ($post_tag as $val) {
            if ($val === end($post_tag)) {
                echo get_term_by('slug', $val, "post_tag")->name;
            } else {
                echo get_term_by('slug', $val, "post_tag")->name . ", ";
            }
        }
        ?><br><br><?php } ?>

    <?php

    query_posts(array(
            'tax_query' => $taxquerysp,
            's' => $s,
        )
    );

    ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div><?php the_title(); ?></div>
    <?php endwhile; else : ?>

        該当なし

    <?php endif;
    wp_reset_query(); ?>
</main>
<?php get_footer(); ?>
