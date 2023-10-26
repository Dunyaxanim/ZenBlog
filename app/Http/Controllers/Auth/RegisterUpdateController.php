<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class RegisterUpdateController extends Controller
{
    public function index(User $user)
    {
        return view('auth.updateRegister',['user'=>$user]);
    }
    public function update(RegisterUpdateRequest $request, User $user)
    {
        try {
            DB::beginTransaction();
            if($request->hasFile('imgUrl')){
                $imageName = uniqid() . '.' . $request->imgUrl->extension();
                $request['imgUrl'] = $imageName;
            } 
            if($request->password!=null){
                $request['password'] = Hash::make($request['password']);
            }
           $isupdated = $user->update($request->toArray());
            // dd($request->password);
            // $user->update([
            //     "name" => $request->name,
            //     "email" => $request->email,
            //     "imgUrl" => $imageName,
            // ]);
            DB::commit();
            if($isupdated){
                return redirect()->route('blog');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}