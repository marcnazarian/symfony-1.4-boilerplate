<?php

class forumTest extends PHPUnit_Framework_TestCase {

  /** @test */
  function anEmptyForumHasNoMessages() {
      $forumTable = $this->getMock('ForumTable', array('getAllMessages'), array(), '', false);
      $forumTable->expects($this->once())
                 ->method('getAllMessages')
                 ->will($this->returnValue(array()));
      
      $forum = $this->getMock('Forum', array('getForumTable'), array(), '', false);
      $forum->expects($this->once())
            ->method('getForumTable')
            ->will($this->returnValue($forumTable));
      $this->assertEquals(0, count($forum->getMessages()));
  }
  
  /** @test */
  function aRealForumHasMessages() {
      $forumTable = $this->getMock('ForumTable', array('getAllMessages'), array(), '', false);
      $forumTable->expects($this->once())
                 ->method('getAllMessages')
                 ->will($this->returnValue(array('this is the first message', 'this is the second message')));
      
      $forum = $this->getMock('Forum', array('getForumTable'), array(), '', false);
      $forum->expects($this->once())
            ->method('getForumTable')
            ->will($this->returnValue($forumTable));
      $this->assertEquals(array('this is the first message', 'this is the second message'), $forum->getMessages());
  }
  
}