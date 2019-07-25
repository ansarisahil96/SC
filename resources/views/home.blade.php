@extends('layouts.app')

@section('homeactive')
active
@endsection

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($uploads as $upload)
                    <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <br>
                        <p class="lead"><h1><a target="_blank" href="{{url('/storage/'.$upload->file)}}">{{$upload->description}}</a></a></h1></p>
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
                    @endforeach
                    {{$uploads->links()}}
                    <br><br>
                    <a  class="lead" href="{{ route('store') }}">Upload</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
