<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\{
    Profile,
    User,
};

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user       = Auth::user();
        return view('dashboard.profile.index', [
            'user'      => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:15',
            'description' => 'nullable|string|max:500',
            'role_id' => 'required|exists:roles,id',
            'profile_picture' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Cari user berdasarkan ID
        $user = User::findOrFail(Auth::user()->id);

        // Update data user
        $user->name = $request->input('name');
        
        $user->address = $request->input('address');
        $user->contact = $request->input('contact');
        $user->description = $request->input('description');
        $user->role_id = $request->input('role_id');

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);
            $user->profile_picture = $filename;
        }
        
        // Simpan perubahan
        $user->save();

        // Redirect dengan pesan sukses
        return redirect()->route('my-account')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
