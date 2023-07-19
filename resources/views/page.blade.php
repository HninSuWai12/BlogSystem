<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post Lists</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
  </head>
  <body>
    <header
      class="w-100 d-flex justify-content-center align-items-center border-bottom border-secondary"
    >
      <div class="container-wrapper">
        <div class="w-100 d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center py-3">
            <a href="#">
              <svg viewBox="0 0 1043.63 592.71" height="25px">
                <g data-name="Layer 2">
                  <g data-name="Layer 1">
                    <path
                      d="M588.67 296.36c0 163.67-131.78 296.35-294.33 296.35S0 460 0 296.36 131.78 0 294.34 0s294.33 132.69 294.33 296.36M911.56 296.36c0 154.06-65.89 279-147.17 279s-147.17-124.94-147.17-279 65.88-279 147.16-279 147.17 124.9 147.17 279M1043.63 296.36c0 138-23.17 249.94-51.76 249.94s-51.75-111.91-51.75-249.94 23.17-249.94 51.75-249.94 51.76 111.9 51.76 249.94"
                    ></path>
                  </g>
                </g>
              </svg>
            </a>
            <div
              class="mx-4 bg-slate-opt rounded-pill overflow-hidden d-flex align-items-center pr-3"
            >
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.1 11.06a6.95 6.95 0 1 1 13.9 0 6.95 6.95 0 0 1-13.9 0zm6.94-8.05a8.05 8.05 0 1 0 5.13 14.26l3.75 3.75a.56.56 0 1 0 .8-.79l-3.74-3.73A8.05 8.05 0 0 0 11.04 3v.01z"
                  fill="currentColor"
                ></path>
              </svg>
              <input
                type="text"
                class="w-100 border-0 py-2 px-3 bg-transparent search"
                tabindex="0"
                placeholder="Search Medium"
              />
            </div>
          </div>
          <div class="d-flex align-items-center">
            <button
              class="d-flex mx-2 align-items-center justify-content-center border-0 bg-transparent"
            >
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                aria-label="Write"
              >
                <path
                  d="M14 4a.5.5 0 0 0 0-1v1zm7 6a.5.5 0 0 0-1 0h1zm-7-7H4v1h10V3zM3 4v16h1V4H3zm1 17h16v-1H4v1zm17-1V10h-1v10h1zm-1 1a1 1 0 0 0 1-1h-1v1zM3 20a1 1 0 0 0 1 1v-1H3zM4 3a1 1 0 0 0-1 1h1V3z"
                  fill="currentColor"
                ></path>
                <path
                  d="M17.5 4.5l-8.46 8.46a.25.25 0 0 0-.06.1l-.82 2.47c-.07.2.12.38.31.31l2.47-.82a.25.25 0 0 0 .1-.06L19.5 6.5m-2-2l2.32-2.32c.1-.1.26-.1.36 0l1.64 1.64c.1.1.1.26 0 .36L19.5 6.5m-2-2l2 2"
                  stroke="currentColor"
                ></path>
              </svg>
              <span class="px-1"> <a href="create.html"> Write</a></span>
            </button>
            <div class="d-flex align-items-center justify-content-between">
              <div
                class="mx-2 overflow-hidden"
                style="width: 30px; height: 30px; border-radius: 50%"
              >
                <img
                  src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                  alt="Profile"
                  height="32px"
                  width="32px"
                />
              </div>
              <div class="dropdown">
                <a
                  class="btn dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="profile.html">Profile</a>
                  </li>
                  <li><a class="dropdown-item" href="lists.html">Lists</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input  class="dropdown-item" type="submit" value="Sign out">

                    </form>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">{{ Auth()->user()->email }}</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="container mt-3">
      <div class="float-lg-end float-sm-none col-md-4 col-sm">
        <div class="col-md-12 mt-3" style="z-index: 1">
          <h5 class="aside-ttl">2022 in Latest Posts</h5>
          <div
            class="col-lg-4 order-lg-2 col-sm-12 order-1 border-left border-1 ps-3 list-asd"
          >
            <div class="w-100 mx-auto">
              <div class="d-flex flex-column">
                <div class="row my-3">
                  <div class="col-md-12 d-flex">
                    <div
                      class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                      style="height: 30px; width: 30px"
                    >
                      <img
                        src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                        alt="Profile"
                        height="100%"
                      />
                    </div>
                    <h6 class="px-2">Zulie Rane</h6>
                  </div>
                  <div class="col-md-8">
                    <p class="fw-semibold">2022 in a Word:Permastressed</p>
                  </div>
                </div>
                <div class="row my-3">
                  <div class="col-md-12 d-flex">
                    <div
                      class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                      style="height: 30px; width: 30px"
                    >
                      <img
                        src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                        alt="Profile"
                        height="100%"
                      />
                    </div>
                    <h6 class="px-2">Zulie Rane</h6>
                  </div>
                  <div class="col-8">
                    <span class="fw-semibold"
                      >2022 in a Word:Permastressed
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Programming</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Data Science</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Technology</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Self Improvement</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Writing</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Relationships</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Machine Learning</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Productivity</a
          >
          <a
            href=""
            class="aside-txt border me-2 mb-2 rounded d-inline-block px-2 py-2 text-decoration-none text-secondary"
            >Politics</a
          >
        </div>
      </div>
      <div class="container">
        <div class="row mt-3">
          <div class="col-8">
            <div class="d-flex justify-content-start">
              <img
                src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ"
                class=""
                alt="Cinque Terre"
                width="20px"
                height="20px"
              />
              <div class="px-2">
                <p class="mb-2 pst-wrt">
                  shwe phue hmone
                  <span class="text-muted pst-date">. Nov 30</span>
                </p>
                <h6 class="list-ttl">
                  The Difference Between The Clever Developer & The Wise
                  Developer
                </h6>
                <p class="list-txt">
                  Avoiding problems is faster than solving them — “There is no
                  greater fool than he who thinks himself wise; no one wiser
                  than he who
                </p>
                <div class="row">
                  <div class="col-md-8">
                    <button
                      class="btn cat-txt cat btn-sm text-dark rounded-pill"
                    >
                      Programming
                    </button>
                    <span class="blog-date">9 min read ·</span>
                    <span class="blog-date">Selected for you·</span>
                  </div>
                  <div class="col-md-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM8.25 12h7.5"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
                        fill="#000"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <img
              src="https://miro.medium.com/fit/c/140/140/0*abqp1xuwpbgXnqt5"
              height="112"
              width="112"
            />
          </div>
        </div>
        <hr />
        <div class="row mt-3">
          <div class="col-8">
            <div class="d-flex justify-content-start">
              <img
                src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ"
                class=""
                alt="Cinque Terre"
                width="20px"
                height="20px"
              />
              <div class="px-2">
                <p class="mb-2 pst-wrt">
                  shwe phue hmone
                  <span class="text-muted pst-date">. Nov 30</span>
                </p>
                <h6 class="list-ttl">
                  The Difference Between The Clever Developer & The Wise
                  Developer
                </h6>
                <p class="list-txt">
                  Avoiding problems is faster than solving them — “There is no
                  greater fool than he who thinks himself wise; no one wiser
                  than he who
                </p>
                <div class="row">
                  <div class="col-md-8">
                    <button
                      class="btn cat-txt cat btn-sm text-dark rounded-pill"
                    >
                      Programming
                    </button>
                    <span class="blog-date">9 min read ·</span>
                    <span class="blog-date">Selected for you·</span>
                  </div>
                  <div class="col-md-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM8.25 12h7.5"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
                        fill="#000"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <img
              src="https://miro.medium.com/fit/c/140/140/0*abqp1xuwpbgXnqt5"
              height="112"
              width="112"
            />
          </div>
        </div>
        <hr />
        <div class="row mt-3">
          <div class="col-8">
            <div class="d-flex justify-content-start">
              <img
                src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ"
                class=""
                alt="Cinque Terre"
                width="20px"
                height="20px"
              />
              <div class="px-2">
                <p class="mb-2 pst-wrt">
                  shwe phue hmone
                  <span class="text-muted pst-date">. Nov 30</span>
                </p>
                <h6 class="list-ttl">
                  The Difference Between The Clever Developer & The Wise
                  Developer
                </h6>
                <p class="list-txt">
                  Avoiding problems is faster than solving them — “There is no
                  greater fool than he who thinks himself wise; no one wiser
                  than he who
                </p>
                <div class="row">
                  <div class="col-md-8">
                    <button
                      class="btn cat-txt cat btn-sm text-dark rounded-pill"
                    >
                      Programming
                    </button>
                    <span class="blog-date">9 min read ·</span>
                    <span class="blog-date">Selected for you·</span>
                  </div>
                  <div class="col-md-4">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM8.25 12h7.5"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
                        fill="#000"
                      ></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <img
              src="https://miro.medium.com/fit/c/140/140/0*abqp1xuwpbgXnqt5"
              height="112"
              width="112"
            />
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
