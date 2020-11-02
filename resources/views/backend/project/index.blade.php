@extends('backend.index')

@section('section')

<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">{{$title}}</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">

                <div class="text-right form-group">
                    <a href="{{ route('projects.create') }}" class="btn cur-p btn-primary">Создать</a>
                </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Название</th>
                            <th scope="col">Статус</th>
                            <th scope="col">URL</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                       @foreach($projects as $project)
                            <tr {!! $project->status === 'deactived' ? 'style="background-color: rgba(0,0,0,.05);}"' : '' !!}>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->status}}</td>
                                <td>
                                    @if (isset($project->url))
                                        {{ $project->url }}
                                    @endif
                                </td>
                                <td>

                                    {!! Form::open(['url' => route('projects.destroy',['project'=>$project->id]),'class'=>'text-right  gap-10','method'=>'POST']) !!}

                                    {{ method_field('DELETE') }}

                                    {!! Form::button('Удалить', ['class' => 'btn cur-p btn-outline-danger','type'=>'submit']) !!}

                                    {!! Html::link(route('projects.edit',['project'=>$project->id]),'Редактировать',['class'=>'btn cur-p btn-outline-primary']) !!}

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
