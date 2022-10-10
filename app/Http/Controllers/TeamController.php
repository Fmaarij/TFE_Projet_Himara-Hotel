<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view ('team.index',compact('teams'));
    }

    public function allmembers(){
        $teams = Team::all();
        return view('team.allmembers', compact('teams'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::all();
        return view('team.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $room = Room::where('typeofroom_id','=',$request->typeofroom_id)->get()->count();
        // $rooms = Room::find($request->typeofroom_id)->count();
        $allmembers = Team::all();
        if($allmembers==='8'){
            return redirect()->back()->with('error','You can add only 8 members');
        }else{

            $teams=new Team;
            if($request->hasFile('img')) {
                //get filename with extension
                $filenamewithextension = $request->file('img')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('img')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename.'_'.time().'.'.$extension;

                //Upload File
                $request->file('img')->storeAs('public/team_images', $filenametostore);
                $request->file('img')->storeAs('public/team_images/thumbnail', $filenametostore);

                //Resize image here
                $thumbnailpath = public_path('storage/team_images/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(540, 540, function($constraint) {
                    // $constraint->aspectRatio();
                });
                $img->save();
                $teams->img = $filenametostore;
            }

            $teams->post = $request->post;
            $teams->name = $request->name;
            $teams->lastname = $request->lastname;
            $teams->details = $request->details;
            $teams->save();

            return redirect()->back()->with('success', "Member added successfully.");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $teams=Team::find($id);
        return view('team.show',compact('teams'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams=Team::find($id);
        return view('team.edit',compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
            $teams=Team::find($id);
            if($request->hasFile('img')) {
                Storage::delete('storage/team_images/thumbnail/'.$teams->img);
                Storage::delete('public/team_images/'.$teams->img);

                //get filename with extension
                $filenamewithextension = $request->file('img')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('img')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename.'_'.time().'.'.$extension;

                //Upload File
                $request->file('img')->storeAs('public/team_images', $filenametostore);
                $request->file('img')->storeAs('public/team_images/thumbnail', $filenametostore);

                //Resize image here
                $thumbnailpath = public_path('storage/team_images/thumbnail/'.$filenametostore);
                $img = Image::make($thumbnailpath)->resize(540, 540, function($constraint) {
                    // $constraint->aspectRatio();
                });
                $img->save();
                $teams->img = $filenametostore;
            }

            $teams->post = $request->post;
            $teams->name = $request->name;
            $teams->lastname = $request->lastname;
            $teams->details = $request->details;
            $teams->save();

            return redirect()->back()->with('success', "Member updated successfully.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = Team::find($id);
        $teams->delete();
        return redirect('allmembers');
    }
}
