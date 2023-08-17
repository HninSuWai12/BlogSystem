@extends('Manage.Layout.master')
@section('manage')
<div class="container-fluid">

    <!-- Page Heading -->
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
           <a href="{{route('manage.add')}}">
            <button class="btn btn-success">Add Teacher</button>
           </a>
        </h1>
        <a href="{{route('generate.csv')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Role</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        @foreach ($user as $item )
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->gender}}</td>
          <td>{{$item->role}}</td>
          @if ($item->role== 'user')
          <td>
           
            <a href="{{ url('manage/edit/' . $item->id) }}">
              <button class="btn btn-info btn-sm">Edit</button>
            </a>
            <a href="{{ url('manage/delete/' . $item->id) }}">
              <button class="btn btn-danger btn-sm">Delete</button>
            </a>
           </td>
           <td>
            <a href="{{route('admin.approve',$item->id)}}">
              <label class="checkbox-inline">
                <input type="checkbox" {{ $item->status === 'approved' ? 'checked' : '' }} 
                data-on="Approved" data-off="Pending" data-onstyle="success" data-offstyle="warning" data-size="sm" onchange="togglePageStatus({{ $item->id }})"
                data-toggle="toggle"> 
              </label>
            </a>
            
           </td>
           <td>
            @if ($item->status=='approved')
              <button class="btn btn-sm btn-success">Approved</button>
            @endif
           </td>
          @endif
        </tr>
        
          
        @endforeach
        </tbody>
      </table>
  </div>
  {{$user->links()}}

</div>
@endsection
@section('btnscript')
<script>
  // app.js
function togglePageStatus(itemId) {
    const checkbox = document.querySelector(`input[data-toggle="toggle"][data-item-id="${itemId}"]`);
    const statusInput = document.querySelector(`input[name="status"][data-item-id="${itemId}"]`);

    if (checkbox.checked) {
        statusInput.value = 'approved';
    } else {
        statusInput.value = 'pending';
    }

    // Submit the form
    const form = checkbox.closest('form');
    form.submit();
}

</script>
@endsection