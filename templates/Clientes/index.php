<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listagem de Clientes</h3>
                <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('nome') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('telefone') ?></th>
                            <th><?= $this->Paginator->sort('excluido') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?= $this->Number->format($cliente->id) ?></td>
                                <td><?= h($cliente->nome) ?></td>
                                <td><?= h($cliente->email) ?></td>
                                <td><?= h($cliente->telefone) ?></td>
                                <td><?= h($cliente->excluido) ?></td>
                                <td><?= h($cliente->created) ?></td>
                                <td><?= h($cliente->modified) ?></td>
                                <td class="actions">
                                    <a class="btn btn-default"
                                        href="<?= $this->Url->build(['controller' => 'Clientes', 'action' => 'view', $cliente->id]) ?>"><i
                                            class="fa fa-solid fa-eye"></i></a>
                                    <a class="btn btn-primary"
                                        href="<?= $this->Url->build(['controller' => 'Clientes', 'action' => 'edit', $cliente->id]) ?>"><i
                                            class="fa fas fa-pencil-alt"></i></a>
                                    <a class="btn btn-danger"
                                        href="<?= $this->Url->build(['controller' => 'Clientes', 'action' => 'delete', $cliente->id]) ?>"><i
                                            class="fa fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>



<div class="clientes index content">
    <?= $this->Html->link(__('New Cliente'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('telefone') ?></th>
                    <th><?= $this->Paginator->sort('excluido') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $this->Number->format($cliente->id) ?></td>
                        <td><?= h($cliente->nome) ?></td>
                        <td><?= h($cliente->email) ?></td>
                        <td><?= h($cliente->telefone) ?></td>
                        <td><?= h($cliente->excluido) ?></td>
                        <td><?= h($cliente->created) ?></td>
                        <td><?= h($cliente->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?php //$this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </p>
    </div>
</div>