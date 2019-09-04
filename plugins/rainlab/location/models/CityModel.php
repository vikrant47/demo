<?php namespace RainLab\Location\Models;

use Model;

/**
 * Model
 */
class CityModel extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'rainlab_location_city';
    /**
     * @var array Behaviours implemented by this model.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array The translatable table fields.
     */
    public $translatable = ['name'];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];
    /**
     * @var array Relations
     */
    public $belongsTo = [
        'state' => ['RainLab\Location\Models\State']
    ];
    /**
     * @var array Cache for nameList() method
     */
    protected static $nameList = [];

    public static function getNameList($stateId)
    {
        if (isset(self::$nameList[$stateId])) {
            return self::$nameList[$stateId];
        }

        return self::$nameList[$stateId] = self::whereCountryId($stateId)->lists('name', 'id');
    }

    public static function formSelect($name, $stateId = null, $selectedValue = null, $options = [])
    {
        return Form::select($name, self::getNameList($stateId), $selectedValue, $options);
    }

    public static function getDefault()
    {
        return ($defaultId = Setting::get('default_city'))
            ? static::find($defaultId)
            : null;
    }
}
