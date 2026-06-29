<?php
/**
 * Title: Consultation
 * Slug: nutri-coach/consultation
 * Categories: nutri-coach
 */

$img = get_template_directory_uri() . '/assets/images/';

$icon_1 = esc_url( $img . rawurlencode( 'daily-eating-habits.png' ) );
$icon_2 = esc_url( $img . rawurlencode( 'health-goal-discussion.png' ) );
$icon_3 = esc_url( $img . rawurlencode( 'simple-nutrition-tips.png' ) );
$icon_4 = esc_url( $img . rawurlencode( 'quick-diet-suggestions.png' ) );
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Consultation","categories":["consultation","services"],"patternName":"nutri-coach/consultation"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"0"}},"backgroundColor":"background-dark","layout":{"type":"constrained","wideSize":"1200px"}} -->
<section class="wp-block-group alignfull has-background-dark-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"65%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:65%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"12px","fontWeight":"600","letterSpacing":"var(--wp--custom--typography--letter-spacing--label)","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|primary"}}} -->
				<p class="has-text-color" style="color:var(--wp--preset--color--primary);margin-top:0;margin-bottom:0;font-size:12px;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--label);text-transform:uppercase">
					FREE Consultation
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"style":{"typography":{"fontWeight":"600","lineHeight":"1.15","letterSpacing":"var(--wp--custom--typography--letter-spacing--heading)","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading-text","fontSize":"heading-h2","fontFamily":"fraunces"} -->
				<h2 class="wp-block-heading has-heading-text-color has-text-color has-fraunces-font-family has-heading-h-2-font-size" style="margin-top:0;margin-bottom:0;font-style:normal;font-weight:600;letter-spacing:var(--wp--custom--typography--letter-spacing--heading);line-height:1.15">
					Free First Session to<br>
					Understand
					<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-light-color">
						Your Goals
					</mark>
				</h2>
				<!-- /wp:heading -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--large)","lineHeight":"var(--wp--custom--typography--line-height--body)","fontWeight":"400"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}}} -->
			<p class="has-text-color" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--large);font-weight:400;line-height:var(--wp--custom--typography--line-height--body)">
				Your complimentary consultation covers everything below, with no commitment and clear guidance on your next step.
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"24px"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"60px"}}}} -->
	<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0;padding-top:60px">

		<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"}}} -->
		<div class="wp-block-column has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;background-color:var(--wp--preset--color--white);padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">

			<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"color":{"background":"color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent)"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;background-color:color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent);min-height:0px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
					<!-- wp:image {"width":"24px","height":"24px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized">
						<img src="<?php echo $icon_1; ?>" alt="" style="object-fit:contain;width:24px;height:24px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","fontStyle":"normal","letterSpacing":"0em"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontFamily":"fraunces"} -->
					<h3 class="wp-block-heading has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:19px;font-style:normal;font-weight:600;letter-spacing:0em;line-height:var(--wp--custom--typography--line-height--card-title)">
						Daily Eating Habits
					</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
					<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">
						Understand your daily food pattern, meal timing and water intake to map your lifestyle.
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph-text"}}},"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"1px"},"spacing":{"padding":{"top":"24px"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
					<p class="has-paragraph-text-color has-text-color has-link-color has-medium-font-size" style="padding-top:24px;font-style:normal;font-weight:400;letter-spacing:1px">
						01
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"}}} -->
		<div class="wp-block-column has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;background-color:var(--wp--preset--color--white);padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">

			<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"color":{"background":"color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent)"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;background-color:color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent);min-height:0px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
					<!-- wp:image {"width":"24px","height":"24px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized">
						<img src="<?php echo $icon_2; ?>" alt="" style="object-fit:contain;width:24px;height:24px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","fontStyle":"normal","letterSpacing":"0em"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontFamily":"fraunces"} -->
					<h3 class="wp-block-heading has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:19px;font-style:normal;font-weight:600;letter-spacing:0em;line-height:var(--wp--custom--typography--line-height--card-title)">
						Health Goals Discussion
					</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
					<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">
						Identify your main goals &#8212; weight loss, better energy or improved digestion.
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph-text"}}},"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"1px"},"spacing":{"padding":{"top":"24px"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
					<p class="has-paragraph-text-color has-text-color has-link-color has-medium-font-size" style="padding-top:24px;font-style:normal;font-weight:400;letter-spacing:1px">
						02
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"}}} -->
		<div class="wp-block-column has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;background-color:var(--wp--preset--color--white);padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">

			<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"color":{"background":"color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent)"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;background-color:color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent);min-height:0px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
					<!-- wp:image {"width":"24px","height":"24px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized">
						<img src="<?php echo $icon_3; ?>" alt="" style="object-fit:contain;width:24px;height:24px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","fontStyle":"normal","letterSpacing":"0em"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontFamily":"fraunces"} -->
					<h3 class="wp-block-heading has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:19px;font-style:normal;font-weight:600;letter-spacing:0em;line-height:var(--wp--custom--typography--line-height--card-title)">
						Simple Nutrition Tips
					</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
					<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">
						Get 2&#8211;3 easy, practical tips you can apply right away for quick, realistic improvements.
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph-text"}}},"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"1px"},"spacing":{"padding":{"top":"24px"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
					<p class="has-paragraph-text-color has-text-color has-link-color has-medium-font-size" style="padding-top:24px;font-style:normal;font-weight:400;letter-spacing:1px">
						03
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"0","padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"color":"var:preset|color|border","width":"1px","style":"solid"},"color":{"background":"var:preset|color|white"}}} -->
		<div class="wp-block-column has-border-color has-background" style="border-color:var(--wp--preset--color--border);border-style:solid;border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;background-color:var(--wp--preset--color--white);padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px">

			<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"border":{"radius":{"topLeft":"8px","topRight":"8px","bottomLeft":"8px","bottomRight":"8px"}},"color":{"background":"color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent)"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"12px","right":"12px"},"blockGap":"0"},"dimensions":{"minHeight":"0px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-background" style="border-top-left-radius:8px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;background-color:color-mix(in oklab, var(--wp--preset--color--primary) 10%, transparent);min-height:0px;padding-top:12px;padding-right:12px;padding-bottom:12px;padding-left:12px">
					<!-- wp:image {"width":"24px","height":"24px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-resized">
						<img src="<?php echo $icon_4; ?>" alt="" style="object-fit:contain;width:24px;height:24px"/>
					</figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"19px","fontWeight":"600","lineHeight":"var(--wp--custom--typography--line-height--card-title)","fontStyle":"normal","letterSpacing":"0em"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|heading-text"}},"fontFamily":"fraunces"} -->
					<h3 class="wp-block-heading has-text-color has-fraunces-font-family" style="color:var(--wp--preset--color--heading-text);margin-top:0;margin-bottom:0;font-size:19px;font-style:normal;font-weight:600;letter-spacing:0em;line-height:var(--wp--custom--typography--line-height--card-title)">
						Quick Diet Suggestions
					</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"typography":{"lineHeight":"var(--wp--custom--typography--line-height--body-loose)","fontWeight":"400","fontStyle":"normal"},"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"text":"var:preset|color|paragraph-text"}},"fontSize":"medium"} -->
					<p class="has-text-color has-medium-font-size" style="color:var(--wp--preset--color--paragraph-text);margin-top:0;margin-bottom:0;font-style:normal;font-weight:400;line-height:var(--wp--custom--typography--line-height--body-loose)">
						Receive simple diet tweaks based on your current habits to upgrade daily food choices.
					</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|paragraph-text"}}},"typography":{"fontStyle":"normal","fontWeight":"400","letterSpacing":"1px"},"spacing":{"padding":{"top":"24px"}}},"textColor":"paragraph-text","fontSize":"medium"} -->
					<p class="has-paragraph-text-color has-text-color has-link-color has-medium-font-size" style="padding-top:24px;font-style:normal;font-weight:400;letter-spacing:1px">
						04
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
