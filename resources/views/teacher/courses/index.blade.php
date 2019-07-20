@extends('teacher.layouts.teacher')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>courses</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
       <th scope="col">discount</th>
       <th scope="col">action</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach ($courses as $course )
            <tr>
            <th scope="row">1</th>
            <td>{{$course->title}}</td>
            <td>{{$course->description}}</td>
            <td>{{$course->price}}</td>
            <td>{{$course->discount}}</td>
           <td>action</td>
            </tr> 
      @endforeach
 
    
  </tbody>
</table>
    {{$courses->links()}}
    </div>
</div>
@endsection