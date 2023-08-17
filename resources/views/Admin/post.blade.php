@extends('Layout.master')
@section('title') 
Create Post
@endsection
@section('post')

<div class="w-100 d-flex justify-content-center align-items-center">
    <div class="container-wrapper">
        <div class="w-80 d-flex align-items-center justify-content-center py-4">
            <form action="{{route('admin.post')}}" method="POST" enctype="multipart/form-data" class="d-flex col-md-8 flex-column border border-3 forms border-secondary">
                @csrf
                <h2>Post Create</h2>
                <div class="d-flex flex-column mb-3">
                    <input type="text" id="title" name="title"
                        class="rounded form-control border border-1 px-3 py-2" placeholder="Post title" />
                        <div class="m-3">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                </div>
                <div class="d-flex flex-column mb-3">
                    <select name="category" id="" class="form-control">
                    <option value="" disabled selected>Choose</option>
                    @foreach  ($categoryItem as $statusName => $statusValue)
                            <option value="{{$statusValue}}">{{$statusName}}</option>
                       
                    @endforeach
                </select>
                    {{-- <input type="text" id="category" name="category"
                        class="rounded form-control border border-1 px-3 py-2" placeholder="Select a category" /> --}}
                        <div class="m-3">
                            @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                </div>
                <div class="d-flex flex-column mb-3">
                    <input type="file"  name="image" class="rounded form-control"
                        placeholder="Select category" accept=".png, .jpg, .jpeg , .jfif"/>
                    {{-- <div class="preview my-2 border-1 rounded-3 overflow-hidden" style="max-width: 150px">
                        <img src="https://miro.medium.com/fit/c/160/112/1*JD9HvtX6p1RgzJ1RIYkuEA.jpeg"
                            style="height: 80px; width: 80px" />
                    </div> --}}
                    <div class="m-3">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="m-3">
                    <textarea name="content" id="summerNote" ></textarea>
                    
                <div class="m-3">
                    @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                </div>
               <div class="m-3">
                <input type="submit" value="Post" class="form-control btn btn-sm btn-success">
               </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
 <script>
        $(document).ready(function() {
            $("#summerNote").summernote({
                placeholder: "Post Description",
                height: 100,
                tabsize: 2,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "clear"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                ],
            });
        });
    </script>
@endsection