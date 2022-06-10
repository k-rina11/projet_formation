<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        // afficher page cours correspondant à formation_id égale à $id passé en parametre de la vue
          /* $lescours = Cours::where('formation_id', $id)
                         //   ->groupeBy('module_id')
                          //  ->having('numero', '>', 0)
                            ->orderBy('numero','asc')->get();

           $formation = Formation::findOrFail($id);

       // SELECT DISTINCT `module_id` FROM `cours` WHERE formation_id =1
           $modules = Cours::where('formation_id',$id)
                        ->select('module_id')
                        ->distinct()
                        ->get(); 
                       // dd($modules);

           $coursinit= DB::table('cours')->where('id',1)->get();

          $cours= cours::where('formation_id',$id);
     
       //  dd($cours);
        //afficher les élements de la formation numero de id = $id

        */
        // $modules=DB::table('modules')->where('formation_id',$id)->select('*')->get();
        if (isset($request->id)) {

        $modules = Module::whereFormationId($request->id)->get();
      /*  $modules = Cours::join('modules', 'cours.module_id', 'cours.id')
                            ->join('formations', 'modules.formation_id', 'formations.id')
                            ->where('modules.formation_id', $request->id)
                            ->get();
                            */

        $formation = Formation::findOrFail($request->id);
         $premiercours=Course::where('numero',1)->get();
       // $cours=Course::whereModuleId($modules->id)->get();
          $cours= Course::whereModuleId($modules[0]->id)->get();
        return view('customer.pages.cours',compact('modules','formation','cours','premiercours'));
        if(isset($request->name)){ 
            //on aimerait apres le id de formation,

            
            $modules= Module::whereFormationId($request->id)->get();

            $formation = Formation::findOrFail($request->id);
        

        
            return view('customer.pages.cours',compact('modules','formation'));
        }else{
            $modules= Module::whereFormationId($request->id)->get();

            $formation = Formation::findOrFail($request->id);
            $premiercours=Course::where('numero',1);
            dd($premiercours);
        
            return view('customer.pages.cours',compact('modules','formation','premiercours'));
        }

        }
        
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

 
 
 
    
