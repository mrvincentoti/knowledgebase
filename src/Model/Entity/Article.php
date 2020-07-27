<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $category_id
 * @property \Cake\I18n\FrozenTime $date_created
 * @property int $user_id
 * @property int $status
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\User $user
 */
class Article extends Entity
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
        'title' => true,
        'description' => true,
        'category_id' => true,
        'date_created' => true,
        'user_id' => true,
        'status' => true,
        'category' => true,
        'user' => true,
    ];
}
