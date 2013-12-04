<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$fbSet = Configure::read('FB');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
        echo $this->Html->css( 'main', null, array( 'media' => 'screen, projection' ) );
        echo $this->Html->script('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
        echo $this->Html->script('bootstrap.min');
    ?>
    <!--[if lt IE 9 ]>
        <?php echo $this->Html->script('html5shiv'); ?>
        <?php echo $this->Html->script('respond.min'); ?>
    <![endif]-->
    <?php
        echo $this->Html->script('rut');
		echo $this->Html->script('validate');
		echo $this->Html->script('main');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');      
	?>
</head>
<body>
	<div class="container">
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
	</div>
	<div id="fb-root"></div>
        <script>
                window.fbAsyncInit = function() {
                        var flag = false;
                        FB.init({appId: '<?php echo $fbSet['APP_ID']; ?>', status: true, cookie: true, xfbml: true});
                        FB.Canvas.setAutoGrow();
                };
                (function() {
                        var e = document.createElement('script'); e.async = true;
                        e.src = document.location.protocol +
                                        '//connect.facebook.net/es_LA/all.js';
                        document.getElementById('fb-root').appendChild(e);
                }());
        </script>
</body>
</html>
