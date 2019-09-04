<?php namespace GiTravel\Content\Models;

use Model;
use Db;

/**
 * Model
 */
class ListSectionModel extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_list_section';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getSectionItems($options = [])
    {
        $options = array_merge([
            'page' => 1,
            'perPage' => $this->item_per_page,
            'sort' => 'order_by',
            // 'rating' => null,
        ], $options);
        if ($this->item_per_page >= 0) {
            return Db::table($this->type)->where('active', 1)->orderBy('sort_order')
                ->paginate($options['perPage']);
        } else {
            return Db::table($this->type)->where('active', 1)->orderBy('sort_order')->get();
        }

    }
}
