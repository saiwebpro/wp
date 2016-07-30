<?php



/*


Template Name: State v5



*/




get_header();



$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );


?>



<body <?php body_class('primary'); ?>>



<?php 




get_template_part('partials/content', 'header') ?>



<!------------------------------------------------------


 This is the structural build for Divi Page Builder


------------------------------------------------------->


<div id="page-container">



<div id="et-main-area">	

<div id="main" >


<?php if ( ! $is_page_builder_used ) : ?>


	<div class="container">

		<div id="content-area" class="clearfix">


			<div id="left-area">


<?php endif; ?>


			<?php while ( have_posts() ) : the_post(); ?>


				


<main class="main-primary">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>




					<div class="entry-content">


					<?php


						the_content();


						if ( ! $is_page_builder_used )



							wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>

					</div> <!-- .entry-content -->



				<?php

					if ( ! $is_page_builder_used && comments_open() && 'on' === et_get_option( 'divi_show_pagescomments', 'false' ) ) comments_template( '', true );


				?>


				</article> <!-- .et_pb_post -->
</main>
				<span class="return-top"></span>
				

			<?php endwhile; ?>


<?php if ( ! $is_page_builder_used ) : ?>



			</div> <!-- #left-area -->


			<?php get_sidebar(); ?>



		</div> <!-- #content-area -->



	</div> <!-- .container -->


<?php endif; ?>


</div> <!-- #main-content --> 




</div> <!-- #et-main-area --> 



</div> <!-- page-container -->



<?php get_footer(); ?>

</body>