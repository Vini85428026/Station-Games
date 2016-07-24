<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Venda'), ['action' => 'edit', $venda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Venda'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jogos'), ['controller' => 'Jogos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jogo'), ['controller' => 'Jogos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Consoles'), ['controller' => 'Consoles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console'), ['controller' => 'Consoles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendas view large-9 medium-8 columns content">
    <h3><?= h($venda->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Preco Total') ?></th>
            <td><?= h($venda->preco_total) ?></td>
        </tr>
        <tr>
            <th><?= __('Jogo') ?></th>
            <td><?= $venda->has('jogo') ? $this->Html->link($venda->jogo->id, ['controller' => 'Jogos', 'action' => 'view', $venda->jogo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Console') ?></th>
            <td><?= $venda->has('console') ? $this->Html->link($venda->console->id, ['controller' => 'Consoles', 'action' => 'view', $venda->console->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $venda->has('user') ? $this->Html->link($venda->user->id, ['controller' => 'Users', 'action' => 'view', $venda->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($venda->id) ?></td>
        </tr>
    </table>
</div>
