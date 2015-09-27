<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

// If you haven't composer:
//require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
//Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('application/views');
$twig = new Twig_Environment($loader);

// To get twig cache
//$twig = new Twig_Environment($loader, array(
//    'cache' => 'application/cache/twig',
//));

echo $twig->render('welcome_message.php', array('name' => 'Fabien'));
//$template = $twig->loadTemplate('welcome_message.php');
//echo $template->render(array('the' => 'variables', 'go' => 'here'));

	}
}
