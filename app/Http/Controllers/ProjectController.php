<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class ProjectController extends Controller
{
    public function __construct(){
       $this->middleware('auth')->except('index','show');
    }

    public function index(){
        return view('projects.index',[
            'projects' => Project::latest()->paginate(5)
        ]);
    }

    public function show(Project $project){
        // $project = Project::findOrFail($id);
        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function edit(Project $project){
        // $project = Project::findOrFail($id);
        return view('projects.edit',[
            'project' => $project
        ]);
    }

    public function create(){
        // return view('projects.create');
        return view('projects.create',[
            'project' => New Project()
        ]);
    }

    public function store(){

        # Se validan los campos
        $fields = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);
        
        #Se envian al modelo los campos validados para guardar en BD
        Project::create($fields);

        return redirect()->route('projects.index')->with('status','Proyecto Creado exitosamente');
    }

    public function update(Project $project){

        # Se validan los campos
        $fields = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);
        
        // #Se envian al modelo los campos validados para guardar en BD
       $project->update($fields);

        return redirect()->route('projects.show',$project)->with('status','Proyecto actualizado exitosamente');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status','Proyecto eliminado exitosamente');
    }
}
