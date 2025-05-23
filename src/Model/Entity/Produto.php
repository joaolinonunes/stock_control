<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id_produto
 * @property string $nome
 * @property \Cake\I18n\DateTime|null $data_cadastro
 * @property int|null $id_fornecedor
 * @property int|null $qtd_estoque
 * @property string|null $tipo_unidade
 * @property string|null $condicao
 * @property \Cake\I18n\Date|null $validade
 */
class Produto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nome' => true,
        'data_cadastro' => true,
        'id_fornecedor' => true,
        'qtd_estoque' => true,
        'tipo_unidade' => true,
        'condicao' => true,
        'validade' => true,
    ];
}
