<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\car_registration;
use SimpleSoftwareIO\QrCode;
use Illuminate\Support\Facades\Storage;



class AdminController extends Controller
{

    function admin_profile(Request $request){
        return view('admin.admin_profile');
    }

    function admin_member(){
        $users=users::all();
        $data = [
            'users'  => $users,
        ];
        return view('admin.admin_member',$data);
    }

    public function add_admin_member(Request $request){
        //บันทึกข้อมูล
        $users = new users();
        $users->users_name=$request->users_name;
        $users->password=$request->password;
        $users->name=$request->name;
        $users->surname=$request->surname;
        $users->house_registration=$request->house_registration;
        $users->phone=$request->phone;
        $users->level_id=$request->level_id;
        $users->save();
        return redirect()->back()->with('add_admin_member',"บันทึกข้อมูลเรียบร้อย");
    }

    public function edit_admin_member(Request $request, $users_id){
        $users=users::where('users_id',$users_id)->first();
        $data = [
            'users_data' =>$users,
        ];
        return view('admin.admin_edit',$data);
    }

    public function dataUpdate_admin_member(Request $request){
        $update = users::where('users_id',$request -> input('users_id'))->first();
        $update->name = $request-> input('name');
        $update->surname = $request->input('surname');
        $update-> house_registration = $request->input('house_registration');
        $update->phone = $request->input('phone');
        $update->level_id = $request->input('level_id');
        $update->save();

        return redirect()->route('admin_member')->with('dataUpdate_admin_member', "บันทึกข้อมูลเรียบร้อย");
    }

    function delete_admin_member(Request $request){

        // dd($request->users_id);

        $delete = users::where('users_id',$request->users_id)->forceDelete();
        return redirect()->route('admin_member')->with('delete_admin_member', "ลบข้อมูลถาวรเรียบร้อย");
    }

    function admin_car(){

        $car_registration = car_registration::all();

        $data = [
            'car_registration'  => $car_registration,
        ];

        return view('admin.admin_car',$data);
    }

    function admin_car_from_add(Request $request){

        // dd($request->users_id);
        $users=users::where('users_id',$request->users_id)->first();

        $data = [
            'users'  => $users,
        ];

        return view('admin.admin_car_from_add',$data);
    }

    function admin_car_add(Request $request){

        // dd($request->all());

        // $data = QrCode::size(100)->generate($users->users_id);

        // $image      = \QrCode::format('png')
        //               ->size(200)->errorCorrection('H')
        //               ->generate('codingdriver');
        // dd($image);


        $image = QrCode::format('png')
        ->size(200)
        ->generate('A simple example of QR code!');
        dd($image);

        $output_file = '/img/img-' . time() . '.png';
        $full_path = Storage::disk('public')->put($output_file, $image); //storage/app/public/img/qr-code/img-1557309130.png

        // $image = file_get_contents(full_path);


        $car_registrations = new car_registration();
        $car_registrations->users_id= $request->users_id;
        // $car_registrations->QRcode= $image;
        $car_registrations->car_registration_name= $request->car_registration_name;
        $car_registrations->car_type= $request->car_type;
        // $car_registrations->QRcode->size(500)->generate('Make a qrcode without Laravel!');
        $car_registrations->save();



         dd($car_registrations);

        return redirect()->route('admin_member')->with('dataUpdate_admin_member', "บันทึกข้อมูลเรียบร้อย");
    }




    function admin_QRcode(){

        return view('admin.admin_QRcode');
    }
    function admin_record(){

        return view('admin.admin_record');
    }
}
