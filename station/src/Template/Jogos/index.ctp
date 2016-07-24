<?= $this->element('menu') ?>

<div class="jogos index large-12 medium-12 columns content">
    <h3><?= __('Jogos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('preco') ?></th>
                <th><?= $this->Paginator->sort('identificador_foto') ?></th>
                <th><?= $this->Paginator->sort('users_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jogos as $jogo): ?>
            <tr>
                <td><?= $this->Number->format($jogo->id) ?></td>
                <td><?= h($jogo->nome) ?></td>
                <td><?= h($jogo->descricao) ?></td>
                <td><?= h($jogo->tipo) ?></td>
                <td><?= h($jogo->preco) ?></td>
                <td><?= h($jogo->identificador_foto) ?></td>
                <td><?= $jogo->has('user') ? $this->Html->link($jogo->user->id, ['controller' => 'Users', 'action' => 'view', $jogo->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jogo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jogo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jogo->id)]) ?>
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
