@extends('layouts.default')
@section('title','主页')
@section('content')
  <div class="jumbotron text-center">
      <h1>Hello,Laravel</h1>
      <p>
        你现在看到的是<a href="#" ><h1>水萌信息技术首页</h1></a>
      </p>
      <p>
     一切，将从这里开始。
   </p>
   <p>
     <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
   </p>
  </div>
@endsection
