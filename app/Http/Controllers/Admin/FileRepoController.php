<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileRepo;
use Illuminate\Http\Request;

class FileRepoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $files =   FileRepo::all();
        return view('admin.file-repos.index')->with(compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $docTypes  = [
            'Minutes from Business Meeting',
            'Recording from Business Meeting',
            'Organisation Constitution',
            'Code of Conduct',
            'Business Insurance Documents',
            'Service Level Agreements',
            'Compliance and Regulatory Documents', 
            'Business Creation Documents',
            'Transactional Documents',  
            'Financial Documents', 
            'Business Reports',
            'Business Plans' , 
            'Employment Agreement',  
            'Non-Disclosure Agreement'             

        ];
  
        return view('admin.file-repos.create')->with(compact('docTypes'));
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
        $this->validate($request, [
            
            'file' => 'required|mimes:pdf,xlx,csv,jpg,png,gif,jpeg,JPEG|max:5000'

        ]);
     
        
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('repository'), $fileName);
   

        

        $doc = new FileRepo;
        $doc->type =    $request->input('type');
        $doc->fileUrl =     $fileName ;
        $doc->description =    $request->input('description');
        $doc->user_id =    $request->input('user_id');
        $doc->save();

        $request->session()->flash('success', 'You have successfully added a document');
        return redirect(route('admin.file-repos.index'));
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
    public function update(Request $request, $id)
    {
        //
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
