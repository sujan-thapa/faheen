<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\Form;
use App\Http\Controllers\Form;

class RegisterController extends Controller
{

    public function register(Request $request){

        // hit and add item in the database table

        // for checcing the image
        if($request->hasFile('image')){
            // $this->validate($request,[
            //     'name' => 'string|max:20',
            //     'image' => 'mimes:jpeg,png,jpg|max:1024',
            //     'email' => 'required|email',
            //     'address' => 'required',
            //     'contact' => 'required',
            //     'age' => 'required',
            //     'gender' => 'required',
            //     'password' => 'required|max:10'
            // ]);


            // Form::create($request->all());

            // $extension = $request->image->extension();
            // $request->image->storeAs('/public', $validated['name'] . "." . $extension);
            /*
            $destinationPath = storage_path('app/public/image');
            $file = $request->image;
            $fileName = time() . '.' . $file->clientExtension();
            $file->move($destinationPath, $fileName);
            */

            $user = new User();

            // file move
            $file = $request->file('image');
            // $filename = time() . '.' . $extension;
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            // $fileName  = Str::uuid() . '_image.' . $file->getClientOriginalExtension();
            $file->move('images/user', $fileName);

            $user->name = $request['name'];
            $user->image = $fileName;
            $user->email = $request['email'];
            $user->age = $request['age'];
            $user->gender = $request['gender'];
            $user->contact = $request['contact'];
            // $user->address = $request['address'];
            $user->password = bcrypt($request['password']);

            $user->save();
            return redirect('/dashboard');
        }
        return redirect('/register');

        // other way of registering admin user
       /*User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'email' => $request->email,
            'gender' => $request->gender,
            'contact' => $request->contact,
            // 'Address' => $request->address,
            'password' => bcrypt($request->password),
            // 'email' => $request->email,

        ]);
        return 'romi';*/

    }
}
