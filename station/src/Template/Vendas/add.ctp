<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Jogos'), ['controller' => 'Jogos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jogo'), ['controller' => 'Jogos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consoles'), ['controller' => 'Consoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Console'), ['controller' => 'Consoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas form large-9 medium-8 columns content">
    <?= $this->Form->create($venda) ?>
    <fieldset>
        <legend><?= __('Add Venda') ?></legend>
        <?php
            echo $this->Form->input('preco_total');
            echo $this->Form->input('jogos_id', ['options' => $jogos]);
            echo $this->Form->input('consoles_id', ['options' => $consoles]);
            echo $this->Form->input('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
