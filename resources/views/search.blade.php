@extends('layouts.app')


@section('searchactive')
active disabled
@endsection


@section('content')


<div class="bg-layer">


                <div class="header-main" style="max-width: 650px;">

            <div class="card">
                <div class="card-header"><strong>Search Notes</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('searchquery') }}">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1"><strong>Semester</strong></label>
                      <select name="semester_name" class="form-control">
                        @foreach($semesters as $semester)
                        <option value="{{$semester->name}}">{{$semester->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><strong>Branch</strong></label>
                      <select name="branch_name" class="form-control">
                        @foreach($branches as $branch)
                        <option value="{{$branch->name}}">{{$branch->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1"><strong>Subject</strong></label>
                      <select name="subject_name" class="form-control">
                        @foreach($subjects as $subject)
                        <option value="{{$subject->name}}">{{$subject->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                    <br><br>

                </div>
            </div>

    </div>
</div>

@endsection
