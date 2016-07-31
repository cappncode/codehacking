@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>

    @if(Session::has('created_category'))

        <div class="alert alert-success">
            {{session('created_category')}}
        </div>

    @endif

    @if(Session::has('deleted_category'))

        <div class="alert alert-danger">
            {{session('deleted_category')}}
        </div>

    @endif

    <div class="col-sm-6">

        {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group pull-left">
            {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

        <div class="form-group col-sm-2">
            {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">


    </div>

@stop
