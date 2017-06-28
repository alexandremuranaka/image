@extends('layouts.admin')

@section('content')
<section class="page">
  <div class="container">
      <div class="row">
          <div class="col-xs-12 col-sm-12">
            <h1>Imagens</h1>
          </div>
          @foreach($images as $img)
            <div class="col-xs-12 col-sm-3">
              {!! Form::open(['method' => 'DELETE', 'action' => ['ImageController@destroy', $img->id]]) !!}
              <div class="img_display">
                <img src="/assets/images/thumb/{{$img->src}}" alt="{{$img->alt}}" />
                <button id="btn_image_delete" class="fa fa-times">x</button>
              </div>
                {!! Form::close() !!}
            </div>
          @endforeach
          <div class="clearfix"></div>
          <div class="col-xs-12 col-sm-12">
            <a href="/admin/images/create">Enviar nova imagem</a>
          </div>
      </div>
  </div>
</section>
@endsection
