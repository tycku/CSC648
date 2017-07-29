<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">    
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->userID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TOKEN') ?></th>
            <td><?= h($user->TOKEN) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salt') ?></th>
            <td><?= h($user->Salt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserID') ?></th>
            <td><?= $this->Number->format($user->userID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CreatedDate') ?></th>
            <td><?= $this->Number->format($user->CreatedDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LastLoginDate') ?></th>
            <td><?= $this->Number->format($user->LastLoginDate) ?></td>
        </tr>
    </table>
    <?php print_r($genre);
    ?>
</div>