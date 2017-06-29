@extends('layouts.admin')
@section('content')
<section class="page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <h1>{{$page->name}}<h1>
        </hr>
      </div>
      <div class="col-xs-12 col-sm-12">
        @if($page->src)
        <div class="page_banner" style="background-image:url(/assets/images/full/{{$page->src}})"></div>
        @endif
        <p>{!! $page->description !!}</p>
      </div>
    </div>
  </div>
</section>
@endsection
