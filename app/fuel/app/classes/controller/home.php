<?php

class Controller_Home extends Controller {

  public function action_index() {

    // sample of Boyaki
    $data = new stdClass();
    $data->boyaki = array();

    // content of boyaki
    $data->boyaki[0] = array();
    $data->boyaki[0]['title'] = "Uzee";
    $data->boyaki[0]['text'] = "The summer in 2018 is very hot. Temprature will kill the people. Humans are not fight for alive against temprature because hot is not the thing.";

    // send to View
    return Response::forge(View::forge('home/index', $data));
  }
}
?>
