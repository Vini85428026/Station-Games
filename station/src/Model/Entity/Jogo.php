<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jogo Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $tipo
 * @property string $preco
 * @property string $identificador_foto
 * @property int $users_id
 *
 * @property \App\Model\Entity\User $user
 */
class Jogo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
