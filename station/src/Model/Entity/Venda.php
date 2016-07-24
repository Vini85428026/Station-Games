<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Venda Entity
 *
 * @property int $id
 * @property string $preco_total
 * @property int $jogos_id
 * @property int $consoles_id
 * @property int $users_id
 *
 * @property \App\Model\Entity\Jogo $jogo
 * @property \App\Model\Entity\Console $console
 * @property \App\Model\Entity\User $user
 */
class Venda extends Entity
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
