<div class="sidebar"> 
	<ul> 
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				<h2>Categories</h2>  
				<ul>
					<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>
				</ul>   
			</li>
			<li>
			<h2>Abonnez-vous au blog !</h2>   
				<ul>   
					<li>
						<a href="<?php bloginfo('rss2_url'); ?>" title="Flux RSS des articles">Flux RSS des articles</a>
					</li> 
					<li>
						<a href="<?php bloginfo('comments_rss2_url'); ?>" title="Flux RSS des commentaires">Flux RSS des commentaires</a>
					</li>   
				</ul> 
			</li>
			<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
			<li id="search">
				<?php include(TEMPLATEPATH . '/searchform.php'); ?>
				<h3><?php wp_loginout(); ?>	</h3>
			</li>
		<?php endif; ?>
	</ul>
</div>
<div class="container2">
