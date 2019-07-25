@extends('layouts.app')

@section('content')

<script src="{{ asset('js/upload.js') }}" defer></script>
<link href="{{ asset('css/upload.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload a PDF</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Semester</label>
                      <select name="semester_name" class="form-control">
                        @foreach($semesters as $semester)
                        <option value="{{$semester->name}}">{{$semester->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Branch</label>
                      <select name="branch_name" class="form-control">
                        @foreach($branches as $branch)
                        <option value="{{$branch->name}}">{{$branch->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Subject</label>
                      <select name="subject_name" class="form-control">
                        @foreach($subjects as $subject)
                        <option value="{{$subject->name}}">{{$subject->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Year</label>
                      <input name="year" class="form-control">
                      </input>
                    </div>


                    <div class="form-group">
                      <label>Description</label>
                      <textarea name="description" rows="10" cols="30" class="form-control">
                      </textarea>
                    </div>
                    <br>
                    <div class="form-group">
                      <label>Upload the pdf</label>
                      <div class="custom-file">
                        <br><br>
                        <input type="file" class="custom-file-input" name="fileUpload" id="file-upload"
                        >
                        <label class="custom-file-label" for="file-upload"><div id="file-upload-filename"></div></label>

                        <br>
                        @error('fileUpload')
                          <span class="text-danger"><strong>&nbsp;{{$message}}</strong></span>
                      @enderror
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <br><br>
                    <a  class="lead" href="{{ route('home') }}">Search</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
