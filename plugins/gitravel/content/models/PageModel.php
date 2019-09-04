<?php namespace GiTravel\Content\Models;

use Model;

/**
 * Model
 */
class PageModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \gitravel\content\classes\traits\SortableTrait;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_page';


    public $belongsTo = [
        'banner' => [HomeBannerModel::class, 'key' => 'banner_id']
    ];
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'sections' => [SectionModel::class, 'key' => 'page_id', 'otherKey' => 'section_id', 'table' => 'gitravel_content_page_section_associations','order' => 'sort_order'],
    ];

    public function getBanner()
    {
        if (empty($this->banner)) {
            $this->banner = HomeBannerModel::where('id', $this->banner_id);
        }
        return $this->banner;
    }
}
