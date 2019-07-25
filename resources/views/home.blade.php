@extends('layouts.app')

@section('homeactive')
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

                    @foreach($uploads as $upload)
                    <div style="height: auto;
                                width:auto;
                                background-color:#0E5D7B;
                                margin-top: 0px;
                                background:linear-gradient(  #ffffff,#ffeffa);">
                    <div class="jumbotron jumbotron-fluid" style="background: none !important;">
                      <div class="container">
                        <br>
                        <p class="lead"><h1><a style="color: #595959; text-decoration:none" target="_blank" href="{{url('/storage/'.$upload->file)}}">{{$upload->description}}</a></a></h1></p>
                        <br>
                        <br>
                        <p class="lead">Branch : {{$upload->branch_name}}</p>
                        <br>
                        <br>
                        <p class="lead">Subject : {{$upload->subject_name}}</p>
                        <br>
                        <br>
                        <p class="lead">Uploaded by : {{$upload->user->name}}</p>
                        <br>
                        <br>
                        <p class="lead">Year : {{$upload->year}}</p>
                        <br>
                        <br>
                        <p class="lead">Votes : {{$upload->votes}}</p>
                        <br>
                      </div>
                    </div>
                    </div>
                    @endforeach
                    {{$uploads->links()}}
                    <br><br>
                    
                </div>
           
</div>
@endsection
