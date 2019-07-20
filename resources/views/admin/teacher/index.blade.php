@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Teachers</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($teachers as $teacher )
            <tr>
            <th scope="row">1</th>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->phone}}</td>
            </tr> 
      @endforeach
 
    
  </tbody>
</table>
    {{$teachers->links()}}
    </div>
</div>
@endsection