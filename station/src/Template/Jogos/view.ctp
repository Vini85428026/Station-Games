<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jogo'), ['action' => 'edit', $jogo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jogo'), ['action' => 'delete', $jogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jogos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jogo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jogos view large-9 medium-8 columns content">
    <h3><?= h($jogo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($jogo->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($jogo->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($jogo->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Preco') ?></th>
            <td><?= h($jogo->preco) ?></td>
        </tr>
        <tr>
            <th><?= __('Identificador Foto') ?></th>
            <td><?= h($jogo->identificador_foto) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $jogo->has('user') ? $this->Html->link($jogo->user->id, ['controller' => 'Users', 'action' => 'view', $jogo->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($jogo->id) ?></td>
        </tr>
    </table>
</div>
