<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console'), ['action' => 'edit', $console->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console'), ['action' => 'delete', $console->id], ['confirm' => __('Are you sure you want to delete # {0}?', $console->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Consoles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consoles view large-9 medium-8 columns content">
    <h3><?= h($console->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($console->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= h($console->marca) ?></td>
        </tr>
        <tr>
            <th><?= __('Preco') ?></th>
            <td><?= h($console->preco) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificador Foto Cons') ?></th>
            <td><?= h($console->identificador_foto_cons) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $console->has('user') ? $this->Html->link($console->user->id, ['controller' => 'Users', 'action' => 'view', $console->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($console->id) ?></td>
        </tr>
    </table>
</div>
