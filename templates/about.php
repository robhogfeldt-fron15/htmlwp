
<?php
/**
 * Template Name: About Page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underrob
 */

get_header(); ?>

<section id="content" role="main">
	<?php the_content(); ?>
		<!-- <div class="featured-image-header">
				<img src="http://static2.bigstockphoto.com/thumbs/4/3/6/large2/63449344.jpg"  alt="" />
			</div>-->
      <div class="featured-image-header">
      			<div id="">
      				<img src="<?php echo esc_url (get_template_directory_uri()); ?> ./images/fullscreen01.jpg" alt="">
      			</div>
      		</div>
      <div class="wrapper">
    			<!-- WYSIWYG starts here __-->
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Heading 1</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<h1>It's just like the story of the grasshopper and the octopus.</h1>
    				</div>
    			</div>
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Heading 2</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<h2>All year long, the grasshopper kept burying acorns for winter</h2>
    				</div></div>
    				<div class="column-grid column-grid-5"><div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Heading 3</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<h3>While the octopus mooched off his girlfriend</h3>
    				</div></div>
    				<div class="column-grid column-grid-5"><div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Heading 4</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<h4>But then the winter came, and the grasshopper died</h4>
    				</div>
    			</div>
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Heading 5</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<h5>And the octopus ate all his acorns. Also he got a race car.</h5>
    				</div>
    			</div>
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Heading 6</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<h6>Is any of this getting through to you? Are you crazy?</h6>
    				</div>
    			</div>
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Paragraph ExtraBig</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<p><span class="extrabig">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span></p>
    				</div>
    			</div>
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Paragraph Big</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<p><span class="big">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span></p>
    				</div>
    			</div>
    			<div class="column-grid column-grid-5">
    				<div class="column column-span-1 column-push-0 column-first">
    					<p><span class="small">Paragraph Normal</span></p>
    				</div>
    				<div class="column column-span-4 column-push-0 column-last">
    					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
    				</div>
    			</div>

    			<p>&nbsp;</p>
    			<hr>
    			<p>&nbsp;</p>

    			<h2>Colorful Buttons</h2>
    			<p>Use these buttons with WYSIWYG format style: create a link with href, select it and choose a “button” format style from the Formats dropdown. Choose a color for a button from the dropdown as well.</p>
    			<p><a class="button black">Black</a>   <a class="button grey">Grey</a>   <a class="button brown">Brown</a>   <a class="button green">Green</a>   <a class="button teel">Teel</a>   <a class="button orange">Orange</a>   <a class="button yellow">Yellow</a>   <a class="button red">Red</a>   <a class="button pink">Pink</a>   <a class="button purple">Purple</a>   <a class="button blue">Blue</a>   <a class="button indigo">Indigo</a></p>

    			<p>&nbsp;</p>
    			<hr>
    			<p>&nbsp;</p>

    			<h2>Icons</h2>
    			<p>Use these icons via a shortcode:  <span class="blue"><strong>[</strong>icon type=”xyz”<strong>]</strong></span></p>
    			<div class="icons-showoff">
    				<p><i class="icon-menu"></i> menu</p>
    				<p><i class="icon-cart"></i> cart</p>
    				<p><i class="icon-search"></i> search</p>
    				<p><i class="icon-bubble"></i> bubble</p>
    				<p><i class="icon-checkmark"></i> checkmark</p>
    				<p><i class="icon-google-plus"></i> google-plus</p>
    				<p><i class="icon-facebook"></i> facebook</p>
    				<p><i class="icon-instagram"></i> instagram</p>
    				<p><i class="icon-twitter"></i> twitter</p>
    				<p><i class="icon-feed"></i> feed</p>
    				<p><i class="icon-youtube"></i> youtube</p>
    				<p><i class="icon-vimeo"></i> vimeo</p>
    				<p><i class="icon-flickr"></i> flickr</p>
    				<p><i class="icon-picassa"></i> picassa</p>
    				<p><i class="icon-dribbble"></i> dribbble</p>
    				<p><i class="icon-github"></i> github</p>
    				<p><i class="icon-tumblr"></i> tumblr</p>
    				<p><i class="icon-skype"></i> skype</p>
    				<p><i class="icon-linkedin"></i> linkedin</p>
    				<p><i class="icon-pinterest"></i> pinterest</p>
    				<p><i class="icon-calendar"></i> calendar</p>
    				<p><i class="icon-phone"></i> phone</p>
    				<p><i class="icon-monitor"></i> monitor</p>
    				<p><i class="icon-camera"></i> camera</p>
    				<p><i class="icon-film"></i> film</p>
    				<p><i class="icon-microphone"></i> microphone</p>
    				<p><i class="icon-checkmark2"></i> checkmark2</p>
    				<p><i class="icon-checkmark3"></i> checkmark3</p>
    				<p><i class="icon-cog"></i> cog</p>
    				<p><i class="icon-pictures"></i> pictures</p>
    				<p><i class="icon-time"></i> time</p>
    				<p><i class="icon-chart"></i> chart</p>
    				<p><i class="icon-location"></i> location</p>
    				<p><i class="icon-lab"></i> lab</p>
    				<p><i class="icon-mouse"></i> mouse</p>
    				<p><i class="icon-medal"></i> medal</p>
    				<p><i class="icon-locked"></i> locked</p>
    				<p><i class="icon-lamp2"></i> lamp2</p>
    				<p><i class="icon-lamp"></i> lamp</p>
    				<p><i class="icon-diamond"></i> diamond</p>
    				<p><i class="icon-equalizer"></i> equalizer</p>
    				<p><i class="icon-clipboard"></i> clipboard</p>
    			</div>
    			<p class="small">* You can create your own icon set with <a href="https://icomoon.io/app/#/select" target="_blank">https://icomoon.io/app/#/select</a></p>

    			<p>&nbsp;</p>
    			<hr>
    			<p>&nbsp;</p>

    			<div class="column-grid column-grid-3"><div class="column column-span-1 column-push-0 column-first">
    				<h2>Accordion</h2>
    				<div class="whistles whistles-accordion">
    					<h3 class="whistle-title" aria-selected="true">Accordion 1 Title</h3>
    					<div class="whistle-content" style="display: block;"><p>This accordion was created with the super-easy Whistles plugin. You just create an accordion or a tab, add it to an accordion or tab group and place it to a post! It’s quick, effective and theme-tranferable.</p></div>
    					<h3 class="whistle-title">Accordion 2 Title</h3>
    					<div class="whistle-content" style="display: none;"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p></div>
    					<h3 class="whistle-title">Accordion 3 Title</h3>
    					<div class="whistle-content" style="display: none;"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p></div>
    				</div>
    			</div>

    			<div class="column column-span-1 column-push-0">
    				<h2>Toggle</h2>
    				<div class="whistles whistles-toggle">
    					<h3 class="whistle-title">Accordion 1 Title</h3>
    					<div class="whistle-content" style="display: none;"><p>This accordion was created with the super-easy Whistles plugin. You just create an accordion or a tab, add it to an accordion or tab group and place it to a post! It’s quick, effective and theme-tranferable.</p></div>
    					<h3 class="whistle-title">Accordion 2 Title</h3>
    					<div class="whistle-content" style="display: none;"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p></div>
    					<h3 class="whistle-title">Accordion 3 Title</h3>
    					<div class="whistle-content" style="display: none;"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p></div>
    				</div>
    			</div>

    			<div class="column column-span-1 column-push-0 column-last">
    				<h2>Tabs</h2>
    				<div class="whistles whistles-tabs">
    					<ul class="whistles-tabs-nav"><li class="whistle-title" aria-selected="true"><a href="#whistle-tabs-horizontal-155-1318053529" aria-selected="true">Tab 1</a></li><li class="whistle-title"><a href="#whistle-tabs-horizontal-156-1318053529" aria-selected="true">Tab 2</a></li><li class="whistle-title"><a href="#whistle-tabs-horizontal-157-1318053529" aria-selected="true">Tab 3</a></li></ul><!-- whistles-tabs-nav -->
    					<div class="whistles-tabs-wrap">
    						<div id="whistle-tabs-horizontal-155-1318053529" class="whistle-content" style="display: block;"><h3>Tab 1 Title</h3>
    							<p>These tabs can also be quickly created with the Whistles plugin. Just go to Appearance &gt; Whistles in your admin panel and create some tabs! They can then easily be added via a button to any post, page or another whistle!</p>
    						</div>
    						<div id="whistle-tabs-horizontal-156-1318053529" class="whistle-content" style="display: none;"><h3>Tab 2 Title</h3>
    							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
    						</div>
    						<div id="whistle-tabs-horizontal-157-1318053529" class="whistle-content" style="display: none;"><h3>Tab 3 Title</h3>
    							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
    						</div>
    					</div><!-- .whistles-tabs-wrap -->
    				</div><!-- .whistles-tabs -->
    			</div>

    			<hr class="divider">

    			<div class="column-grid column-grid-3">
    				<div class="column column-span-1 column-push-0 column-first">
    					<h2>Alert Boxes</h2>
    					<div class="notice error">
    						<p><strong>Error</strong> – Your message!</p>
    					</div>
    					<div class="notice success">
    						<p><strong>Success</strong> – Your message!</p>
    					</div>
    					<div class="notice info">
    						<p><strong>Info</strong> – Your message!</p>
    					</div>
    					<div class="notice">
    						<p><strong>Notice</strong> – Your message!</p>
    					</div>
    				</div>
    				<div class="column column-span-1 column-push-0">
    					<div class="card">
    						<h2>Image with Caption</h2>
    						<figure class="image-with-caption">
    							<img src="<?php echo esc_url (get_template_directory_uri()); ?> ./images/cheese.jpg" alt="">
    							<figcaption>
    								<h3><strong>Caption</strong></h3>
    								<p>Donec sit amet purus eu felis sodales cursus in ac tortor quisque sollicitudin metus ligula, eget auctor sapien lacinia in.</p>
    							</figcaption>
    						</figure>
    					</div>
    				</div>
    				<div class="column column-span-1 column-push-0 column-last">
    					<h2>Blockquote</h2>

    					<blockquote>
    						<p>I am a blockquote with an image inserted in. I would say something nice, but I am so handsome I just don’t need to!”</p>
    					</blockquote>
    					<p class="circle-image"><img src="imgs/photography/user.jpg" alt=""></p>
    					<p class="no-padding "><strong class="small">JOHN SMITH</strong></p>
    					<p class=""><span class="grey extrasmall">CEO of Attitude, Ltd.</span></p>
    				</div>
    			</div>

    			<hr class="divider">

    			<div class="colorful-content-box">
    				<p><strong>This colorful content box has something to say!… Or not?</strong>        <a class="button yellow" href="#">I want to be clicked</a></p>
    			</div>

    			<hr class="divider">

    			<!-- WYSIWYG ends here __-->
    		</div><!-- END .wrapper -->

    	</div>





<?php get_footer(); ?>
