@extends('layouts.app')

@section('profileactive')
active
@endsection

@section('content')



<div class="bg-layer">
   

              <div class="header-main" style="max-width: 950px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




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
                            <p class="lead"><h1><a target="_blank" href="{{url('/storage/'.$upload->file)}}">{{$upload->description}}</a></a></h1></p>
                            <br>
                            <br>
                            <p class="lead">Branch:{{$upload->branch_name}}</p>
                            <br>
                            <br>
                            <p class="lead">Subject:{{$upload->subject_name}}</p>
                            <br>
                            <br>
                            <p class="lead">Year:{{$upload->year}}</p>
                            <br>
                            <br>
                            <p class="lead">Votes:{{$upload->votes}}</p>
                            <br>
                          </div>
                        </div>
                        </div>
                        @endforeach
                        {{$uploads->links()}}
                  @else
                  <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <br>
                      <p class="lead">You Have not uploaded anything yet!</p>
                      <br>
                    </div>
                  </div>
                  @endif
                    <br><br>
              
                
           
</div>
@endsection
