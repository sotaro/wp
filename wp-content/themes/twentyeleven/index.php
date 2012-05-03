<?php

require('header.php');

echo <<<EOB
		<div id="primary">
			<div id="content" role="main">
EOB;

if(have_posts()){
	twentyeleven_content_nav('nav-above');
	while (have_posts()){
		the_post();
		get_template_part('content', get_post_format());
	}
	twentyeleven_content_nav('nav-below');
}
else{
	$m1='Nothing Found';
	$m2='Apologies, but no results were found for the requested archive. '.
			'Perhaps searching will help find a related post.';
	echo <<<EOB
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">$m1</h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<p>$m2</p>
EOB;
  get_search_form();
	echo <<<EOB
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
EOB;
}

echo <<<EOB
			</div><!-- #content -->
		</div><!-- #primary -->
EOB;

require('sidebar.php');
//require('footer.php');
get_footer();
