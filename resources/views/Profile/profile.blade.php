@extends('Layout.master')
@section('title') 
Profile
@endsection
@section('post')

<div class="container">
    <div class="row">
      <div class="col-4 mt-5">
        <div class="d-flex justify-content-start">
          <img
            src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ"
            alt=""
            width="70"
            height="70"
            class="rounded-circle"
          />
          <div class="px-2">
            <h2 class="fw-bold name">Shwe Phue Hmone</h2>
          </div>
          <hr />
        </div>
      </div>
      <div class="col-4 mt-5">
        <a
          href="#"
          class=""
          data-bs-toggle="modal"
          data-bs-target="#editModal"
        >
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            class="dot"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
              fill="#000"
            ></path>
          </svg>
        </a>
        <!-- Button trigger modal -->
        <button
          type="button"
          class="btn btn-sm btn-secondary rounded-pill modal-btn edit-txt"
          data-bs-toggle="modal"
          data-bs-target="#editModal"
        >
          Edit Profile
        </button>
        <button
          type="button"
          id="btn"
          class="btn btn-sm btn-primary rounded-pill modal-btn edit-txt"
          data-bs-toggle="modal"
          data-bs-target="#passwordModal"
        >
          Change Password
        </button>
        <!-- Edit Modal -->
        <div
          class="modal fade"
          id="editModal"
          tabindex="-1"
          aria-labelledby="editModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel">
                  Profile Information
                </h1>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="col-8">
                   
                    <form id="updateForm" action="{{route('profile.edit',$user->id)}}"  method="POST" enctype="multipart/form-data">
                        @csrf

                         {{-- <img
                      src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ"
                      alt="Photo"
                      width="70"
                      height="70"
                      class="rounded-circle"
                    /> --}}
                    <input type="file" name="image" id="imageInput"   style="display:none">
                    <button type="button" id="uploadButton" class="btn text-success rounded-pill">
                        
                      <i class="fa-solid fa-pen-to-square"></i> Update
                    </button>
                   
                    
                    <button class="btn text-danger rounded-pill">
                      <i class="fa-solid fa-trash"></i>Remove
                    </button>
                      <div class="mb-3 mt-3">
                        <label
                          for="exampleFormControlInput1"
                          class="form-label"
                          >Name*</label
                        >
                        <input
                          type="text"
                          class="form-control inp"
                          id="exampleFormControlInput1"
                          placeholder="Your Name" name="name" value="{{$user->name}}"
                        />
                      </div>
                      <div class="mb-3">
                        <label
                          for="exampleFormControlInput1"
                          class="form-label" 
                          >Bio</label
                        >
                        <input
                          type="text"
                          class="form-control inp"
                          id="exampleFormControlInput1"
                          placeholder="Bio" name="bio" value="{{$user->bio}}"
                        />
                      </div>
                    </form>
                  </div>

                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-outline-success rounded-pill"
                      data-bs-dismiss="modal"
                    >
                      Cancel
                    </button>
                    <button
                      type="button" onclick="updateItem()"
                      class="btn btn-outline-success rounded-pill bg-success text-white"
                    >
                      Update
                    </button>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>

        <!-- Password Modal -->
        <div
          class="modal fade"
          id="passwordModal"
          tabindex="-1"
          aria-labelledby="passwordModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="passwordModalLabel">
                  Change Password
                </h1>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="col-8">
                    <form action="">
                      <div class="mb-3 mt-3">
                        <label
                          for="exampleFormControlInput1"
                          class="form-label"
                          >Old Password</label
                        >
                        <input
                          type="text"
                          class="form-control inp"
                          id="exampleFormControlInput1"
                          placeholder="Old Password"
                        />
                      </div>
                      <div class="mb-3">
                        <label
                          for="exampleFormControlInput1"
                          class="form-label"
                          >New Password</label
                        >
                        <input
                          type="text"
                          class="form-control inp"
                          id="exampleFormControlInput1"
                          placeholder="New Password"
                        />
                      </div>
                      <div class="mb-3">
                        <label
                          for="exampleFormControlInput1"
                          class="form-label"
                          >Confirm Password</label
                        >
                        <input
                          type="text"
                          class="form-control inp"
                          id="exampleFormControlInput1"
                          placeholder="Confirm Password"
                        />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-outline-success rounded-pill"
                  data-bs-dismiss="modal"
                >
                  Cancel
                </button>
                <button
                  type="button"
                  class="btn btn-outline-success rounded-pill bg-success text-white"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h2 class="mt-5 info-ttl">Information</h2>
    <hr />
    <div class="row">
      <div class="col-12 mt-3">
        <h6 class="pst-ttl2">Email</h6>
        <p class="text-muted">shwephue@gmail.com</p>
        <h6 class="pst-ttl2">Post Count</h6>
        <button
          class="btn btn-sm pst-count rounded-pill bg-secondary text-white"
        >
          5
        </button>
        <h6 class="mt-3 pst-ttl2">Bio</h6>
        <p class="my-3 text-muted text-justify p-txt">
          experience, accomplishments, interests, dreams, and more.<br />
          You can even add images and use rich text to personalize your bio.
        </p>
        <h6 class="mypst-ttl">My Posts</h6>
        <hr />
        <div class="row">
          <div class="col-4 mt-3">
            <div class="d-flex justify-content-start">
              <img
                src="https://miro.medium.com/fit/c/40/40/0*gh8956b2B53guDoQ"
                alt="Cinque Terre"
                width="20px"
                height="20px"
              />
              <div class="px-2">
                <h4 class="author text-muted">
                  Shwe Phue Hmone
                  <span class="blog-date">. Dec 20 </span>
                </h4>
                <h6 class="mypst-ttl mb-2 mt-2">Understanding Long Covid</h6>
                <p class="content mb-2 justify-text">
                  I always look forward to sharing my lists of favorite books,
                  movies, and music with all of you.
                </p>
                <div class="row">
                  <div class="col-md-6">
                    <button class="btn cat-txt btn-sm text-dark rounded-pill">
                      Programming
                    </button>
                  </div>
                  <div class="col-md-6">
                    <svg
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      fill="none"
                    >
                      <path
                        d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18zM8.25 12h7.5"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path>
                    </svg>
                    <a href="details.html">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                      >
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M4.39 12c0 .55.2 1.02.59 1.41.39.4.86.59 1.4.59.56 0 1.03-.2 1.42-.59.4-.39.59-.86.59-1.41 0-.55-.2-1.02-.6-1.41A1.93 1.93 0 0 0 6.4 10c-.55 0-1.02.2-1.41.59-.4.39-.6.86-.6 1.41zM10 12c0 .55.2 1.02.58 1.41.4.4.87.59 1.42.59.54 0 1.02-.2 1.4-.59.4-.39.6-.86.6-1.41 0-.55-.2-1.02-.6-1.41a1.93 1.93 0 0 0-1.4-.59c-.55 0-1.04.2-1.42.59-.4.39-.58.86-.58 1.41zm5.6 0c0 .55.2 1.02.57 1.41.4.4.88.59 1.43.59.57 0 1.04-.2 1.43-.59.39-.39.57-.86.57-1.41 0-.55-.2-1.02-.57-1.41A1.93 1.93 0 0 0 17.6 10c-.55 0-1.04.2-1.43.59-.38.39-.57.86-.57 1.41z"
                          fill="#000"
                        ></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4 mt-3">
            <img
              src="https://miro.medium.com/fit/c/250/168/0*Nz897vaKH2yJhSQJ"
              class="img"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script>
    function updateItem(){
        $.ajax({
            type: 'POST',
            url: $('#updateForm').attr('action'),
            data: $('#updateForm').serialize(),
            success: function(data){
                alert(data.message)
            },
            error: function(xhr, status, error){
                alert('An error occured while updating the item.');
            }
        });
    }


    //Upload Profile Image With Button
  document.getElementById('uploadButton').addEventListener('click', function () {
      document.getElementById('imageInput').click();
  });


</script>


@endsection