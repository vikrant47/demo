<?php namespace GiTravel\Content\classes\traits;

trait SortableTrait
{
    public function sort($data, $fieldName, $SORT_ORDER = SORT_ASC)
    {
        if (empty($data)) {
            return $data;
        }
        usort($data, function ($ele1, $ele2) use ($fieldName, $SORT_ORDER) {
            if (is_string($ele1->{$fieldName})) {
                return $SORT_ORDER * strcasecmp($ele1->{$fieldName}, $ele1->{$fieldName});
            }
            return $SORT_ORDER * ($ele1->{$fieldName} - $ele1->{$fieldName});
        });
        return $data;
    }

    public function filter($data, $conditions)
    {
        if (empty($data)) {
            return $data;
        }
        $records = [];
        foreach ($data as $record) {
            $truthy = true;
            foreach ($conditions as $field => $val) {
                if ($record[$field] !== $val) {
                    $truthy = false;
                    break;
                }
            }
            if ($truthy) {
                array_push($records, $record);
            }
        }
        return $records;

    }

    public function filterAndSort($data, $conditions, $fieldName, $SORT_ORDER = SORT_ASC)
    {
        $data = $this->filter($data, $conditions);
        return $this->sort($data, $fieldName, $SORT_ORDER);
    }
}