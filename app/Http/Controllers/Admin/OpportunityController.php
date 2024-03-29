<?php

namespace App\Http\Controllers\Admin;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use App\Models\OpportunityCategory;
use App\Http\Controllers\Controller;
use App\Models\OpportunitySubCategory;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $opportunities  = Opportunity::all();
        return view('admin.opportunities.index')->with(compact('opportunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $opportunityCategories  = OpportunityCategory::all();
        $opportunitySubCategories = OpportunitySubCategory::all();
        $types  = [
            'Jobs',
            'Automotive Vehicles',
            'Community',
            'Home & Garden',
            'Sports & Leisure',
            'Electronics',
            'Events',
            'Baby & Kids',
            'Property',
            'Services'
         

        ];
        return view('admin.opportunities.create')->with(compact('opportunityCategories', 'opportunitySubCategories', 'types'));
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
     
        /*
 
            $table->string('imageUrl');
            $table->unsignedBigInteger('opportunity_sub_category_id');
            $table->unsignedBigInteger('user_id');    
            $table->timestamps();
        */
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('opportunities'), $fileName);

        $opportunity = new Opportunity;
        $opportunity->name = $request->input('name');
        $opportunity->description = $request->input('description');
        $opportunity->start_date = $request->input('start_date');
        $opportunity->end_date = $request->input('end_date');
        $opportunity->imageUrl = $fileName;
        $opportunity->user_id = $request->input('user_id');
        $opportunity->opportunity_sub_category_id = $request->input('opportunity_sub_category_id');
        $opportunity->type = $request->input('type');

        $opportunity->save();

        $request->session()->flash('success', 'You have successfully created a opportunity');
        return redirect(route('admin.opportunities.index'));



      
    }
    public  function getSubCategoriesByCategoryID($id)

    {

        $globalSelect = "Please select Sub Category";
        if (!$id) {
            $html = '<option value="">' . $globalSelect . '</option>';
        } else {
            $html = '';
            $subcats = OpportunitySubCategory::where('opportunity_category_id', $id)->get();
            foreach ($subcats as $subcat) {
                $html .= '<option value="' . $subcat->id . '">' . $subcat->name . '</option>';
            }
        }

        return response()->json(['html' => $html]);
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
    public function destroy(Request $request,$id)
    {
        //

        $opportunity  =  Opportunity::destroy($id);
        $request->session()->flash('success', 'You have successfully deleted the the opportunity area');
        return back();
    }
}
