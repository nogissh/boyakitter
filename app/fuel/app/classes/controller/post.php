<?php
class Controller_Post extends Controller {

  public function action_index() {
    return Response::forge(View::forge('post/index'));
  }
}
?>
