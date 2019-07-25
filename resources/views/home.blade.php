@extends('layouts.app')

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
                    
                    @foreach($pdfs as $pdf)
                    <div class="jumbotron jumbotron-fluid">
                      <div class="container">
                        <br>
                        <p class="lead"><h1>{{$pdf->description}}</h1></p>
                        <br>
                        <br>
                        <p class="lead">Branch:{{$pdf->branch}}</p>
                        <br>
                        <br>
                        <p class="lead">Subject:{{$pdf->subject}}</p>
                        <br>
                        <br>
                        <p class="lead">Year:{{$pdf->year}}</p>
                        <br>
                        <p class="lead">Votes:{{$pdf->votes}}</p>
                        <br>
                      </div>
                    </div>
                    @endforeach
                    {{$pdfs->links()}}
                    <br><br>
                    <a  class="lead" href="{{ route('store') }}">Upload</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
