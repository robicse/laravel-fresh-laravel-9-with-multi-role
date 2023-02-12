<?php

namespace App\Helpers;

use App\Models\Area;
use App\Models\Blog;
use App\Models\User;
use App\Models\Admin;
use App\Models\Payby;
use App\Models\Module;
use App\Models\Wallet;
use App\Models\Country;
use App\Models\Package;
use App\Models\Smssent;
use App\Models\District;
use App\Models\Division;
use App\Models\Language;
use App\Models\Bikebrand;
use App\Models\Bikemodel;
use App\Models\Blogcount;
use App\Models\Permissions;
use Illuminate\Support\Str;
use App\Models\Complaintext;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Request;
use Intervention\Image\ImageManagerStatic as Image;


class Helper
{


    public static function make_slug($string)
    {
        return Str::slug($string, '-');
    }

    public static function getCollapseAndParentModuleList()
    {
        return Module::where('status', 1)
            ->where(function ($query) {
                $query
                    ->where('parent_menu', 'Collapse')
                    ->orWhere('parent_menu', 'Parent');
            })
            ->get();
    }

    public static function getChildModuleList($parent)
    {
        return Module::where('parent_menu', $parent)
            ->where('status', 1)
            ->orderBy('serial', 'asc')
            ->get();
    }

    public static function getChildModuleSlugList($parent, $role)
    {
        $childModules = Module::where('parent_menu', $parent)
            ->where('status', 1)
            ->orderBy('serial', 'asc')
            ->get();
        $slugs = [];
        if (count($childModules) > 0) {
            foreach ($childModules as $key => $childModule) {
                $slugs[] = $childModule->slug;
            }
            $slugs_array = implode(',', $slugs);
            $slugList = explode(',', $slugs_array);
        } else {
            $slugList = [];
        }
        return $slugList;
    }

    public static function collapseChildMenuPermission($module_ids)
    {
        return DB::table('permissions')
            ->whereIn('module_id', $module_ids)
            ->pluck('name')
            ->first();
    }

    
}
