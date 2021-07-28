<?php get_header(); ?>

<?php get_template_part('under'); ?>

<div class="inner">
    <p>
        お探しのページが見つかりませんでした。<br>
        再度、URLをご確認ください。
    </p>
    <p class="btn">
        <a href="<?php echo home_url('/'); ?>">TOPへ戻る</a>
    </p>
</div>

<?php get_footer(); ?>