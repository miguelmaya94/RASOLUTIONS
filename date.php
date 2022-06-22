<?php get_header(); ?>

<div class+"container">
	<div class="row">
		<div class="col-md-9">
		<h2 class="date-title"><?php
			if(is_day()){
				echo "Daily Archives: " . get_the_date();
			}
			elseif(is_month()){
				echo "Monthly Archives: " . get_the_date('F Y');
			}elseif(is_year()){
				echo "Yearly Archives: " . get_the_date('Y');
			}
			?>
			</h2>  <!-- /.date-title   -->

			<?php
			if(have_posts()){
				the_post(); ?>
				
				<article class="individual-post">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?>

					<?php
					//display author an publish date links
					post_data();
			}
			?>

			</h2><!-- /.date-title   -->
			</div><!-- /.col-md-9   -->
			</div> <!-- /.row -->
			</div><!-- /.container -->
			<?php get_footer(); ?>