<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-0">
                <?= $this->Form->create($cliente) ?>
                <div class="card-body">
                    <?= $this->element('form/input', [
                        'name'        => 'nome',
                        'placeholder' => 'Nome',
                        'value'       => $cliente->nome,
                    ]) ?>
                    <?= $this->element('form/input', [
                        'name'        => 'email',
                        'placeholder' => 'E-mail',
                        'type'        => 'email',
                        'value'       => $cliente->email,
                    ]) ?>
                    <?= $this->element('form/input', [
                        'name'        => 'telefone',
                        'placeholder' => 'Telefone',
                        'value'       => $cliente->telefone,
                    ]) ?>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>