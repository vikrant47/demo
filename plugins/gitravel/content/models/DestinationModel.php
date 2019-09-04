<?php namespace GiTravel\Content\Models;

use Model;
use System\Models\File;

/**
 * Model
 */
class DestinationModel extends Model
{
    public $implement = ['RainLab.Location.Behaviors.LocationModel'];
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_destination';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachMany = [
        'image_gallery' => File::class,
    ];
}
