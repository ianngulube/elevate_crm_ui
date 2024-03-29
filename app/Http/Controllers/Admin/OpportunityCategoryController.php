<?php

namespace App\Http\Controllers\Admin;

use App\Models\OpportunityCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpportunityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $opportunityCategories =   OpportunityCategory::all();
        return view('admin.opportunity-categories.index')->with(compact('opportunityCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('admin.opportunity-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255'

        ]);
        // if  validation  
       $record = OpportunityCategory::create($request->except(['_token', 'roles']));
      //  $user->roles()->sync($request->roles);
      

      $request->session()->flash('success', 'You have successfully created the Opportunity Category');
      return redirect(route('admin.opportunity-categories.index'));
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
        $opportunityCategory = OpportunityCategory::find($id);
        return view('admin.opportunity-categories.edit')->with(compact( 'opportunityCategory'));
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
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255'

        ]);
        //
        $opportunityCategory = OpportunityCategory::find($id);
        if(!$opportunityCategory){
            $request->session()->flash('error', 'You cannot  edit this Opportunity Category');
            return redirect(route('admin.opportunity-categories.index'));
        }
        $opportunityCategory->update($request->except(['_token']));
         $request->session()->flash('success', 'You have successfully edited the Opportunity Category');
        return redirect(route('admin.opportunity-categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $opportunityCategory  =  OpportunityCategory::destroy($id);
        $request->session()->flash('success', 'You have successfully deleted the Opportunity Category');
        return back();
    }
}
