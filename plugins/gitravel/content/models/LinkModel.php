<?php namespace GiTravel\Content\Models;

use Model;

/**
 * Model
 */
class LinkModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_links';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
