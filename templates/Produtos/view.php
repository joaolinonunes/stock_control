<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id_produto], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id_produto], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id_produto), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="produtos view content">
            <h3><?= h($produto->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($produto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Unidade') ?></th>
                    <td><?= h($produto->tipo_unidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Condicao') ?></th>
                    <td><?= h($produto->condicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produto') ?></th>
                    <td><?= $this->Number->format($produto->id_produto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Fornecedor') ?></th>
                    <td><?= $produto->id_fornecedor === null ? '' : $this->Number->format($produto->id_fornecedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qtd Estoque') ?></th>
                    <td><?= $produto->qtd_estoque === null ? '' : $this->Number->format($produto->qtd_estoque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Cadastro') ?></th>
                    <td><?= h($produto->data_cadastro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validade') ?></th>
                    <td><?= h($produto->validade) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>