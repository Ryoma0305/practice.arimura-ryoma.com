<?php
$post_type = 'room';
?>

<?php get_header(); ?>
</section>
<main id="main">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <label for="s" class="assistive-text">検索</label>
        <input type="text" class="field" name="s" id="s" placeholder="検索"/>

        <select name="placenum" style="margin-top:20px;">
            <option value="" selected>間取りタイプ(カスタムタクソノミー)</option>
            <?php
            $taxonomy_name = 'place';
            $taxonomys = get_terms($taxonomy_name);
            if (!is_wp_error($taxonomys) && count($taxonomys)):
                foreach ($taxonomys as $taxonomy):
                    $tax_posts = get_posts(array('post_type' => $post_type , 'taxonomy' => $taxonomy_name, 'term' => $taxonomy->slug));
                    if ($tax_posts):
                        ?>
                        <option value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></option>
                    <?php
                    endif;
                endforeach;
            endif;
            ?>
        </select>

        <div style="margin-top:20px">こだわり(タグ)</div>
        <?php
        $taxonomy_name = 'kodawari';
        $taxonomys = get_terms($taxonomy_name);
        if (!is_wp_error($taxonomys) && count($taxonomys)):
            foreach ($taxonomys as $taxonomy):
                $tax_posts = get_posts(array('post_type' => $post_type, 'taxonomy' => $taxonomy_name, 'term' => $taxonomy->slug));
                if ($tax_posts):
                    ?>
                    <label><input type="checkbox" name="post_tag[]"
                                  value="<?php echo $taxonomy->slug; ?>"><?php echo $taxonomy->name; ?></label><br>
                <?php
                endif;
            endforeach;
        endif;
        ?>

        <input type="submit" class="submit" name="submit" id="searchsubmit" value="検索"/>
    </form>
</main>
<?php get_footer(); ?>
