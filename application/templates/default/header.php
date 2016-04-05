<?php
/**
 * Sample layout
 */

use Babita\Helpers\Assets;
use Babita\Helpers\Url;
use Babita\Core\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_CODE;?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<?php
	//hook for plugging in meta tags
	$hooks->run('meta');
	?>
	<title><?=$data['title'].' - '.SITETITLE; //SITETITLE defined in config/config.php ?></title>

	<!-- CSS -->
	<?php
	Assets::css(array(
		'//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
		Url::base() . 'assets/css/style.css',
	));

	//hook for plugging in css
	$hooks->run('css');
	?>

</head>
<body>
<?php
//hook for running code after body tag
$hooks->run('afterBody');
?>

<div class="container">
