<?php namespace GiTravel\Content\Models;

use October\Rain\Database\Builder;
use Model;

/**
 * Model
 */
class SectionModel extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \gitravel\content\classes\traits\SortableTrait;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'gitravel_content_sections';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    public $SECTION_TYPES = [
        'default_sections' => 'Default',
        'services' => 'Our Services',
        'packages' => 'Packages',
        'hotels' => 'Hotels',
        'restaurants' => 'Restaurants',
        'whyus_elements' => 'Why Us',
        'destinations' => 'Destinations'
    ];

    public function getSectionTypeOptions()
    {
        return $this->SECTION_TYPES;
    }

    public $belongsToMany = [
        'default_sections' => [DefaultSectionModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_default_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
        'services' => [OurServicesModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_service_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
        'packages' => [TourPackageModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_tour_package_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
        'hotels' => [HotelModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_hotel_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
        'restaurants' => [RestaurantModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_restaurant_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
        'whyus_elements' => [WhyUsModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_why_us_section_associations', 'where' => ['active' => true]],
        'destinations' => [DestinationModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_destination_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
        'lists' => [ListSectionModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_list_section_assoctaions', 'order' => 'sort_order', 'where' => ['active' => true]],
        'details' => [DetailSectionModel::class, 'key' => 'section_id', 'otherKey' => 'section_item_id', 'table' => 'gitravel_content_detail_section_associations', 'order' => 'sort_order', 'where' => ['active' => true]],
    ];


    public function filterFields($fields, $context = null)
    {
        /*foreach ($this->SECTION_TYPES as $key => $value) {
            $fields->{$key}->hidden = true;
        }
        if (empty($fields->section_type->value)) {
            $fields->default_sections->hidden = false;
        } else {
            $fields->{$fields->section_type->value}->hidden = false;
        }*/
    }


    public function beforeSave()
    {

    }
}
