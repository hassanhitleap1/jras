@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>students</h1>
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
      @foreach ($students as $student )
            <tr>
            <th scope="row">1</th>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->phone}}</td>
            </tr> 
      @endforeach
 
    
  </tbody>
</table>
    {{$students->links()}}
    </div>
</div>
@endsection