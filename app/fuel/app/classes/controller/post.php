<?php
class Controller_Post extends Controller {

  public function action_index() {
    return Response::forge(View::forge('post/index'));
  }

  public function action_completed() {

    // set params
    $form = array();
    $form['title'] = Input::post('boyaki_title');
    $form['text'] = Input::post('boyaki_text');

    // insert data
    $post = Model_Post::forge();
    $post->set($form);
    $post->save();

    // redirect to top page
    Response::redirect('');
  }
}
?>
