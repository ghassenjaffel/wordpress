<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
</head>

<body>
<div class="container-full">
    <div class="row">
        <div class="col-lg-12">
            <div >
                <div class="logoheader">
                       <img src="<?php bloginfo('template_url');?>/test_images/head-georges-mak.png" >
                </div>
                <div>
                <ul class=" headerul bande right_pos">
                        <li class="headerli"> <a  href=""> FRANÇAIS |</a></li>
                        <li class="headerli"> <a  href=""> РОССИЯ |  </a></li>
                        <li class="headerli"> <a  href=""> ENGLISH   </a></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page" class="site">

	<div id="content" class="site-content">


    </div>
</div>
</body>
