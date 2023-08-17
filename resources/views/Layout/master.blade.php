<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css"
        integrity="sha256-IKhQVXDfwbVELwiR0ke6dX+pJt0RSmWky3WB2pNx9Hg=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
    @yield('styles')
</head>

<body>
    <header class="fixed-top w-100 d-flex justify-content-center align-items-center border-bottom border-secondary">
        <div class="container-wrapper">
            <div class="w-100 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center py-3">
                    <a href="{{route('user.home')}}">
                        <svg viewBox="0 0 1043.63 592.71" height="25px">
                            <g data-name="Layer 2">
                                <g data-name="Layer 1">
                                    <path
                                        d="M588.67 296.36c0 163.67-131.78 296.35-294.33 296.35S0 460 0 296.36 131.78 0 294.34 0s294.33 132.69 294.33 296.36M911.56 296.36c0 154.06-65.89 279-147.17 279s-147.17-124.94-147.17-279 65.88-279 147.16-279 147.17 124.9 147.17 279M1043.63 296.36c0 138-23.17 249.94-51.76 249.94s-51.75-111.91-51.75-249.94 23.17-249.94 51.75-249.94 51.76 111.9 51.76 249.94">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>
                    {{-- Search Form --}}
                   <form action="{{route('search')}}" method="GET">
                    @csrf
                    <div class="mx-4 bg-slate-opt rounded-pill overflow-hidden d-flex align-items-center pr-3">
                        <button style="border: none;" type="submit">
                            <i class="fa-solid fa-magnifying-glass" style="padding-left: 0.8rem"></i>
                        </button>
                        <input type="text" name="query" value="{{old('name')}}" class="w-100 border-0 py-2 px-3 bg-transparent search"
                            placeholder="Search Medium" />
                    </div>
                
                </form>
                </div>
                <div class="d-flex align-items-center">
                    <a href="{{ route('page.admin') }}">
                        <button class="d-flex mx-2 align-items-center justify-content-center border-0 bg-transparent">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-label="Write">
                                <path
                                    d="M14 4a.5.5 0 0 0 0-1v1zm7 6a.5.5 0 0 0-1 0h1zm-7-7H4v1h10V3zM3 4v16h1V4H3zm1 17h16v-1H4v1zm17-1V10h-1v10h1zm-1 1a1 1 0 0 0 1-1h-1v1zM3 20a1 1 0 0 0 1 1v-1H3zM4 3a1 1 0 0 0-1 1h1V3z"
                                    fill="currentColor"></path>
                                <path
                                    d="M17.5 4.5l-8.46 8.46a.25.25 0 0 0-.06.1l-.82 2.47c-.07.2.12.38.31.31l2.47-.82a.25.25 0 0 0 .1-.06L19.5 6.5m-2-2l2.32-2.32c.1-.1.26-.1.36 0l1.64 1.64c.1.1.1.26 0 .36L19.5 6.5m-2-2l2 2"
                                    stroke="currentColor"></path>
                            </svg>
                            <span class="px-1">Write</span>
                        </button>

                    </a>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="{{route('profile.page')}}">
                            <div class="mx-2 overflow-hidden" style="width: 30px; height: 30px; border-radius: 50%">
                                {{-- <img src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg" alt="Profile"
                                    height="32px" width="32px" /> --}}
                                    @if (Auth::user()->image == null)
                                    <img src="{{asset('image/download (4).jfif')}}" alt="" height="32px" width="32px" class="rounded-circle">
                                      @else
                                      <img src="{{asset('storage/' . Auth::user()->image) }}" alt="" height="32px" width="32px" class="rounded-circle">
                                    @endif
                            </div>
                        
                        </a>
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="profile.html">Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="lists.html">Lists</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    {{-- <a class="dropdown-item" href="index.html">Sign out</a> --}}
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <input type="submit" value="Logout" class="from-control">
                                    
                                    </form>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="profile.html">{{Auth::user()->email}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="horizontal"></div>
    @yield('post')
    
    @yield('scripts')
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"
        integrity="sha256-5slxYrL5Ct3mhMAp/dgnb5JSnTYMtkr4dHby34N10qw=" crossorigin="anonymous">
    </script>
    
</body>

</html>
