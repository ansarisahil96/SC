@extends('layouts.app')

@section('profileactive')
active
@endsection

@section('content')



<div class="bg-layer">


              <div class="header-main" style="max-width :  950px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
                    <div class="card-header">Uploads by {{$username}}</div>
                    </div>
                    <br>

                    @if(count($uploads) > 0)
                        @foreach($uploads as $upload)

                        <div style="height :  auto;
                                    width : auto;
                                    background-color : #0E5D7B;
                                    margin-top :  0px;
                                    background : linear-gradient(  #ffffff,#ffeffa);">
                        <div class="jumbotron jumbotron-fluid" style="background :  none !important;">
                        <div class="container">
                            <br>
                            <p class="lead"><h1><a class="display-4" style="color :  #595959; text-decoration : none" target="_blank" href="{{url('/storage/'.$upload->file)}}">{{$upload->description}}</a></a></h1></p>
                            <br>
                            <br>
                            <p class="lead"><strong>Branch</strong> : {{$upload->branch_name}}</p>
                            <br>
                            <br>
                            <p class="lead"><strong>Subject</strong> : {{$upload->subject_name}}</p>
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
                        {{$uploads->links()}}
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
                      <h class="mb-0">You Have not uploaded anything yet!</h>
                    </blockquote>
                      <br>
                      </div>
                      </div>
                  </div>
                  @endif
                    <br><br>



</div>
@endsection
