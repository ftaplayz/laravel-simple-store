<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\ProductCategories;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function index(){
        $category = ProductCategories::find(2);
        echo $category."<br />";
        echo $category->parent;
        return "Bie";
    }
}
