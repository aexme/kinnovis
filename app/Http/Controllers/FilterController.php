<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Unit;
use App\Models\UnitType;

class FilterController extends Controller
{
    /**
     * @return View
     */
    public function units(Request $request): JsonResponse
    {
        $locations = Location::all('city')->groupBy('city')->toArray();
        if (!$locations) {
            $locations = ["Storeroom Innsbruck", "Storeroom Wien", "Storeroom Graz"];
        }

        $sizes = UnitType::all('size')->groupBy('size')->toArray();

        if (!$sizes) {
            $sizes = ["2m²", "5m²", "8m²", "10m²", "30m²", "50m²", "100m²", "160m²"];
        }

        $data = [
                [
                    "label" => "units_search",
                    "type" => "text",
                    "name" => "id_name"
                ],
                [
                    "label" => "units_location",
                    "type" => "multiselect",
                    "name" => "location",
                    "values" => $locations
                ],
                [
                    "label" => "units_size",
                    "type" => "multiselect",
                    "name" => "size",
                    "values" => $sizes
                ],
                [
                    "label" => "units_status",
                    "type" => "multiselect",
                    "name" => "status",
                    "values" => [Unit::STATUS_VACANT, Unit::STATUS_MAINTENANCE, Unit::STATUS_BLOCKED]
                ]
        ];
        return response()->json($data);
    }
}
