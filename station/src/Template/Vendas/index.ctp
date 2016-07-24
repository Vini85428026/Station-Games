<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Venda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jogos'), ['controller' => 'Jogos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jogo'), ['controller' => 'Jogos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consoles'), ['controller' => 'Consoles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Console'), ['controller' => 'Consoles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendas index large-9 medium-8 columns content">
    <h3><?= __('Vendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('preco_total') ?></th>
                <th><?= $this->Paginator->sort('jogos_id') ?></th>
                <th><?= $this->Paginator->sort('consoles_id') ?></th>
                <th><?= $this->Paginator->sort('users_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
            <tr>
                <td><?= $this->Number->format($venda->id) ?></td>
                <td><?= h($venda->preco_total) ?></td>
                <td><?= $venda->has('jogo') ? $this->Html->link($venda->jogo->id, ['controller' => 'Jogos', 'action' => 'view', $venda->jogo->id]) : '' ?></td>
                <td><?= $venda->has('console') ? $this->Html->link($venda->console->id, ['controller' => 'Consoles', 'action' => 'view', $venda->console->id]) : '' ?></td>
                <td><?= $venda->has('user') ? $this->Html->link($venda->user->id, ['controller' => 'Users', 'action' => 'view', $venda->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $venda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $venda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $venda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venda->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
