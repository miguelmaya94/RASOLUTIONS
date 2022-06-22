<?php get_header(); ?>
<div class="container">
<div class="row">
<main class="cl-md-9">
<section class="archive-container">
<h2 class="archive-title">

<?php
	if(is_category()){
	single_cat_title();
		}elseif(is_tag()){
		single_tag_title();
			}elseif(is_day()){
			echo"Daily Archives: " . get_the_date();
				}elseif(is_month()){
				echo "monthly Archives:" . get_the_date('F Y');
				}elseif(is_year()){
				echo "Yearly Archives:" . get_the_date('Y');
			}else{
			echo "Archives";
}
?>
</h2> /.archive-title


<?php
if(have_posts()){
	while(have_posts()){
	the_post(); ?>
	<article class="individual-post">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<?php
	//dislpays author and publish date links
	post_data();
	?>

	<?php the_post_thumbnail('medium'); ?>
	<?php the_excerpt(); ?>
	</article>
	<?php
	}
	}
	?>

</section>
</main>
</div>
</div>
<?php get_footer(); ?>