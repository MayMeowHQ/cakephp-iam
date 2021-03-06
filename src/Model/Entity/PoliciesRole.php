<?php
declare(strict_types=1);

namespace Iam\Model\Entity;

use Cake\ORM\Entity;

/**
 * PoliciesRole Entity
 *
 * @property int $id
 * @property int $policy_id
 * @property int $role_id
 *
 * @property \Iam\Model\Entity\Policy $policy
 * @property \Iam\Model\Entity\Role $role
 */
class PoliciesRole extends Entity
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
        'policy_id' => true,
        'role_id' => true,
        'policy' => true,
        'role' => true,
    ];
}
