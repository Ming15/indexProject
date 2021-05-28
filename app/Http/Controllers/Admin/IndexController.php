<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function adminLogin()
    {
        $admin = Admin::find(1);

        $token = auth('admin')->login($admin);

        return response()->json(['token' => $token]);
    }


    public function adminMe()
    {
        $admin = auth('admin')->user();
        dd($admin);



        DB::table('order')
            ->leftJoin('course as c', 'c.course_id', '=', 'order.course_id')
            ->leftJoin('origin as or', 'or.origin_id', '=', 'c.origin_id');
    }


}
