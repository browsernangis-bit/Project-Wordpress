<?php

/**
 * Title: Blog masthead
 * Slug: the-family-blog/hero-blog
 * Categories: the-family-blog-sections, featured, banner
 * Description: A split masthead with the blog name, an introduction, two calls to action and a full-height family photograph.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|superbspacing-large","right":"var:preset|spacing|superbspacing-small","bottom":"var:preset|spacing|superbspacing-large","left":"var:preset|spacing|superbspacing-small"},"blockGap":"var:preset|spacing|superbspacing-small","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"mono-4","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-mono-4-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--superbspacing-large);padding-right:var(--wp--preset--spacing--superbspacing-small);padding-bottom:var(--wp--preset--spacing--superbspacing-large);padding-left:var(--wp--preset--spacing--superbspacing-small)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|superbspacing-small","left":"var:preset|spacing|superbspacing-small"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|superbspacing-small","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:paragraph {"style":{"spacing":{"blockGap":"var:preset|spacing|superbspacing-xxsmall"}}} -->
<p><?php echo esc_html__('A journal in progress', 'the-family-blog'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"spacing":{"blockGap":"var:preset|spacing|superbspacing-xxsmall","margin":{"top":"var:preset|spacing|superbspacing-xsmall"}}},"textColor":"mono-1"} -->
<h1 class="wp-block-heading has-mono-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--superbspacing-xsmall)"><?php echo esc_html__('Ordinary days, written down.', 'the-family-blog'); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|superbspacing-small"}}},"textColor":"mono-2","fontSize":"superbfont-small"} -->
<p class="has-mono-2-color has-text-color has-superbfont-small-font-size" style="margin-bottom:var(--wp--preset--spacing--superbspacing-small)"><?php echo esc_html__('Two small children, one draughty house, and the parts of the week worth keeping. Written slowly, mostly at the kitchen table.', 'the-family-blog'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|superbspacing-small","margin":{"bottom":"var:preset|spacing|superbspacing-small"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--superbspacing-small)"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontSize":"superbfont-xsmall"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-superbfont-xsmall-font-size has-custom-font-size wp-element-button" href="#"><?php echo esc_html__('Start reading', 'the-family-blog'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"4px"},"blockGap":"0"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px","style":"solid"},"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-style:solid;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-bottom:4px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"superbfont-xsmall"} -->
<p class="has-primary-color has-text-color has-superbfont-xsmall-font-size" style="font-style:normal;font-weight:500"><a href="#"><?php echo esc_html__('Newest entry →', 'the-family-blog'); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|superbspacing-small"},"blockGap":"var:preset|spacing|superbspacing-xsmall"},"border":{"top":{"color":"var:preset|color|mono-3","width":"1px","style":"solid"},"right":{"width":"0px","style":"none"},"bottom":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--mono-3);border-top-style:solid;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--superbspacing-small)"><!-- wp:image {"width":"48px","height":"48px","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"999px"}}} -->
<figure class="wp-block-image size-large is-resized has-custom-border"><img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/author.webp'); ?>" alt="<?php echo esc_attr__('The parent who writes this blog, holding a mug in a sunlit room', 'the-family-blog'); ?>" style="border-radius:999px;object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"textColor":"mono-2","fontSize":"superbfont-xsmall"} -->
<p class="has-mono-2-color has-text-color has-superbfont-xsmall-font-size"><?php echo wp_kses_post(__('Written by <strong>Elin Marsh</strong> since 2019', 'the-family-blog')); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"blockGap":"15px","padding":{"right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/hero-family.webp'); ?>","alt":"<?php echo esc_attr__('A parent and two young children walking hand in hand through a sunlit front room', 'the-family-blog'); ?>","dimRatio":10,"focalPoint":{"x":0.99,"y":0.5},"overlayColor":"base","minHeight":640,"contentPosition":"bottom left","isDark":false,"style":{"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="border-radius:0px;min-height:640px"><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__('A parent and two young children walking hand in hand through a sunlit front room', 'the-family-blog'); ?>" src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/hero-family.webp'); ?>" style="object-position:99% 50%" data-object-fit="cover" data-object-position="99% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-10 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|superbspacing-xxsmall","right":"var:preset|spacing|superbspacing-xsmall","bottom":"var:preset|spacing|superbspacing-xxsmall","left":"var:preset|spacing|superbspacing-xsmall"},"blockGap":"var:preset|spacing|superbspacing-xxsmall"},"border":{"radius":"4px"}},"backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--superbspacing-xxsmall);padding-right:var(--wp--preset--spacing--superbspacing-xsmall);padding-bottom:var(--wp--preset--spacing--superbspacing-xxsmall);padding-left:var(--wp--preset--spacing--superbspacing-xsmall)"><!-- wp:paragraph {"textColor":"featured","fontSize":"superbfont-tiny"} -->
<p class="has-featured-color has-text-color has-superbfont-tiny-font-size">●</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontStyle":"normal","fontWeight":"500"}},"textColor":"mono-1","fontSize":"superbfont-tiny"} -->
<p class="has-mono-1-color has-text-color has-superbfont-tiny-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html__('The front room, 7.42am', 'the-family-blog'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->