<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MediaType Entity
 *
 * @property int $type_id
 * @property string $type_name
 *
 * @property \App\Model\Entity\Type $type
 */
class MediaType extends Entity
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
        'type_id' => false
    ];
}
