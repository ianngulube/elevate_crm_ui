<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\OpportunityCategory;
use App\Http\Controllers\Controller;
use App\Models\OpportunitySubCategory;

class OpportunitySubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $opportunitySubCategories = DB::select('SELECT a.*,b.name as category_name
        from opportunity_sub_categories a
        inner  join opportunity_categories b  on a.opportunity_category_id=b.id'       
       );
 
        return view('admin.opportunity-sub-categories.index')->with(compact('opportunitySubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $opportunityCategories =  OpportunityCategory::all();
 
        return view('admin.opportunity-sub-categories.create')->with(compact('opportunityCategories'));
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
            'description'=>'required|max:255',
            'opportunity_category_id'=>'required',

        ]);
        // if  validation  
       $record = OpportunitySubCategory::create($request->except(['_token', 'roles']));
      //  $user->roles()->sync($request->roles);
      

      $request->session()->flash('success', 'You have successfully created the Opportunity sub  Category');
      return redirect(route('admin.opportunity-sub-categories.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpportunitySubCategory  $opportunitySubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(OpportunitySubCategory $opportunitySubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpportunitySubCategory  $opportunitySubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $opportunitySubCategory = OpportunitySubCategory::find($id);
        $opportunityCategories  = OpportunityCategory::all();
        return view('admin.opportunity-sub-categories.edit')->with(compact( 'opportunitySubCategory','opportunityCategories'));
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
            'description'=>'required',
           'opportunity_category_id'=>'required'

        ]);
        //
       $opportunitySubCategory= OpportunitySubCategory::find($id);
        if(!$opportunitySubCategory){
            $request->session()->flash('error', 'You cannot  edit this Opportunity sub Category');
            return redirect(route('admin.opportunity-sub-categories.index'));
        }
        $opportunitySubCategory->update($request->except(['_token']));
         $request->session()->flash('success', 'You have successfully edited the Opportunity sub Category');
        return redirect(route('admin.opportunity-sub-categories.index'));
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
       $opportunitySubCategory =  OpportunitySubCategory::destroy($id);
        $request->session()->flash('success', 'You have successfully deleted the Opportunity sub Category');
        return back();
    }
}
