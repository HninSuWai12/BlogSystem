@extends('Layout.master')
@section('title')
    Edit Post
@endsection
@section('post')
    <div class="w-100 d-flex justify-content-center align-items-center">
        <div class="container-wrapper">
            <div class="w-80 d-flex align-items-center justify-content-center py-4">
                <form action="{{ route('admin.update', $post->id) }}" method="POST" enctype="multipart/form-data"
                    class="d-flex col-md-8 flex-column border border-3 forms border-secondary">
                    @csrf
                    <h2>Post Edit</h2>
                    <div class="d-flex flex-column mb-3">
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="text" id="title" name="title" value="{{ $post->title }}"
                            class="rounded form-control border border-1 px-3 py-2" placeholder="Post title" />
                        <div class="m-3">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <input type="text" id="category" name="category" value="{{ $post->category }}"
                            class="rounded form-control border border-1 px-3 py-2" placeholder="Select a category" />
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <input type="file" id="category" name="image" class="rounded form-control"
                            placeholder="Select category" />
                        <div class="preview my-2 border-1 rounded-3 overflow-hidden" style="max-width: 150px">
                            <img src="{{ asset('storage/' . $post->image) }}" style="height: 80px; width: 80px" />
                        </div>
                        <div class="m-3">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="m-3">
                        <textarea name="content" id="summerNote">{{ $post->content }}</textarea>

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
