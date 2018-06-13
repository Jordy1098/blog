<?php include "header.php"; ?>
<body>

<div class="container">
    <?php show_admin_bar(true)?>
    <header>
        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
        <nav>
            <ul>
                <li class="nav-a"><?php wp_nav_menu(); ?></li>
            </ul>
        </nav>
    </header>
    <div class="center">
        <main>
            <?php $the_query = new WP_Query('posts_per_page=5'); ?>



            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>



                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>


            <?php

            endwhile;

            wp_reset_postdata();

            ?>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_title( '<h2>', '</h2>' );// puts the title in h3 tags

                the_content(); // adds the content
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>

        </main>
       <?php include "aside.php";?>
    </div>
    <?php include "footer.php"; ?>
</div>
</body>
</html>