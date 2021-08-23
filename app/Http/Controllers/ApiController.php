<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Flower;

class ApiController extends Controller
{

    public function getFlowers()
    {
        $flowers = Flower::all();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }

    public function getFlower($id)
    {
        $flowers = Flower::where('id', '=', $id)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
    public function getFlowersAmount($amount)
    {
        $flowers = Flower::limit($amount)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
    public function getFlowersType($type)
    {

        $flowers = Flower::where('type', '=', $type)->get();
        return $flowers->toJson(JSON_PRETTY_PRINT);
    }
}
