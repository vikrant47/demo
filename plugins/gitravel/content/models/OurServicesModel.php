<?php namespace GiTravel\Content\Models;

use Model;

/**
 * Model
 */
class OurServicesModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_our_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
