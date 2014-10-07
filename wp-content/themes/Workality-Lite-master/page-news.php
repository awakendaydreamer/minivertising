<?php
	include_once("_header.php");

	//the_content();
	//the_author();
?>

    <div id="post-list" class="row" style="margin-top:0px">
<?php
	query_posts('cat=4');
	while (have_posts()) : the_post();

	$categories = get_the_category();
	if($categories){
		foreach($categories as $category) {
			$category_name = $category->cat_name;
		}
	}
?>

        <div class="post-<?=the_ID()?> post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized blogpost border-color">
          <h3><a href="<?= the_guid()?>" data-type="blog" data-id="<?= the_ID()?>" data-token="2f67468a67"><?=the_title()?></a></h3>
          <div class="title border-color">
            <strong>Category :</strong> <?=$category_name?>
            · by minivertising
            <div class="fb-like" data-href="<?= the_guid()?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
          </div>
          <a href="<?=the_guid()?>" data-type="blog" data-id="<?=the_ID()?>" data-token="2f67468a67">
<?php
	if (has_post_thumbnail())
	{
            the_post_thumbnail('full');
	}else{
?>
            <img width="305" height="230" src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/no-image.jpg" class="postThumb wp-post-image" alt="<?=the_title()?>" title="<?=the_title()?>" />
<?php
	}
?>
          </a>
          <p><?=the_excerpt()?></p>
        </div>
<?php
	endwhile;
?>
    </div>
<?php
	include_once("_footer.php");
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&appId=769243006468432&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>