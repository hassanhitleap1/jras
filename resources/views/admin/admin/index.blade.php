@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>admins</h1>
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
      @foreach ($admins as $admin )
            <tr>
            <th scope="row">1</th>
            <td>{{$admin->name}}</td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->phone}}</td>
            </tr> 
      @endforeach
 
    
  </tbody>
</table>
    {{$admins->links()}}
    </div>
</div>
@endsection