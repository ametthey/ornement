<?php get_header(); ?>

<!-- golden is silence; -->

<div id="container">
    <?php if ( have_rows( 'left' ) ) : ?>
    <div class="container__left">
        <?php while ( have_rows( 'left' ) ) : the_row(); ?>
            <?php if ( have_rows( 'left_repeater' ) ): ?>
                <?php while ( have_rows( 'left_repeater' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'texte' ) : ?>
                    <div class="item">
                        <h4><?php the_sub_field( 'texte' ); ?></h4>
                    </div>
                    <?php elseif ( get_row_layout() == 'image' ) : ?>
                    <div class="item">
                        <?php if ( get_sub_field( 'image' ) ) : ?>
                        <img src="<?php the_sub_field( 'image' ); ?>" />
                        <?php endif ?>
                    </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
    <?php endif; ?>
    </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>



    <?php if ( have_rows( 'right' ) ) : ?>
    <div class="container__right">
        <!-- wher -->
        <?php while ( have_rows( 'right' ) ) : the_row(); ?>
            <?php if ( have_rows( 'right_repeater' ) ): ?>
                <?php while ( have_rows( 'right_repeater' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'texte' ) : ?>
                    <div class="item">
                        <h4><?php the_sub_field( 'texte' ); ?></h4>
                    </div>
                    <?php elseif ( get_row_layout() == 'image' ) : ?>
                    <div class="item">
                        <?php if ( get_sub_field( 'image' ) ) : ?>
                        <img src="<?php the_sub_field( 'image' ); ?>" />
                        <?php endif ?>
                    </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else: ?>
                <?php // no layouts found ?>
    <?php endif; ?>
    </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

</div>

<?php get_footer(); ?>
