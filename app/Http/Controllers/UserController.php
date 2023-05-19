<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function index(){

         return view('users_list');
   }

   public function serach_data(Request $req){

    $output="";   
    $data_query  = User::with('department', 'designation');
    if ($req->get('value')) {         

        $data_query = $data_query->where(function ($query) use ($req) {
                                            $query->whereHas('department', function ($query) use ($req) {
                                                $query->where('name', 'LIKE',  $req->get('value') . '%');
                                            })->orWhereHas('designation', function ($query) use ($req) {
                                                $query->where('name', 'LIKE', $req->get('value') . '%');
                                            })->orWhere('name', 'LIKE', $req->get('value') . '%');
                                     })
                    ->orderBy('name')
                    ->orderBy(function ($query) {
                        $query->select('name')
                            ->from('departments')
                            ->whereColumn('departments.id', 'users.Fk_department');
                    })
                    ->orderBy(function ($query) {
                        $query->select('name')
                            ->from('designations')
                            ->whereColumn('designations.id', 'users.Fk_designation');
                    });       

    }
     $data_query = $data_query->get();
        
     foreach($data_query as $dat){
            $department  = $dat->department ? $dat->department->name : "N/A";
            $designation = $dat->designation ? $dat->designation->name : 'N/A';

           $output.='<div class="container-card card-1">'.
                     '<h4 class="heading4">'.$dat->name.'</h4>'.
                     '<p class="paragraph">'.$department.'</p>'.
                     ' <p class="paragraph para-small">'.$designation.'</p>'.
                     ' </div>';              
     }   

    return response()->json(['output'=>$output]);
   }
}
