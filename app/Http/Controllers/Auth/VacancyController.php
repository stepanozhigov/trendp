<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancys = Vacancy::All();

        $data = [
            'title' => 'Вакансии',
            'vacancys' => $vacancys,
        ];

        return view('backend.vacancy.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Новая вакансия',
        ];

        return view('backend.vacancy.create',$data);
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
         
        $vacancy = Vacancy::create($input);

        if ($vacancy->save()) {    
            return redirect()->route('vacancys.index')->with('status','Вакансия добавлена');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacancy $vacancy)
    {
        $old = $vacancy->toArray();

        $data = [
            'title' => 'Редактирование вакансии - '.$old['title'],
            'data' => $old,
            'vacancy' => $vacancy,
        ];

        return view('backend.vacancy.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacancy $vacancy)
    {
        $input = $request->except('_token');

        $vacancy->fill($input);

        if($vacancy->update()) {  
            return redirect()->route('vacancys.index')->with('status', 'Информация обновлена');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacancy  $vacancy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();

        return redirect()->route('vacancys.index')->with('status','Вакансия удалена');
    }
}
