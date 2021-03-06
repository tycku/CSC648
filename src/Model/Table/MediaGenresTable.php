<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MediaGenres Model
 *
 * @property \App\Model\Table\GenresTable|\Cake\ORM\Association\BelongsTo $Genres
 *
 * @method \App\Model\Entity\MediaGenre get($primaryKey, $options = [])
 * @method \App\Model\Entity\MediaGenre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MediaGenre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MediaGenre|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MediaGenre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MediaGenre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MediaGenre findOrCreate($search, callable $callback = null, $options = [])
 */
class MediaGenresTable extends Table
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

        $this->setTable('media_genres');
        $this->setDisplayField('genre_id');
        $this->setPrimaryKey('genre_id');

        $this->belongsTo('Genres', [
            'foreignKey' => 'genre_id',
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
            ->requirePresence('genre_name', 'create')
            ->notEmpty('genre_name');

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
        $rules->add($rules->existsIn(['genre_id'], 'Genres'));

        return $rules;
    }
}
