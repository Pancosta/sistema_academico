<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Teacher Entity
 *
 * @property int $id
 * @property string $name
 * @property string $siape
 *
 * @property \App\Model\Entity\Turma[] $turmas
 */
class Teacher extends Entity
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
        'name' => true,
        'siape' => true,
        'turmas' => true
    ];
}