<?php

class Forum {
   
    public function getForumTable() {
        return ForumTable::getInstance();
    }
    public function getMessages() {
        return $this->getForumTable()->getAllMessages();
    }
}

?>
