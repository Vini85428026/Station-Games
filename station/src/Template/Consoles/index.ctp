<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Console'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="consoles index large-9 medium-8 columns content">
    <h3><?= __('Consoles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('marca') ?></th>
                <th><?= $this->Paginator->sort('preco') ?></th>
                <th><?= $this->Paginator->sort('identificador_foto_cons') ?></th>
                <th><?= $this->Paginator->sort('users_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consoles as $console): ?>
            <tr>
                <td><?= $this->Number->format($console->id) ?></td>
                <td><?= h($console->nome) ?></td>
                <td><?= h($console->marca) ?></td>
                <td><?= h($console->preco) ?></td>
                <td><?= h($console->identificador_foto_cons) ?></td>
                <td><?= $console->has('user') ? $this->Html->link($console->user->id, ['controller' => 'Users', 'action' => 'view', $console->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $console->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $console->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $console->id], ['confirm' => __('Are you sure you want to delete # {0}?', $console->id)]) ?>
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
