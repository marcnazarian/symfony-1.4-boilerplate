<?php

class forumTest extends PHPUnit_Framework_TestCase {

  /** @test */
  function anEmptyForumHasNoMessages() {
      $forumMessageTable = $this->getMock('ForumMessageTable', array('getAllMessages'), array(), '', false);
      $forumMessageTable->expects($this->once())
                        ->method('getAllMessages')
                        ->will($this->returnValue(array()));
      
      $forum = $this->getMock('Forum', array('getForumMessageTable'), array(), '', false);
      $forum->expects($this->once())
            ->method('getForumMessageTable')
            ->will($this->returnValue($forumMessageTable));
      $this->assertEquals(0, count($forum->getMessages()));
  }
  
  /** @test */
  function aRealForumHasMessages() {
      $forumMessage1 = $this->getMock('ForumMessage', array('getMessage'), array(), '', false);
      $forumMessage1->expects($this->once())
                    ->method('getMessage')
                    ->will($this->returnValue('this is the first message'));
      $forumMessage2 = $this->getMock('ForumMessage', array('getMessage'), array(), '', false);
      $forumMessage2->expects($this->once())
                    ->method('getMessage')
                    ->will($this->returnValue('this is the second message'));
      
      $forumMessageTable = $this->getMock('ForumMessageTable', array('getAllMessages'), array(), '', false);
      $forumMessageTable->expects($this->once())
                        ->method('getAllMessages')
                        ->will($this->returnValue(array($forumMessage1, $forumMessage2)));
      
      $forum = $this->getMock('Forum', array('getForumMessageTable'), array(), '', false);
      $forum->expects($this->once())
            ->method('getForumMessageTable')
            ->will($this->returnValue($forumMessageTable));
      
      $messages = $forum->getMessages();
      $this->assertEquals(2, count($messages));
      $this->assertEquals('this is the first message', $messages[0]->getMessage());
      $this->assertEquals('this is the second message', $messages[1]->getMessage());
  }
  
}