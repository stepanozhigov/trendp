@extends('backend.index')

@section('section')

<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">{{$title}}</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">

                <div class="text-right form-group">
                    <a href="{{ route('vacancys.create') }}" class="btn cur-p btn-primary">Создать</a>
                </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Название</th>
                            <th scope="col">Статус</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                       @foreach($vacancys as $vacancy)
                            <tr {!! $vacancy->status === 'deactived' ? 'style="background-color: rgba(0,0,0,.05);}"' : '' !!}>
                                <th scope="row">{{ $vacancy->id }}</th>
                                <td>{{ $vacancy->title }}</td>
                                <td>{{ $vacancy->status}}</td>
                                <td>

                                    {!! Form::open(['url' => route('vacancys.destroy',['vacancy'=>$vacancy->id]),'class'=>'text-right  gap-10','method'=>'POST']) !!}

                                    {{ method_field('DELETE') }}

                                    {!! Form::button('Удалить', ['class' => 'btn cur-p btn-outline-danger','type'=>'submit']) !!}

                                    {!! Html::link(route('vacancys.edit',['vacancy'=>$vacancy->id]),'Редактировать',['class'=>'btn cur-p btn-outline-primary']) !!}

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
