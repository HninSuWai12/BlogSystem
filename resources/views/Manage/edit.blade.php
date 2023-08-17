@extends('Manage.Layout.master')
@section('manage')
<div class="container mt-4">
    <form action="{{ url('manage/update/' . $user->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="">Gender</label><br>
            
               
                @foreach ($gender as $genderName=>$genderValue )
               <div class="form-check">
                <input type="radio" name="gender" @if ($user->gender==$genderValue) checked @endif
                    
                 id="{{$genderValue}}" class="form-check-input" value="{{$genderName}}">
                <label for="{{$genderValue}}" class="form-check-label">{{$genderName}}</label>
               </div>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Role</label><br>
            @foreach ($role as $roleName => $roleValue)
                <div class="form-check">
                    <input type="radio" @if ($user->role == $roleValue) @checked(true)
                        
                    @endif name="role" id="{{ $roleValue }}" class="form-check-input" value="{{ $roleValue }}">
                    <label for="{{ $roleValue }}" class="form-check-label">{{ $roleName }}</label>
                </div>
            @endforeach
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