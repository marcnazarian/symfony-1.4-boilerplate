<?php

class forumActions extends sfActions {
  
  public function executeIndex(sfWebRequest $request) {
    $forum = new Forum();
    $this->forumMessages = $forum->getMessages();
  }
  
}