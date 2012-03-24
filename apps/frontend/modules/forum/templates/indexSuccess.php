<h1>Hello World!</h1>

<h2>Messages</h2>

<ul>
<?php foreach($forumMessages as $forumMessage): ?>
    <li class="message"><?php echo $forumMessage->getMessage() ?></li>
<?php endforeach; ?>
</ul>