<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;
use Illuminate\Support\Str;
use App\Project;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
        $projects = Project::All()->reverse();

        $data = [
            'title' => 'Портфолио',
            'projects' => $projects,
        ];

        return view('backend.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = [
            'title' => 'Новый проект',
        ];

        return view('backend.project.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
         
        if($request->file()):
            $dir = public_path('uploads/projects/');
            $file = $request->file('img');
            $name = Str::random(5) .'.' . $file->getClientOriginalExtension() ?: 'jpg';
            $img = Image::make($file);
            $img->save($dir . $name);
            $input['img'] = $name;
        endif;

        $project = Project::create($input);

        if ($project->save()) {    
            return redirect()->route('projects.index')->with('status','Проект добавлен');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {

        $old = $project->toArray();

        if($project->img){

            $dir = public_path('uploads/projects/');
     
            if(file_exists($dir . $project->img)):

                    $general[] = [
                        "name" => $project->img,
                        "size" => filesize($dir . $project->img),
                        "file" => $project->img,
                        "data" => array(
                            "thumbnail" => '/uploads/projects/' . $project->img,
                        ),
                    ];
            endif;

            $preLoadImg = [];
            $general = isset($general) ? json_encode($general) : null;
            array_push($preLoadImg, $general);
  
        }else{
            $preLoadImg = null;
        }

        $data = [
            'title' => 'Редактирование проекты - '.$old['title'],
            'data' => $old,
            'project' => $project,
            'preLoadImg' => $preLoadImg,
        ];


        return view('backend.project.edit',$data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $input = $request->except('_token');

        $dir = public_path('uploads/projects/');

        if(!json_decode($request->general_photo, true)){

            File::delete($dir . $project->img);

            $input['img'] = null;
        }
        if($request->file()):
            
            $file = $request->file('img');
            $name = Str::random(5) .'.' . $file->getClientOriginalExtension() ?: 'jpg';
            $img = Image::make($file);
            $img->save($dir . $name);
            $input['img'] = $name;
        endif;

        $project->fill($input);

        if($project->update()) {  
            return redirect()->route('projects.index')->with('status', 'Информация обновлена');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $dir = public_path('uploads/projects/');
        File::delete($dir . $project->img);
        $project->delete();

        return redirect()->route('projects.index')->with('status','Проект удален');
    }
}
