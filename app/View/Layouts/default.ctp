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
<html>
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
