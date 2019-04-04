@extends('layouts.app_new')
@section('content')
  <div class="row " style="margin-top:-150px;">
    <!--posts content-->
    <div class="col-xl-12 mb-12 mb-xl-0">
      <div class="card  shadow">
        <div class="card-header border-0 shadow-lg ">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">{{$post->title}}</h3>
            </div>
             <div class="col text-right">
              <small class="text-success">Written by {{$post->user->name}}</small>
            </div>
          </div>
        </div>
        <div class="card-body ">
          <div class="row align-items-center">
            <div class="col-xl-12 mb-12 mb-xl-0">
              <h3 class="mb-0">{!!$post->body!!}</h3>
            </div>
            <div class="col-xl-12 mb-12 mb-xl-0">
              <div class="col text-right">
                  {{-- <a href="/posts/{{$post['id']}}/edit" class="btn btn-sm btn-primary">Edit</a> --}}
                  <span class="text-success">
                    @if(!Auth::guest())
                        @if(Auth::user()['id'] == $post['user_id'])
                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
                            {!!Form::close()!!}
                        @endif
                    @endif
                  </span>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--comments-->
    <div class="col-xl-12 mb-12 mb-xl-0 mt-2">
      <div class="card">
        <div class="card-header border-0 shadow-lg ">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="mb-0 text-succes">Comments</h3>
            </div>
            {{-- <div class="col text-right">
              <a href="{{url("admin/posts")}}" class="btn btn-sm btn-primary">All Posts</a>
            </div> --}}
          </div>
        </div>
        <div class="card-body ">
          <div class="row align-items-center">
            <div class="col col-xl-12 mb-12 mb-xl-0">
              <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="commentsTable">
                  <tbody>
                    @foreach ($comments as $comment)
                      <tr>
                        <td>
                          {{$comment['description']}}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="row align-items-center ">
            <div class="col col-xl-12 mb-12 mb-xl-0 mt-2">
                <textarea name="name" rows="2" cols="20" class="form-control cst" placeholder="write comment"></textarea>
                <input type="submit"  name="sub_btn" value="Submit" class="btn btn-sm btn-primary mt-2 csb" onclick="">
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
@endsection