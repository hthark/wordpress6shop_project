<?php
	/* <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" >
	<meta name="viewport" content="width=device-width" >
	<title><?php wp_title( '|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/%fn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

<style>

*{
	list-style:none;
	text-decoration:none;
	paddig:0px;
	margin:0px;
}
body, html{
	margin:0;
	margin-top:0;
	padding:0;
	overflow-x:hidden;
}
a:link, a:visited, a:active, a:hover{
	text-decoration:none;
}
.header_container{
	margin:0;
	padding:15px 10px 15px 10px;
	border-bottom:solid 1px #4cbfff;
	border-left:solid 1px #9a9;
	border-right:solid 1px #9a9;
	border-top:solid 1px #9a9;

	font-family:sans-serif;
	height:150px;

	background-image:url('<?php bloginfo('template_url');?>/img/header05.jpg');
	background-repeat:no-repeat;
}
#logo{
	display:inline-block;
	width:149px;
	height:75px;
	background:url('<?php bloginfo('template_url');?>/img/Logo01.png') no-repeat;
	background-size:cover;
}
#logo:hover{
	border-bottom:solid 1px #565;
	border-left:solid 1px #9a9;
	border-right:solid 1px #565;
	border-top:solid 1px #9a9;
}
.autocamping_bottom{
	background-color:#333333;
	width:100%;
	color:#eeeeee;
	text-align:center;
	padding:10px;
	border-top:1px solid #aaa;
	border-bottom:1px solid #aaa;
	height:25px;
}
.container{
	display:table;
	height:100%;
	width:100%;
}
.container-box{
	display:table-row;
}
.sidebar, .main-content{
	display:table-cell;
	padding:15px;
}
.sidebar{
	background:#ffffff;
	border-left:1px solid #ccc;
	width:25%;
}
.main-content{
	background:#fff;
	border-right:solid 15px #ffffff;
}
hr{
	display:block;
	margin-top:0.5cm;
	margin-bottom:0.5cm;
	margin-left:auto;
	margin-right:auto;
	border-style:inset;
	border-width:1px;
}
nav{
	float:left;
	width:100px;
	height:33px;
	background-color:#4cb6ea;
	position:relative;
}
nav > ul{
	float:right;
	width:100%;
	height:149%;
}
nav > ul > li{
	float:left;
	width:auto;
	line-height:22px;
}
nav > ul li a{
	color:#ffffff;
	font-family:sans-serif;
	font-size:14px;
	display:block;
	background-color:#4cb6ea;
	border-radius:3px;
	padding:5px;
	padding-left:15px;
	padding-right:15px;
}
nav > ul li:hover a:hover{
	color:$555555;
	background:#555555;
}
nav > ul > li > ul {
	display:none;
}
nav > ul > li:hover > ul {
	display:block;
}
.subbox1, .subbox2, .subbox3{
	display:table-cell;
	padding:20px;
	border:1px; solid #555555;
	background:#444444;
	color:#ffffff;
	font-family:sans-serif;

	width:30%;
	min-width:250px;
}
.subbox1{
}
.subbox2{
}
.subbox3{
}
</style>
</head>

<body>
	<div class="header_container">
	
	<a id="logo" href="<?php echo esc_url(home_url('/')); ?>"></a>
	</div>

	<?php
	/*wp_nav-menu(array(
		'theme_location' => 'first_nav', 
		'container_id' => 'main-nav', 
		'walker' => new themeslug_walker_nav_menu();
		));*/
	?>
