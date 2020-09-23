<?php get_header(); ?>
<body >
<?php if( get_field('bandeau_Titre_g') ): ?>
    <h2><?php the_field('bandeau_Titre_g'); ?></h2>
<?php endif; ?>

</body>

<?php get_footer() ?>