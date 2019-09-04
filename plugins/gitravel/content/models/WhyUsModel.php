<?php namespace GiTravel\Content\Models;

use Model;

/**
 * Model
 */
class WhyUsModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_why_us';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $belongsToMany = [
        'slides' => [DefaultSectionModel::class, 'key' => 'why_us_id', 'otherKey' => 'default_section_id', 'table' => 'gitravel_content_why_us_slide_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
    ];
}
