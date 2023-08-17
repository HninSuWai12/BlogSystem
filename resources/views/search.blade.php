@extends('Layout.master')
@section('title')
    Medium
@endsection
@section('styles')
    <style>
       button.favorite-btn {
        border: none;
        background-color: transparent;
        padding: 0; /* Remove padding to eliminate extra spacing */
        cursor: pointer;
    }

    /* Style the heart icon to look like a button */
    
    </style>
@endsection
@section('post')
    <div class="container mt-3">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-success">
                {{ Session::get('error') }}
            </div>
        @endif


        <div class="float-lg-end float-sm-none col-md-4 col-sm">
            <div class="col-md-12 mt-3" style="z-index: 1">
                <h5 class="aside-ttl">2022 in Latest Posts</h5>
                <div class="col-lg-4 order-lg-2 col-sm-12 order-1 border-left border-1 ps-3 list-asd">
                    <div class="w-100 mx-auto">
                        <div class="d-flex flex-column">
                            <div class="row my-3">
                                <div class="col-md-12 d-flex">
                                    <div class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                                        style="height: 30px; width: 30px">
                                        @if ($user->image == null)
                                            <img src="{{ asset('image/download (4).jfif') }}" alt="" height="100%"
                                                height="70" class="rounded-circle">
                                        @else
                                            <img src="{{ asset('storage/' . $user->image) }}" alt="" height="100%"
                                                class="rounded-circle">
                                        @endif
                                    </div>
                                    <h6 class="px-2">{{ $user->name }}</h6>
                                </div>
                                <div class="col-md-8">
                                    <p class="fw-semibold">2022 in a Word:Permastressed</p>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12 d-flex">
                                    <div class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                                        style="height: 30px; width: 30px">
                                        <img src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                                            alt="Profile" height="100%" />
                                    </div>
                                    <h6 class="px-2">Zulie Rane</h6>
                                </div>
                                <div class="col-8">
                                    <span class="fw-semibold">2022 in a Word:Permastressed
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Programming</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Data
                    Science</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Technology</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Self
                    Improvement</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Writing</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Relationships</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Machine
                    Learning</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Productivity</a>
                <a href=""
                    class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary">Politics</a>
            </div>
        </div>
        @if ($userData->isEmpty())
        <div class="bg-secondary col-7 p-5">
            <p class="text-info fw-bold">There is no user</p>
        </div>
        @else
        <div class="container">
            @foreach ($userData as $userData )
            <div class="row mt-3 ">
                <div class="col-8">
                    <div class="d-flex justify-content-start">
                        @if ($userData->image != null)
                        <img src="{{asset('storage/' . $userData->image)}}" width="30px" height="30px"
                        class="rounded-circle" alt="">
                        @else
                        <img src="{{asset('image/download.png')}}" width="30px" height="30px"
                        class="rounded-circle" alt="">
                            
                        @endif
                        <strong class="mb-2 pst-wrt">
                            {{ $userData->name }}
                            
                        </strong>
                        
                    </div>
                    <p class="ms-3">{{$userData->bio}}</p>
                </div>
            </div>
                
            @endforeach
        </div>
            
        @endif

        @if ($data->isEmpty())
            <div class="bg-secondary col-7 p-5">
                <strong>
                    <p class="text-info fw-bold">There is no data</p>
                </strong>
            </div>
            @else
           
       
        <div class="container mt-5">
            
            
            @foreach ($data as $item)
           
                {{-- @dd($item->toArray()); --}}
                <div class="row mt-3">
                    <div class="col-8">
                        <div class="d-flex justify-content-start">
                            {{-- <img src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ" class=""
                                alt="Cinque Terre" width="20px" height="20px" /> --}}
                            @if ($item->user->image == null)
                                <img src="{{ asset('image/download (4).jfif') }}" alt="" width="30"
                                    height="30" class="rounded-circle">
                            @else
                                <img src="{{ asset('storage/' . $item->user->image) }}" alt="" width="30"
                                    height="30" class="rounded-circle">
                            @endif
                            <div class="px-2">
                                <p class="mb-2 pst-wrt">
                                    {{ $item->user->name }}
                                    <span class="text-muted pst-date">. Nov 30</span>
                                </p>
                                <h6 class="list-ttl">
                                    {{ $item->title }}
                                </h6>

                                <p class="list-txt">
                                    {!! $item->content !!}
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn cat-txt cat btn-sm text-dark rounded-pill">
                                            Programming
                                        </button>
                                        <span class="blog-date">9 min read ·</span>
                                        <span class="blog-date">Selected for you·</span>
                                    </div>
                                    <div class="col-md-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM8.25 12h7.5"
                                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                        @if ($item->user_id == Auth::user()->id)
                                            <svg width="24" height="24" class=" dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false" viewBox="0 0 24 24"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
                                                    fill="#000"></path>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('admin.edit', $item->id) }}">Edit</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('admin.delete', $item->id) }}">Delete</a></li>

                                                </ul>
                                            </svg>
                                        @else
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
                                                    fill="#000"></path>

                                            </svg>
                                        @endif

                                        <!-- Example single danger button -->

                                    </div>
                                    {{-- <div class="col-2 ">
                                        <i class="fa-heart far heart-icon" id="heart" onclick="changeColor()"></i>
                                    </div>  --}}
                                    <div class="col-2">
                                        {{-- <form action="{{route('post.favourite',$item->id)}}" method="POST">
                                        @csrf
                                        <i class="fas fa-heart heart-icon" id="heart" onclick="changeColor(this)"></i>
                                        <button type="submit" style="border:none">
                                             
                                        </button>
                                        </form> --}}
                                        {{-- @if (auth()->check())
                                            @if ($user && $user->favorites($item->id))
                                                <form action="{{ route('post.unfavourite', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">Unfavorite</button>
                                                </form>
                                            @else
                                                <form action="{{ route('post.favourite', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit">Favorite</button>
                                                </form>
                                            @endif
                                        @endif --}}
                                        @if (auth()->check())
                                            @if ($item->favorites->contains('user_id', auth()->id()))
                                                <form action="{{ route('post.unfavourite', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="favorite-btn {{ auth()->check() && auth()->user()->favorites($item->id) ? 'favorited' : '' }}" data-blog-id="{{ $item->id }}">
                                                        <i style="color: red" class="fa-heart {{ auth()->check() && auth()->user()->favorites($item->id) ? 'fas' : 'far' }}"></i>
                                                    </button>
                                                </form>
                                            @else
                                                <form action="{{ route('post.favourite', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button class="favorite-btn" type="submit" >
                                                        <i class="  fa-regular fa-heart" ></i>
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <a href="{{ route('post.detail', $item->id) }}">
                            <img src="{{ asset('storage/' . $item->image) }}" height="112" width="112" />
                        </a>
                    </div>
                </div>
                <hr />
            @endforeach

                
            
        </div>
        @endif
    </div>
@endsection
@section('scripts')
    <script>
        function changeColor(icon) {
            icon.classList.toggle('clicked');
        }
    </script>
@endsection
