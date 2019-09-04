<?php namespace GiTravel\Content\Models;

use Model;
use System\Models\File;

/**
 * Model
 */
class HotelModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['RainLab.Location.Behaviors.LocationModel', 'Initbiz.Money.Behaviors.MoneyFields'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_hotels';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $belongsTo = [
        'tag' => [TagModel::class, 'key' => 'tag_id']
    ];
    public $attachMany = [
        'image_gallery' => File::class,
    ];
    public $moneyFields = [
        'price' => [
            'amountColumn' => 'amount',
            'currencyIdColumn' => 'currency_id'
        ]
    ];
}
