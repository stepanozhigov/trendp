<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Lead;
use App\Connectors\BitrixConnector;


class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::All()->reverse();

        $data = [
            'title' => 'Заявки',
            'leads' => $leads,
        ];

        return view('backend.lead.index', $data);
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

        $lead = Lead::create($input);
        $bitrixConnector = new BitrixConnector;
        $arVisits = session('visits');

        if($request->quiz){
            $bitrixConnector->addLead([
                'title' => 'Квиз',
                'name'  =>  'Квиз',
                'phone' =>  $request->phone,
                'direction' =>  208,
                'visits'	=>	$arVisits,
                'comment'	=> $request->text,
                'source'    =>  'WEB'
            ]);
        }else{
            $bitrixConnector->addLead([
                'title' => 'Лид с trend-p',
                'name'  =>  $request->name,
                'phone' =>  $request->phone,
                'direction' =>  208,
                'visits'	=>	$arVisits,
                'comment'	=> $request->tag,
                'source'    =>  'WEB'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        $data = [
            'title' => 'Заявка',
            'lead' => $lead
        ];

        return view('backend.lead.show',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('leads.index')->with('status','Заявка удалена');
    }
}
