@include('partials.add_vacancy')

@extends('layouts.app')

@section('pagename')
Welcome Admin
@endsection

@section('content')
<div class="container">
    <div class="panel pb-5">
        <div class="panel-heading">
            <h3 class="panel-title">Website Overview</h3>
            <p class="panel-subtitle">Period: Jan 28, 2021 - Now</p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="stats-item text-center" data-aos="fade-left" data-aos-delay="150">
                        <div class="">
                            <span class="icon"><i class="fa fa-eye"></i></span>
                            <h5>
                                <b class="">{{ $visits }}</b>
                                <span class="">Visits</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-item text-center" data-aos="fade-left" data-aos-delay="150">
                        <div class="">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <h5>
                                <b class="number">{{ $contacted }}</b>
                                <span class="title">Contacted Us</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-item text-center" data-aos="fade-left" data-aos-delay="150">
                        <div class="">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <h5>
                                <b class="">{{ $applicants }}</b>
                                <span class="">CVs Recieved</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container admin" id="admin">
    <div class="section-title" data-aos="fade-up">
        <h2>Vacancies Manager</h2>
    </div>
    <div class="pb-2 text-right">
        <button class="btn-add px-3" data-toggle="modal" data-target="#add_vacancy"> New Vacancy </button>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Heading</th>
                    <th scope="col">Position</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Urgent</th>
                    <th scope="col">Part time</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $vacancy)
                @include('partials.edit_vacancy')
                <tr>
                    <td> {{ $vacancy->heading }} </td>
                    <td> {{ $vacancy->position }} </td>
                    <td> {{ $vacancy->salary }} </td>
                    <td> @if($vacancy->urgent) <i class="icofont-tick-mark" style="color: #e5545e"></i> @endif </td>
                    <td> @if($vacancy->part_time) <i class="icofont-tick-mark" style="color: #e5545e"></i> @endif </td>
                    <td>
                        <button class="btn-edit px-3" data-toggle="modal" data-target="#edit_vacancy{{ $vacancy->id }}"> Edit </button>
                    </td>
                    <td>
                        <a href="{{ url('/delete_vacancy/') }}/{{$vacancy->id}}"> <button class="btn-edit px-3"> Delete </button> </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection