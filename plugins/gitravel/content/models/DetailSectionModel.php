<?php namespace GiTravel\Content\Models;

use Model;
use Db;

/**
 * Model
 */
class DetailSectionModel extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_detail_section';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getDetailRecord($itemSlug)
    {
        return call_user_func($this->type . '::where', 'slug', $itemSlug)->get();
    }

    public function getHotelBySlug($itemSlug)
    {
        $hotels =  HotelModel::where('slug', $itemSlug)->get();
        if(!empty($hotels)){
            return $hotels[0];
        }
        return $itemSlug;
    }
}
