@extends('layouts.admin')

@section('content')
<section class="page">
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12">
            <h1>Nova Imagem</h1>
          </div>
          <div class="col-xs-12 col-sm-12">
            {!! Form::open(['action' =>'ImageController@store','files' => true])!!}
              {!! Form::text('alt',null,['placeholder'=>'Nome da Imagem']) !!}
              {!! Form::file('img') !!}
              {!! Form::submit('Enviar Imagem',null,['class'=>'btn btn-primary']) !!}
            {!! Form::close()!!}
          </div>
      </div>
  </div>
</section>
@endsection
