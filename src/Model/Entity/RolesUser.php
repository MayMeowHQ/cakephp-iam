<?php
declare(strict_types=1);

namespace Iam\Model\Entity;

use Cake\ORM\Entity;

/**
 * RolesUser Entity
 *
 * @property int $id
 * @property int $role_id
 * @property int $user_id
 *
 * @property \Iam\Model\Entity\Role $role
 * @property \Iam\Model\Entity\User $user
 */
class RolesUser extends Entity
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
        'role_id' => true,
        'user_id' => true,
        'role' => true,
        'user' => true,
    ];
}
