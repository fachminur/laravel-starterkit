<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rmenu;
use DataTables;
use View;

class MenuController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    
    public function __construct()
    {
        $this->middleware('auth');
        $title = 'Menu';

        $this->name = 'cobain';

        View::share('title', $title);
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Rmenu::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('parent',function($data){
                    if (empty($data->idr_parent)) {
                        $parent = "<p class='text-danger'>Tidak ada Parent</p>";
                    } else {
                        $parent = $data->idr_parent;
                    }
                    return $parent;
                })
                ->addColumn('route',function($data){
                    if (empty($data->controller_menu)) {
                        $route = "<p class='text-danger'>Tidak ada Route</p>";
                    } else {
                        $route = $data->controller_menu;
                    }
                    return $route;
                })
                ->addColumn('icon',function($data){
                    if (empty($data->icon_menu)) {
                        $icon = "<p class='text-danger'>Tidak ada Icon</p>";
                    } else {
                        $icon = $data->icon_menu;
                    }
                    return $icon;
                })
                ->addColumn('status',function($data){
                    if ($data->status_menu == 1) {
                        $status = "<div class='badge badge-success'>Active</div>";
                    } else {
                        $status = "<div class='badge badge-danger'>Inactive</div>";
                    }
                    return $status;
                })
                ->addColumn('read',function($data){
                    if ($data->read_menu == 1) {
                        $read = "<figure class='avatar avatar-xs bg-success text-white'></figure>";
                    } else {
                        $read = "<figure class='avatar avatar-xs bg-danger text-white'></figure>";
                    }
                    return $read;
                })
                ->addColumn('add',function($data){
                    if ($data->add_menu == 1) {
                        $add = "<figure class='avatar avatar-xs bg-success text-white'></figure>";
                    } else {
                        $add = "<figure class='avatar avatar-xs bg-danger text-white'></figure>";
                    }
                    return $add;
                })
                ->addColumn('edit',function($data){
                    if ($data->edit_menu == 1) {
                        $edit = "<figure class='avatar avatar-xs bg-success text-white'></figure>";
                    } else {
                        $edit = "<figure class='avatar avatar-xs bg-danger text-white'></figure>";
                    }
                    return $edit;
                })
                ->addColumn('delete',function($data){
                    if ($data->delete_menu == 1) {
                        $delete = "<figure class='avatar avatar-xs bg-success text-white'></figure>";
                    } else {
                        $delete = "<figure class='avatar avatar-xs bg-danger text-white'></figure>";
                    }
                    return $delete;
                })
                ->addColumn('action', function($row){
                    $btn = '
                        <a href="#" class="btn btn-icon btn-warning my-1" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-icon btn-danger" title="Delete"><i class="fas fa-trash"></i></a>
                        ';
                    return $btn;
                })
                ->rawColumns(['action','status','read','add','edit','delete','parent','route','icon'])
                ->make(true);
        }
        return view('menu.index');
    }

    public function create(){
        return view('menu.add')->with(['cobain'=>$this->name]);
    }
}
