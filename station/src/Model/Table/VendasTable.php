<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Jogos
 * @property \Cake\ORM\Association\BelongsTo $Consoles
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Venda get($primaryKey, $options = [])
 * @method \App\Model\Entity\Venda newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Venda[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Venda|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Venda patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Venda[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Venda findOrCreate($search, callable $callback = null)
 */
class VendasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('vendas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Jogos', [
            'foreignKey' => 'jogos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Consoles', [
            'foreignKey' => 'consoles_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('preco_total', 'create')
            ->notEmpty('preco_total');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['jogos_id'], 'Jogos'));
        $rules->add($rules->existsIn(['consoles_id'], 'Consoles'));
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}
