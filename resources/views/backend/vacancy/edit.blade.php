@extends('backend.index') 
@section('section')

{!! Form::open(['url' => route('vacancys.update',array('vacancy'=>$data['id'])), 'class'=>'row', 'method'=>'POST','enctype'=>'multipart/form-data']) !!} 
{!! Form::hidden('_method', 'patch') !!} 
{!! Form::hidden('id', $data['id']) !!}

<div class="col-sm-12 form-row mT-10 mB-10">
    <h4 class="col-sm-6 c-grey-900">{{$title}}</h4>
    <div class="text-right col-sm-6">
       
        {!! Html::link(route('vacancys.index'),'Вернуться к списку',['class'=>'btn cur-p btn-secondary']) !!}
        {{ Form::submit('Сохранить', array('class' => 'btn btn-primary')) }}
        
        
    </div>
</div>

<div class="col-sm-12 mT-20">
    <div class="bgc-white p-20 bd">
        <div class="mT-30">
            <div class="form-row">
                <div class="form-group col-md-8">
                    {{ Form::label('title', 'Название') }} 
                    {{ Form::text('title', $data['title'], array('class'=>'form-control')) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('status', 'Статус') }}
                    {!! Form::select('status', array('active' => 'Активно', 'deactived' => 'Скрыто'), $data['status'],  array('class' => 'form-control')) !!} 
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('linck_hh', 'Ссылка на вакансию') }} 
                    {{ Form::text('linck_hh', $data['linck_hh'], array('class'=>'form-control')) }} 
                </div>
            </div>
            <div class="form-row mT-30">
                <div class="form-group col-md-12">
                    {{ Form::label('description', 'Описание проекта') }}
                    {{ Form::textarea('description', $data['description'], array('class' => 'form-control')) }}
                </div>
            </div>
         
        </div>
    </div>
</div>

{!! Form::close() !!}

@endsection