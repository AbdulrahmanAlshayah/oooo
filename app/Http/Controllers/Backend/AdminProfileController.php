<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

###########################لإنشاء كونترولار داخل مجلد ###################################
##############php artisan maek:controller Backend/AdminProfileController############
class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view',compact('adminData'));




    
    }
}
