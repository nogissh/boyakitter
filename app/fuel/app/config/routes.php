<?php
return array(
	// '_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

  // home feed
  '_root_' => 'home/index',

  // post
  'post' => 'post/index',
  'completed' => 'post/completed',

  // test
  'test' => 'welcome/test',
  'test_array' => 'welcome/test_array',
  'test_object' => 'welcome/test_object',
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
