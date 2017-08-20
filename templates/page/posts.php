<section class="center">
    <?php for ($i = 1, $totalPosts = count($posts); $i <= $totalPosts; $i++): ?>
        <article>
            <h3><a href="<?php echo site_url('post?id=' . $i) ?>"><?php echo $posts[$i]['title'] ?></h3>
            <p><?php echo mb_strimwidth(strip_tags($posts[$i]['description']), 0, 150, '...') ?></p>

            <?php if ($i ==! $totalPosts): ?>
                <hr />
            <?php endif ?>
        </article>
    <?php endfor ?>
</section>