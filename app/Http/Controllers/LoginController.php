<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class LoginController extends Controller
{
    //
    function Login(){
        return view('Login');
    }

    public function Check_Login(Request $request)
    {
        // dd($request->all());
        $Username = $request->input('users_name');  //รับต่ามาจาก input  --> username
        $Password = $request->input('password');  //รับต่ามาจาก input  --> password

        //เช็คข้อมูลว่า ตรงใน DB มั้ย
        $data_users = users::where('users.users_name', $Username)
            ->where('users.password', $Password)
            ->first();

        if (!empty($data_users)) {
            session()->put([
                'users_id' => $data_users->users_id,
                'users_name' => $data_users->users_name,
                'password' => $data_users->password,
                'name' => $data_users->name,
                'surname' => $data_users->surname,
                'house_registration' => $data_users->house_registration,
                'phone' => $data_users->phone,
                'level_id' => $data_users->level_id,
            ]);

            if ($data_users->level_id == 1) {
                return redirect()->route('admin_profile')->with('login','เข้าสู่ระบบ ผู้ดูแลระบบ เรียบร้อย');
            }
            elseif($data_users->level_id == 2) {
                return redirect()->route('offieer_profile')->with('login','เข้าสู่ระบบ เจ้าหน้าที่รักษาความปลอดภัย เรียบร้อย');
            }elseif($data_users->level_id == 3) {
                return redirect()->route('user_profile')->with('login','เข้าสู่ระบบ ลูกบ้าน เรียบร้อย');
            }
             else {
                return redirect()->route('Login')->with('login_level','รออนุมัติ');
            }

        } else {
            return redirect()->route('Login')->with('login_error','ลองใหม่อีกครั้ง');
        }
    }

    protected function Logout()
    {
        session()->forget('users_id');
        return redirect('/')->with('Logout','ออกจากระบบเรียบร้อย');;
    }


}
