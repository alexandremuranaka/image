@extends('layouts.admin')
@section('content')
<section class="page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12">
        <h1>Page<h1>
        </hr>
      </div>
      <div class="col-xs-12 col-sm-12">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Slug</th>
              <th>Image ID</th>
              <th>Image</th>
              <th>excerpt</th>
              <th>Description</th>
              <th>Show</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pages as $page)
              <tr>
                <td>{{$page->name}}</td>
                <td>{{$page->slug}}</td>
                <td>{{$page->img}}</td>
                <td><img src="/assets/images/thumb/{{$page->src}}" alt="{{$page->alt}}"/></td>
                <td>{{$page->excerpt}}</td>
                <td>{{$page->description}}</td>
                <td><a href="/admin/pages/{{$page->id}}"><i class="fa fa-eye"></i></a></td>
                <td><a href="/admin/pages/{{$page->id}}/edit"><i class="fa fa-pencil-square-o"></i></a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-4">
        <a href="/admin/pages/create/"><button class="btn btn-primary">Create Page</button></a>
      </div>
    </div>
  </div>
</section>
@endsection
