<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

  // test
  'test' => 'welcome/test',
  'test_array' => 'welcome/test_array',
  'test_object' => 'welcome/test_object',
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
