<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * index
     *
     * @return void
     */
public function index()
{
    $Profiles = Profile::latest()->paginate(5);

    return view('profile.index',compact('Profiles'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}

        /**
* create
*
* @return void
*/

public function create()
{
    return view('profile.create');
}

/**
* store
*
* @param  mixed $request
* @return void
*/

public function store(Request $request)
{
    $request->validate([
        'NamaLengkap'         => 'required',
        'Karir'               => 'required',
        'Location'            => 'required',
        'Degree'              => 'required',
        'Email'               => 'required',
        'Linkid'              => 'required',
        'About'               => 'required',
        'Image'               =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $input = $request->all();

    if ($Image = $request->file('Image')) {
        $destinationPath = 'Image/';
        $profileImage = date('YmdHis') . "." . $Image->getClientOriginalExtension();
        $Image->move($destinationPath, $profileImage);
        $input['Image'] = "$profileImage";
    }

    Profile::create($input);

    return redirect()->route('profile.index')
                    ->with('success','Product created successfully.');
}

/**
* edit
*
* @param  mixed $blog
* @return void
*/

public function edit(Profile $Profiles)
{
    return view('profile.edit',compact('Profiles'));
}

public function update(Request $request, $id)
{
    $request->validate($request, [
        'NamaLengkap'          => 'required',
        'Karir'                => 'required',
        'Location'             => 'required',
        'Degree'               => 'required',
        'Email'                => 'required',
        'Linkid'               => 'required',
        'About'                => 'required'
    ]);
    $Profiles = Profile::find($id);
    $Profiles->NamaLengkap = $request->NamaLengkap;
    $Profiles->Karir = $request->Karir;
    $Profiles->Location = $request->Location;
    $Profiles->Degree = $request->Degree;
    $Profiles->Email = $request->Email;
    $Profiles->Linkid = $request->Linkid;
    $Profiles->About = $request->About;

    if ($Image = $request->file('Image')) {
        $destinationPath = 'Image/';
        $profileImage = date('YmdHis') . "." . $Image->getClientOriginalExtension();
        $Image->move($destinationPath, $profileImage);
        $input['Image'] = "$profileImage";
    }else{
        unset($input['Image']);
    }
    $Profiles->save();

    if($Profiles){
        //redirect dengan pesan sukses
        return redirect()->route('profile.index')->with('success','Data Berhasil Diupdate!');
    }else{
        //redirect dengan pesan error
        return redirect()->route('profile.index')->with('error', 'Data Gagal Diupdate!');
    }
}

public function destroy(Request $request, $id)
{

    $Profiles = Profile::find($id);
    if ($id == $request->user()->id) return redirect()->route('profile.index')
        ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
    if ($Profiles) $Profiles->delete();
    return redirect()->route('profile.index')
        ->with('success_message', 'Berhasil menghapus user');
}
}
