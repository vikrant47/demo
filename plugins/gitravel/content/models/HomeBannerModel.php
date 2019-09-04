<?php namespace GiTravel\Content\Models;

use Model;

/**
 * Model
 */
class HomeBannerModel extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_home_banner';

    public $hasMany = [
        'pages' => [PageModel::class, 'key' => 'banner_id']
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'links' => [LinkModel::class, 'key' => 'banner_id', 'otherKey' => 'link_id', 'table' => 'gitravel_content_banner_link_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
    ];
}
