@extends('layouts.app')





@section('content')

<div class="bg-layer">
    <div class="header-main" style="max-width: 950px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                    <div class="card-header">Top Notes</div>
                    </div>
                    <br>
                    @if(count($uploads) > 0)
                        @foreach($uploads as $upload)

                            <div style="height: auto;
                                        width:auto;
                                        background-color:#0E5D7B;
                                        margin-top: 0px;
                                        background:linear-gradient(  #ffffff,#ffeffa);">
                            <div class="jumbotron jumbotron-fluid" style="background: none !important;">
                              <div class="container">
                                <br>
                                <p class="lead"><h1><a  class="display-4" style="color: #595959; text-decoration:none" target="_blank" href="{{url('/storage/'.$upload->file)}}">{{$upload->description}}</a></a></h1></p>
                                <br>
                                <br>
                                <p class="lead"><strong>Semester</strong> : {{$upload->semester_name}}</p>
                                <br>
                                <br>
                                <p class="lead"><strong>Branch</strong> : {{$upload->branch_name}}</p>
                                <br>
                                <br>
                                <p class="lead"><strong>Subject</strong> : {{$upload->subject_name}}</p>
                                <br>
                                <br>
                                <p class="lead"><strong>Uploaded by</strong> :<a style="color: #595959; text-decoration:none;font-size: 15px;" href="{{ route('profile',['name'=>$upload->user->name,'id'=>$upload->user->id])}}">&nbsp;{{$upload->user->name}}</a>                          </p>
                                <br>
                                <br>
                                <p class="lead"><strong>Year</strong> : {{$upload->year}}</p>
                                <br>
                                <br>
                                <p class="lead"><strong>Votes</strong> : {{$upload->votes}}</p>
                                <br>
                              </div>
                            </div>
                            </div>
                            @endforeach
                            @else
                            <div style="height :  auto;
                                        width : auto;
                                        background-color : #0E5D7B;
                                        margin-top :  0px;
                                        background : linear-gradient(  #ffffff,#ffeffa);">
                            <div class="jumbotron jumbotron-fluid" style="background :  none !important;">
                            <div class="container">

                                <br>
                                <blockquote class="blockquote text-center">
                                <h class="mb-0">No PDF found with your preference</h>
                              </blockquote>
                                <br>
                                </div>
                                </div>
                            </div>
                            @endif

                    <br><br>

                </div>

</div>

@endsection