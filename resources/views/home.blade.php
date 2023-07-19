@extends('welcome')
@section('contact')

<div class="container-fluid bg-warning border-bottom border-dark">
    <div class="container banner">
        <h2 class="banner-title">Stay curious.</h2>
        <h3 class="blog-content lh-sm w-50">
            Discover stories, thinking, and expertise<br />
            from writers on any topic.
        </h3>
        <button class="banner-btn btn rounded-pill bg-dark text-white btn-text mb-2">
            Start reading
        </button>
    </div>
</div>

<div class="container mt-3">
    <div class="float-start">
        <div class="float-lg-end float-sm-none col-md-4 col-sm">
            <div class="col-md-12 mt-3" style="z-index: 1">
                <h6 class="aside-ttl">DISCOVER MORE OF WHAT MATTER TO YOU</h6>
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
                <hr />
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Help</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Status</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Writers</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Blog</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Careers</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Privacy</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Terms</a>
                <a href=""
                    class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">About</a>
                <a href="" class="me-2 mb-2 d-inline-block px-2 py-2 text-decoration-none aside-text">Text to
                    speech</a>
            </div>
        </div>
        <div class="float-lg-start float-sm-none col-md-6 col-sm mt-3">
            <a href="{{ route('blogPage') }}">
                <div class="row">
                    <div class="col-8 mt-3">
                        <div class="d-flex justify-content-start">
                            <img src="https://miro.medium.com/fit/c/25/25/1*oTq5RWcSwzoDiuAO_OBhaw.jpeg"
                                class="rounded-circle" alt="Cinque Terre" width="20px" height="20px" />
                            <div class="px-2">
                                <h4 class="author">Dr. Tom Frieden</h4>
                                <h6 class="content-ttl mb-2 mt-2">
                                    Understanding Long Covid
                                </h6>
                                <p class="content mb-2">Ukraine War, 19 December 2022</p>
                                <span class="blog-date">Dec 20 · 9 min read ·</span>
                                <span class="cat"><a href="lists.html"> Long Covid</a></span>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M12.4 12.77l-1.81 4.99a.63.63 0 0 1-1.18 0l-1.8-4.99a.63.63 0 0 0-.38-.37l-4.99-1.81a.62.62 0 0 1 0-1.18l4.99-1.8a.63.63 0 0 0 .37-.38l1.81-4.99a.63.63 0 0 1 1.18 0l1.8 4.99a.63.63 0 0 0 .38.37l4.99 1.81a.63.63 0 0 1 0 1.18l-4.99 1.8a.63.63 0 0 0-.37.38z"
                                        fill="#FFC017"></path>
                                </svg>
                                <a class="content-btn" rel="noopener follow" href="details.html"><svg width="25"
                                        height="25" viewBox="0 0 25 25" fill="none" class="mf">
                                        <path
                                            d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z"
                                            fill="#292929"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 mt-3">
                        <img src="https://miro.medium.com/fit/c/250/168/0*Nz897vaKH2yJhSQJ" class="img" />
                    </div>
                </div>
            </a>
            <div class="row">
                <div class="col-8 mt-3">
                    <div class="d-flex justify-content-start">
                        <img src="https://miro.medium.com/fit/c/25/25/1*oTq5RWcSwzoDiuAO_OBhaw.jpeg"
                            class="rounded-circle" alt="Cinque Terre" width="20px" height="20px" />
                        <div class="px-2">
                            <h4 class="author">Dr. Tom Frieden</h4>
                            <h6 class="content-ttl mb-2 mt-2">
                                Understanding Long Covid
                            </h6>
                            <p class="content mb-2">Ukraine War, 19 December 2022</p>
                            <span class="blog-date">Dec 20 · 9 min read ·</span>
                            <span class="cat">Long Covid</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M12.4 12.77l-1.81 4.99a.63.63 0 0 1-1.18 0l-1.8-4.99a.63.63 0 0 0-.38-.37l-4.99-1.81a.62.62 0 0 1 0-1.18l4.99-1.8a.63.63 0 0 0 .37-.38l1.81-4.99a.63.63 0 0 1 1.18 0l1.8 4.99a.63.63 0 0 0 .38.37l4.99 1.81a.63.63 0 0 1 0 1.18l-4.99 1.8a.63.63 0 0 0-.37.38z"
                                    fill="#FFC017"></path>
                            </svg>
                            <a class="content-btn" rel="noopener follow" href="details.html"><svg width="25"
                                    height="25" viewBox="0 0 25 25" fill="none" class="mf">
                                    <path
                                        d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z"
                                        fill="#292929"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <img src="https://miro.medium.com/fit/c/250/168/0*Nz897vaKH2yJhSQJ" class="img" />
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-3">
                    <div class="d-flex justify-content-start">
                        <img src="https://miro.medium.com/fit/c/25/25/1*oTq5RWcSwzoDiuAO_OBhaw.jpeg"
                            class="rounded-circle" alt="Cinque Terre" width="20px" height="20px" />
                        <div class="px-2">
                            <h4 class="author">Dr. Tom Frieden</h4>
                            <h6 class="content-ttl mb-2 mt-2">
                                Understanding Long Covid
                            </h6>
                            <p class="content mb-2">Ukraine War, 19 December 2022</p>
                            <span class="blog-date">Dec 20 · 9 min read ·</span>
                            <span class="cat">Long Covid</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M12.4 12.77l-1.81 4.99a.63.63 0 0 1-1.18 0l-1.8-4.99a.63.63 0 0 0-.38-.37l-4.99-1.81a.62.62 0 0 1 0-1.18l4.99-1.8a.63.63 0 0 0 .37-.38l1.81-4.99a.63.63 0 0 1 1.18 0l1.8 4.99a.63.63 0 0 0 .38.37l4.99 1.81a.63.63 0 0 1 0 1.18l-4.99 1.8a.63.63 0 0 0-.37.38z"
                                    fill="#FFC017"></path>
                            </svg>
                            <a class="content-btn" rel="noopener follow" href="details.html"><svg width="25"
                                    height="25" viewBox="0 0 25 25" fill="none" class="mf">
                                    <path
                                        d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z"
                                        fill="#292929"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <img src="https://miro.medium.com/fit/c/250/168/0*Nz897vaKH2yJhSQJ" class="img" />
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-3">
                    <div class="d-flex justify-content-start">
                        <img src="https://miro.medium.com/fit/c/25/25/1*oTq5RWcSwzoDiuAO_OBhaw.jpeg"
                            class="rounded-circle" alt="Cinque Terre" width="20px" height="20px" />
                        <div class="px-2">
                            <h4 class="author">Dr. Tom Frieden</h4>
                            <h6 class="content-ttl mb-2 mt-2">
                                Understanding Long Covid
                            </h6>
                            <p class="content mb-2">Ukraine War, 19 December 2022</p>
                            <span class="blog-date">Dec 20 · 9 min read ·</span>
                            <span class="cat">Long Covid</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M12.4 12.77l-1.81 4.99a.63.63 0 0 1-1.18 0l-1.8-4.99a.63.63 0 0 0-.38-.37l-4.99-1.81a.62.62 0 0 1 0-1.18l4.99-1.8a.63.63 0 0 0 .37-.38l1.81-4.99a.63.63 0 0 1 1.18 0l1.8 4.99a.63.63 0 0 0 .38.37l4.99 1.81a.63.63 0 0 1 0 1.18l-4.99 1.8a.63.63 0 0 0-.37.38z"
                                    fill="#FFC017"></path>
                            </svg>
                            <a class="content-btn" rel="noopener follow" href="details.html"><svg width="25"
                                    height="25" viewBox="0 0 25 25" fill="none" class="mf">
                                    <path
                                        d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z"
                                        fill="#292929"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <img src="https://miro.medium.com/fit/c/250/168/0*Nz897vaKH2yJhSQJ" class="img" />
                </div>
            </div>
            <div class="row">
                <div class="col-8 mt-3">
                    <div class="d-flex justify-content-start">
                        <img src="https://miro.medium.com/fit/c/25/25/1*oTq5RWcSwzoDiuAO_OBhaw.jpeg"
                            class="rounded-circle" alt="Cinque Terre" width="20px" height="20px" />
                        <div class="px-2">
                            <h4 class="author">Dr. Tom Frieden</h4>
                            <h6 class="content-ttl mb-2 mt-2">
                                Understanding Long Covid
                            </h6>
                            <p class="content mb-2">Ukraine War, 19 December 2022</p>
                            <span class="blog-date">Dec 20 · 9 min read ·</span>
                            <span class="cat">Long Covid</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path
                                    d="M12.4 12.77l-1.81 4.99a.63.63 0 0 1-1.18 0l-1.8-4.99a.63.63 0 0 0-.38-.37l-4.99-1.81a.62.62 0 0 1 0-1.18l4.99-1.8a.63.63 0 0 0 .37-.38l1.81-4.99a.63.63 0 0 1 1.18 0l1.8 4.99a.63.63 0 0 0 .38.37l4.99 1.81a.63.63 0 0 1 0 1.18l-4.99 1.8a.63.63 0 0 0-.37.38z"
                                    fill="#FFC017"></path>
                            </svg>
                            <a class="content-btn" rel="noopener follow" href="details.html"><svg width="25"
                                    height="25" viewBox="0 0 25 25" fill="none" class="mf">
                                    <path
                                        d="M18 2.5a.5.5 0 0 1 1 0V5h2.5a.5.5 0 0 1 0 1H19v2.5a.5.5 0 1 1-1 0V6h-2.5a.5.5 0 0 1 0-1H18V2.5zM7 7a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1H8a2 2 0 0 0-2 2v14a.5.5 0 0 0 .8.4l5.7-4.4 5.7 4.4a.5.5 0 0 0 .8-.4v-8.5a.5.5 0 0 0-1 0v7.48l-5.2-4a.5.5 0 0 0-.6 0l-5.2 4V7z"
                                        fill="#292929"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 mt-3">
                    <img src="https://miro.medium.com/fit/c/250/168/0*Nz897vaKH2yJhSQJ" class="img" />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
