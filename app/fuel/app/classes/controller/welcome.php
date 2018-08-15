<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		return Response::forge(View::forge('welcome/index'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}

  public function action_test() {

    $data = new stdClass();

    // title
    $data->head_title = "page for test";
    $data->body_title = "title of body";

    // contents
    $data->myname = "Toshiki Ohnogi";
    $data->place = "Yokohama";
    $data->age = 24;

    // return
    return Response::forge(View::forge('welcome/test', $data));
  }

  public function action_test_array() {
    $data = array();
    $data['name'] = 'nogi';
    return Response::forge(View::forge('welcome/test_array', $data));
  }

  public function action_test_object() {
    $data = new stdClass();
    $data->name = 'nogi';
    return Response::forge(View::forge('welcome/test_object', $data));
  }
}
