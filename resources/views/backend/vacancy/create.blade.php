@extends('backend.index') 
@section('section')

{!! Form::open(['url' => route('vacancys.store'), 'class'=>'row', 'method'=>'POST','enctype'=>'multipart/form-data']) !!}

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
                    {{ Form::text('title', null, array('class'=>'form-control')) }}
                </div>
                <div class="form-group col-md-4">
                    {{ Form::label('status', 'Статус') }}
                    {!! Form::select('status', array('active' => 'Активно', 'deactived' => 'Скрыто'), null,  array('class' => 'form-control')) !!} 
                </div>
                <div class="form-group col-md-6">
                    {{ Form::label('linck_hh', 'Ссылка на вакансию') }} 
                    {{ Form::text('linck_hh', null, array('class'=>'form-control')) }} 
                </div>
            </div>
            <div class="form-row mT-30">
                <div class="form-group col-md-12">
                    {{ Form::label('description', 'Описание') }}
                    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                </div>
            </div>
         
        </div>
    </div>
</div>

{!! Form::close() !!}


@endsection
