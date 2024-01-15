<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;
use Route;
use Session;

class Users extends Model
{
    use HasFactory;
    protected $table= "users";

    public function saveProfile($request){
        $countUser = Users::where("email",$request->input('email'))
                        ->where("id",'!=',$request->input('edit_id'))
                        ->count();

        if($countUser == 0){
            $countPhoneNumber = Users::where("phone_number",$request->input('phone_number'))
                            ->where("id",'!=',$request->input('edit_id'))
                            ->count();

            if($countPhoneNumber == 0){
                $objUsers = Users::find($request->input('edit_id'));
                $objUsers->first_name = $request->input('first_name');
                $objUsers->last_name = $request->input('last_name');
                $objUsers->email = $request->input('email');
                $objUsers->phone_number = $request->input('phone_number');
                if($request->file('userimage')){
                    $image = $request->file('userimage');
                    $imagename = 'userimage'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/upload/userprofile/');
                    $image->move($destinationPath, $imagename);
                    $objUsers->userimage  = $imagename ;
                }
                if($objUsers->save()){
                    return true;
                }else{
                    return "false";
                }
            } else{
                return "phone_number_exist";
            }
        }else{
            return "email_exist";
        }
    }

    public function changepassword($request)
    {

        if (Hash::check($request->input('old_password'), $request->input('user_old_password'))) {
            $countUser = Users::where("id",'=',$request->input('editid'))->count();
            if($countUser == 1){
                $objUsers = Users::find($request->input('editid'));
                $objUsers->password =  Hash::make($request->input('new_password'));
                $objUsers->updated_at = date('Y-m-d H:i:s');
                if($objUsers->save()){
                    return true;
                }else{
                    return 'false';
                }
            }else{
                return "false";
            }
        }else{
            return "password_not_match";
        }
    }
}
