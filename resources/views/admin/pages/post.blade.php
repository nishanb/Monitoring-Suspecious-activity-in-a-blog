@extends('admin.app_ns')
@section('content')
  <div class="row " style="margin-top:-150px;">
    <div class="col-xl-12 mb-12 mb-xl-0">
      <div class="card shadow">
        {{-- header --}}
        <div class="card-header border-0 shadow-lg p-3 mb-0 bg-white rounded">
          <div class="row align-items-center">
            <div class="col">
              <h2 class="mb-0">{{$post['title']}}</h3>
            </div>
            <div class="col text-right">
              <a href="{{url("admin/users")}}" class="btn btn-sm btn-primary">All Posts</a>
            </div>
          </div>
        </div>

        <div class="card-body" style="box-shadow:2px;">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Insights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Comments</a>
                    </li>
                </ul>
            </div>
                    <div class="tab-content" id="myTabContent">
                      {{-- post --}}
                      <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab" >
                          {{-- <p class="description"></p> --}}
                          <div class="card shadow">
                              <div class="card-header border-0 shadow-lg">
                                <div class="row align-items-center">
                                  <div class="col">
                                    <h3 class="mb-0">Posts</h3>
                                  </div>
                                </div>
                              </div>
                              <div class="card-body">
                                {!!$post->body!!}
                              </div>
                          </div>
                      </div>
                      {{-- insights --}}
                      <div class="tab-pane fade active show" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <div class="card shadow">
                            <div class="card-header border-0 shadow-lg">
                              <div class="row align-items-center">
                                <div class="col">
                                  <h3 class="mb-0">Posts</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                                {{--  --}}
                                <div class="card-body">
                                  {{-- post stats --}}
                                  <div class="row">
                                    {{--posts  --}}
                                    <div class="col-xl-3 col-lg-6">
                                      <div class="card card-stats mb-4 mb-xl-0 shadow">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Author</h5>
                                              <span class="h4 font-weight-bold mb-0">{{$user->name}}</span>
                                            </div>
                                            <div class="col-auto">
                                              <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                <i class="fas fa-chart-bar"></i>
                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                    {{-- comments --}}
                                    <div class="col-xl-3 col-lg-6">
                                      <div class="card card-stats mb-4 mb-xl-0 shadow">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Comment</h5>
                                              <span class="h4 font-weight-bold mb-0">{{count($post->comments)}}</span>
                                            </div>
                                            <div class="col-auto">
                                              <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                <i class="fas fa-chart-pie"></i>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    {{-- violations --}}
                                    <div class="col-xl-3 col-lg-6">
                                      <div class="card card-stats mb-4 mb-xl-0 shadow">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Type</h5>

                                                @if($insight->sentiment_type==0)
                                                      <span class="h4 font-weight-bold mb-0 text-danger">Negative</span>
                                                @elseif($insight->sentiment_type==1)
                                                      <span class="h4 font-weight-bold mb-0 text-success">Positive</span>
                                                @else
                                                      <span class="h4 font-weight-bold mb-0 text-success">Neutral</span>
                                                @endif
                                            </div>
                                            <div class="col-auto">
                                              <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                                <i class="fas fa-users"></i>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    {{-- status --}}
                                    <div class="col-xl-3 col-lg-6">
                                      <div class="card card-stats mb-4 mb-xl-0 shadow">
                                        <div class="card-body">
                                          <div class="row">
                                            <div class="col pb-1">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Status</h5>
                                                @if ($post->status==1)
                                                  <span class="text-success h4">Active</span>
                                                @else
                                                  <span class="text-danger h4">Blocked</span>
                                                @endif
                                            </div>
                                            <div class="col-auto">
                                              <label class="custom-toggle">
                                                <input type="checkbox" id="userStatus" onchange="toggleContentState('post',{{$post->id}},{{$post->status}})" @if ($post->status==1) checked @endif>
                                                <span class="custom-toggle-slider rounded-circle"></span>
                                              </label>
                                            </div>

                                          </div>

                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                </div>

                                {{--  --}}
                            </div>
                        </div>
                      </div>
                      {{-- comments --}}
                      <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                        <div class="card shadow">
                            <div class="card-header border-0 shadow-lg">
                              <div class="row align-items-center">
                                <div class="col">
                                  <h3 class="mb-0">Posts</h3>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              @if(count($comments)==0)
                                <h2 class="description text-center">Nothing in here</p>
                              @else
                              <table class="table align-items-center table-flush" id="">
                                <thead class="thead-light">
                                  <tr>
                                    <th scope="col">Comment id</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scop="col">Insights</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $i=0?>
                                  @foreach ($comments as $comment)
                                    <tr>
                                      <td>{{++$i}}</td>
                                      <td>
                                        {{$comment['description']}}
                                      </td>
                                      @if ($comment->status)
                                        <td>
                                          <span class="text-success">Active</span>
                                        </td>
                                      @else
                                        <td>
                                          <span class="text-danger">Blocked</span>
                                        </td>
                                      @endif
                                      <td>
                                        <a href="#" class="btn btn-sm btn-primary">view</a>
                                      </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                              @endif
                            </div>
                        </div>

                      </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
