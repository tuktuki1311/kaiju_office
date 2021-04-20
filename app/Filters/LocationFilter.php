<?php


namespace App\Filters;


class LocationFilter extends QueryFilters
{
    public function searchFilter($value)
    {
        return $this->builder->whereRaw("LOWER(name_en) LIKE '%". strtolower($value) ."%'");
    }

}
