<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Consoles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consoles form large-9 medium-8 columns content">
    <?= $this->Form->create($console) ?>
    <fieldset>
        <legend><?= __('Add Console') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('marca');
            echo $this->Form->input('preco');
            echo $this->Form->input('identificador_foto_cons');
            echo $this->Form->input('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
