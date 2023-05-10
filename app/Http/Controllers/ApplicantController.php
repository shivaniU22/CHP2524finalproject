<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;


class ApplicantController extends Controller
{
    //$loginusername = Auth::user()->name;

    public function search(Request $request)
    {
       // Get the search value from the request
        $search = $request->input('search');

        // Search in the applicants table columns from the applicants table
        $applicant = Applicant::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('price', 'LIKE', "%{$search}%")
            ->orWhere('category', 'LIKE', "%{$search}%")
            ->orWhere('quantity', 'LIKE', "%{$search}%")
            ->orWhere('availability', 'LIKE', "%{$search}%")
            ->orWhere('type', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orderBy('id','asc')
            ->paginate(10);
            //->get();
           
        // Return the search view with the resluts compacted
        return view('search', compact('applicant'));        
    }
    
    public function getData()
    {
        $applicants = Applicant::query () -> sortable()->paginate(5);
        return view('search')->with('applicant', $applicants);
        
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = Applicant::all();
        //return view('index', compact('applicant'));
        //$applicants = Applicant::query () -> orderByDesc ('id') -> paginate (9);
        return view ('index', ['applicant' => $applicants]);

       
    }
    public function list()
    {
        $applicants = Applicant::all();
        //return view('index', compact('applicant'));
        //$applicants = Applicant::query () -> orderByDesc ('id') -> paginate (30);
        return view ('list', ['applicant' => $applicants]);       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData =$request->post();
       /* $storeData = $request->validate([
            'name' => 'required|max:255',
            'price' => '',
            'category' => '',
            'quantity' => '',
            'type' => '',
            'availability' => '',
            'image' => '',
            'description' => ''
        ]);                 
        
        if ($files = $request->file('image')) 
        {
            $imageName = $request->name.time().'.'.$request->image->extension();
            $files->move(public_path('images'), $imageName);
            $storeData['image'] = $imageName;
        }       
        $storeData['createdby'] = Auth::user()->name;
        $storeData['updatedby'] = Auth::user()->name;  */
        $applicant = Applicant::create($storeData);        
        return redirect('/applicants')->with('completed', 'Item Details has been saved!');
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicant = Applicant::findOrFail($id);
       return view('show', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $applicant = Applicant::findOrFail($id);
        return view('edit', compact('applicant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $updateData =  Applicant::find($id);    
    $updateData->save();
    //return redirect()->route('main.index')->with('update','Applicant has been updated!');


        //$updateData = $request->all();
           
        //Applicant::whereId($id)->update($updateData);
        return redirect('/applicants')->with('completed', 'Item details has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->delete();

        return redirect('/applicants')->with('completed', 'Item has been deleted');
    }
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
