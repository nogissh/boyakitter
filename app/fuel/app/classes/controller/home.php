<?php

class Controller_Home extends Controller {

  public function action_index() {

    // query
    $query = DB::query('SELECT * FROM boyaki order by id desc');
    $boyaki = $query->execute()->as_array();

    // create object for boyaki contents
    $data = new stdClass();

    // set content of boyaki
    $data->boyaki = array();
    foreach($boyaki as $value) {
      array_push($data->boyaki, $value);
    }

    // send to View
    return Response::forge(View::forge('home/index', $data));
  }
}
?>
