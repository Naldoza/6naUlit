<?php

namespace App\Http\Controllers;
use App\Requests;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function Homepage()
    {
        return view ('Requests.home1');
    }

    /**
    * Display a listing of the resource/
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    	$requests = Requests::orderBy('id', 'desc')->paginate(10);
        return view('Requests.index', ['requests' => $requests]);
    }


    /** 
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    return view('Requests.create');
    }


    /**
    * Display the specified resource.
    *
    * @param \App\Requests $request
    * @return \Illuminate\Http\Response
    */
    public function show(Requests $Request)
    {
    	return view('Requests.show',['Request' => $Request]);
    }


    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    *@return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

            $this->validate($request, [
                'Subject' => 'required|min:3',
                'RequestingParty' => 'required|min:3',
                'area' => 'required|min:3',
                'recommended' => 'required|min:3',
                'workDescription' => 'required|min:3',
                'materialsNeeded' => 'required|min:3',
                'create_at' => 'required',
            ]);

            Requests::create([
            'Subject' => $request->Subject,
            'area' => $request->area,
            'RequestingParty' => $request->RequestingParty,
            'recommended' => $request->recommended,
            'workDescription' => $request->workDescription,
            'materialsNeeded' => $request->materialsNeeded,
            'date' => $request->date,
            'time' => $request->time,
            ]);

            return redirect(route('Requests.index'));
    }

    public function edit(Requests $Request)
    {

        return view('Requests.edit', compact('Request'));
    }


    /**
    *Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param \App\Post $post
    *return \Illuminate\Http\Response
    */
    public function update(Request $request, Requests $Request)
    {
        $this->validate($request, [
                'Subject' => 'required|min:3',
                'RequestingParty' => 'required|min:3',
                'area' => 'required|min:3',
                'recommended' => 'required|min:3',
                'workDescription' => 'required|min:3',
                'materialsNeeded' => 'required|min:3'
            ]);

    	$Request->Subject = $request->Subject;
        $Request->area = $request->area;
        $Request->RequestingParty = $request->RequestingParty;
        $Request->recommended = $request->recommended;
        $Request->workDescription = $request->workDescription;
        $Request->materialsNeeded = $request->materialsNeeded;
        $Request->created_at = $request->create_at;
        $Request->save();
        session()->flash('message','Your requests have been updated successfully');
        return redirect()->back();
    }


    /**
    * Remove the specified resource from storage.
    *
    * @param \App\Post $post
    * @return \Illuminate\Http\Response
    */
    public function destroy(Requests $Request)
    {   
    	$Request->delete();
        return redirect(route('Requests.index'));
    }
}
