@extends('layouts.admin')
@section('content')
<section class="page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Page Edit: {{$page->name}}</h1>
        <hr/>
      </div>
      <div class="col-xs-12 col-sm-6">


        {!! Form::open(['method' => 'PUT','files' => true, 'action' => ['PageController@update', $page->id]]) !!}
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name',$page->name) !!}
        </div>
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('slug', 'Slug') !!}
          {!! Form::text('slug',$page->slug) !!}
        </div>
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('image', 'Image') !!}
          @if($page->img)
            <div class="img_holder"><img src="{{$page->img}}" /><i class="fa fa-times"></i></div>
          @endif
            {!! Form::file('image',['class' =>'new_image']) !!}

        </div>
        <div class="col-xs-12 col-sm-12">
          {!! Form::label('description', 'Description') !!}
          {!! Form::textarea('description', $page->description) !!}
        </div>
        <div class="col-xs-12 col-sm-6">
          {!! Form::submit('Save Page', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</section>
@endsection
