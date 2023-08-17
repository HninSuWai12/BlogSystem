@extends('Manage.Layout.master')
@section('manage')
<div class="container mt-4">
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label for="">Gender</label>
            <select name="gender" id="" class="form-control">
                <option value="" >Choose</option>
                @foreach ($gender as $genderName=>$genderValue )
                <option value="{{$genderValue}}">{{$genderName}}</option>
                    
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">Role</label>
            <select name="role" id="" class="form-control">
                <option value="" >Choose</option>
                @foreach ($role as $roleName=>$roleValue )
                <option value="{{$roleValue}}">{{$roleName}}</option>
                    
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        
        <div class="mb-3">
            
            <input type="submit" class="form-control btn btn-info" value="Add">
        </div>
    </form>
</div>
@endsection