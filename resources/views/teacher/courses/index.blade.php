@extends('teacher.layouts.teacher')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="float-left">
        <h1>courses</h1>
      </div>
        <div class="float-left"><a  href="{{asset('teacher/courses/create')}}"  class="btn btn-primary "> create</a></div><br>
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
           <td><a class="btn btn-primary" href="{{asset('teacher/courses/'.$course->id.'/edit')}}" role="button">Link</a></td>
            </tr> 
      @endforeach
 
    
  </tbody>
</table>
    {{$courses->links()}}
    </div>
</div>
@endsection