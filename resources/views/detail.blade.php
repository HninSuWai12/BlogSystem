@extends('Layout.master')
@section('styles')
<style>
  /* Add CSS styles for the arrow icon container and arrow icon */
#arrow-icon-container {
  /* Add any necessary styles for the container */
}

.arrow-icon {
  /* Add styles for the arrow icon, such as font size, color, etc. */
  /* For example, if you're using a font icon library like Font Awesome: */
  font-family: "Font Awesome";
  font-size: 20px;
  /* Add any other necessary styles for the icon */
}

</style>
@endsection
@section('post')
<div class="w-100 d-flex justify-content-center py-4">
    <div class="container-wrapper m-sm-2">
      <div
        class="w-80 w-sm-100 mx-auto d-flex flex-wrap col-12 border-1 border-bottom"
      >
        <div
          class="col-lg-8 order-lg-1 col-sm-12 order-2 d-flex flex-column border-1 border-end pe-4"
        >
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <div class="pf-img">
                @if (Auth::user()->image == null)
                <img src="{{asset('image/download (4).jfif')}}" alt=""  width="50" height="50" class="rounded-circle">
                  @else
                  <img src="{{asset('storage/' . $post->user->image) }}" alt="" width="50" height="50" class="rounded-circle">
                @endif
              </div>
              <div class="mx-2">
                <h5 class="writer">{{$post->user->name}}</h5>
                <span class="text-muted text-sm">Dec 20 · 9 min read ·</span>
              </div>
            </div>
            <button
              class="px-2 py-1 rounded-pill bg-danger mx-3 text-light border-0 text-sm"
            >
              Delete
            </button>
          </div>
          <div class="w-100">
            <div class="w-100 overflow-hidden my-3">
              <img
                src="{{asset('storage/'.$post->image)}}"
                alt=""
                width="100%"
              />
            </div>
            <h3 class="my-3">{{$post->title}}</h3>
            <p class="my-3 text-justify">
             {!!$post->content!!}
            </p>
          </div>
        </div>
        <div
          class="col-lg-4 order-lg-2 col-sm-12 order-1 border-left border-1 ps-3"
        >
          <div class="w-100 mx-auto">
            <div class="d-flex flex-column">
              <div class="row my-3">
                <div class="col-md-12 d-flex">
                  <div
                    class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                    height="50px"
                    width="50px"
                  >
                    <img
                      src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                      alt="Profile"
                      height="100%"
                    />
                  </div>
                  <h6 class="px-2">
                    Zulie Rane
                    <br />
                    <p class="text-secondary">100 posts</p>
                  </h6>
                </div>
                <div class="col-md-12">
                  <span class="txt"
                    >Advocate/poet. Over 30 yrs. of leadership of multiple DEI
                    causes. Sparking insights of the race & gender nexus with
                    history, philosophy, advancing human life.</span
                  >
                </div>
              </div>
              <div class="row my-3">
                <h5>More from Medium</h5>
                <div class="col-md-12 d-flex">
                  <div
                    class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                    height="30px"
                    width="30px"
                  >
                    <img
                      src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                      alt="Profile"
                      height="100%"
                    />
                  </div>
                  <span class="px-2 text-muted">Zulie Rane</span>
                </div>
                <div class="col-8">
                  <span class="fw-semibold"
                    >Republicans have a weird Johnny Appleseed fetish American
                  </span>
                </div>
                <div class="col-4">
                  <img
                    src="https://miro.medium.com/fit/c/160/112/1*JD9HvtX6p1RgzJ1RIYkuEA.jpeg"
                    height="40px"
                    width="40px"
                  />
                </div>
              </div>
              <div class="row my-3">
                <div class="col-md-12 d-flex">
                  <div
                    class="overflow-hidden rounded-circle d-flex align-items-center justify-content-center"
                    height="30px"
                    width="30px"
                  >
                    <img
                      src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                      alt="Profile"
                      height="100%"
                    />
                  </div>
                  <span class="px-2 text-muted">Zulie Rane</span>
                </div>
                <div class="col-8">
                  <span class="fw-semibold"
                    >Republicans have a weird Johnny Appleseed fetish American
                  </span>
                </div>
                <div class="col-4">
                  <img
                    src="https://miro.medium.com/fit/c/160/112/0*po4v38DXRdXsACve"
                    height="40px"
                    width="40px"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-80 mx-auto py-3">
        <h5 class="cmt">
          Comment
          <span class="cmt-count fw-bold bg-secondary text-white">2</span>
        </h5>
        <div class="w-90 mx-auto p-4 text-sm">
          <form action="{{route('post.comment')}}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="w-100 d-flex flex-column">
              <label for="comment" class="fs-6"
                >Here you can left message !
              </label>
              <textarea
                class="border-1 p-2 rounded" name="content"
                cols="30"
                rows="3"
                placeholder="What are you thoughts?"
                id="floatingTextarea"
              ></textarea>
              <div class="d-flex align-items-center justify-content-end my-2">
                <button type="submit" class="p-1 bg-secondary text-light border-0 rounded">
                  Comment
                </button>
              </div>
            </div>
          </form>
          <div class="my-2">
            {{-- <div class="w-100 my-4">
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <div class="pf-img">
                    <img
                      src="https://miro.medium.com/fit/c/96/96/1*-0CLjsUALTZi9OOlMau8Vw.jpeg"
                      alt=""
                    />
                  </div>
                  <div class="mx-2">
                    <h4>Mindy Stern</h4>
                    <span class="text-sm text-muted">3 minutes ago</span>
                  </div>
                </div>
              </div>
              <p class="fw-semibold">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div> --}}
           
           <div class="w-100 my-4">
            @foreach ($post->comments as $comment )
            <div class="d-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <div class="pf-img">
                  <img
                    src="{{asset('storage/'.$comment->user->image)}}"
                    alt=""
                  />
                </div>
                <div class="mx-2">
                  <h4>{{$comment->user->name}}</h4>
                  <span class="text-sm text-muted">3 minutes ago</span>
                </div>
              </div>
            </div>
           <div class="row">
            <p class="fw-semibold col-6">
              {{ $comment->content }}
            </p>
            <div class="comment-box col-5">
              <form action="{{route('reply.store', ['comment' => $comment->id])}}" method="POST">
                @csrf
                <button class="showTextboxBtn">Reply</button>
 <div class="textBoxContainer" style="display: none;">
     <textarea type="text" class="textBox" style="width: 100%" name="reply"></textarea>
    <button class="btn btn-sm btn-info" type="submit">Share</button>
 </div>
           </div>
              
              </form>
               
              </div>
            <div class="">
              {{-- @if ($comment->user->id == Auth::user()->id) --}}
              
              <form method="POST" action="{{ route('comment.destroy', $comment->id) }}">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-sm btn-danger m-3">Delete</button>
           </form>
                
              {{-- @endif --}}
             </div>
           

            
