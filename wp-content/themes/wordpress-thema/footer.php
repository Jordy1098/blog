<footer>
<!--    --><?php
//    if ( is_home() ) :
//        get_footer( 'home' );
//    elseif ( is_404() ) :
//        get_footer( '404' );
//    else :
//        get_footer();
//    endif;
//    ?>

    <div class="footer-1">
    <?php
    if (is_active_sidebar('footer-1')){
        dynamic_sidebar('footer-1');
    }
    ?>
    </div><div class="footer-2">
    <?php
    if (is_active_sidebar('footer-2')){
        dynamic_sidebar('footer-2');
    }
    ?>
    </div><div class="footer-3">
    <?php
    if (is_active_sidebar('footer-3')){
        dynamic_sidebar('footer-3');
    }
    ?>
    </div><div class="footer-4">
    <?php
    if (is_active_sidebar('footer-4')){
        dynamic_sidebar('footer-4');
    }
    ?>
    </div>
<!--    -->
<!--    <aside class="fatfooter" role="complementary">-->
<!--        <div class="first quarter left widget-action"></div>-->
<!--        <div class="second quarter widget-action"></div>-->
<!--        <div class="third quarter widget-action"></div>-->
<!--        <div class="fourth quarter right widget-action"></div>-->
<!--        -->
<!--    </aside>-->
</footer>

<?php wp_footer()?>