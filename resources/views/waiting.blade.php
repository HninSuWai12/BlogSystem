@extends('Layout.master')
@section('post')

@if (Session::has('info'))
<div class="alert alert-warning">
    {{ Session::get('info') }}
</div>
@endif
   
<div class="container">
    <form action="{{route('goDashboard')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-info ">Go To the deahboard</button>
    </form>
</div>
@endsection