@foreach ($comment->newReplies as $newReply)
<div class="d-flex align-items-center justify-content-between">
  <div class="d-flex align-items-center">
    <div class="pf-img">
     @if ($newReply->user->image !=null)
     <img
     src="{{asset('storage/'.$newReply->user->image)}}"
     alt=""
   />
   @else
   <img
   src="{{asset('image/download.png')}}"
   alt="" width="50" height="50"
 />
       
     @endif
    </div>
    <div class="mx-2">
      <strong>{{ $newReply->user->name }}</strong>
      
    </div>
  </div>
</div>

    <div class="row">
      <div class="col-6">
        <p class="text-info text-bold">{{ $newReply->reply }}</p>
      </div>
   <div class="col-5">
    <form action="{{route('reply.store', ['comment' => $comment->id])}}" method="POST">
      @csrf
      <button class="showTextboxBtn">Reply</button>
<div class="textBoxContainer" style="display: none;">
<textarea type="text" class="textBox" name="reply"></textarea>
<button class="btn btn-sm btn-info" type="submit">Share</button>
</div>
   </div>
    
    </form>
    </div>
@endforeach

          
            <div>
             </div>
          
            
          
           <strong> <hr></strong>
            @endforeach
          </div>
         

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function() {
      // Find all the elements using class names
      const showTextboxBtns = document.querySelectorAll('.showTextboxBtn');
      const textBoxContainers = document.querySelectorAll('.textBoxContainer');

      // Add a click event listener to each button
      showTextboxBtns.forEach(function(button, index) {
          button.addEventListener('click', function(event) {
              event.preventDefault(); // Prevent form submission behavior

              // Toggle the display of the corresponding text box container
              textBoxContainers[index].style.display = textBoxContainers[index].style.display === 'none' ? 'block' : 'none';
          });
      });
  });
</script>


@endsection