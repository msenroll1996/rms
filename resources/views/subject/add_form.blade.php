@extends('master')

@section('title')
    Add Subject
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">

                <div class="col-xl-4 col-lg-5 ">
                    <div class="card card-plain">
                        <div class="card-header">
                            <h4 class="font-weight-bolder">Add {{$title}}</h4>
                            <!-- <p class="mb-0">Enter your email and password to register</p> -->
                        </div>
                        <div class="card-body">
                            <form role="form" method = "post" action = "{{route('subject.store')}}">
                                @csrf


                                <div class="form-group row">
                                <label for="">Program Name:</label>
                                <div class="input-group input-group-outline mb-3">
                                    <select required name="program_id" class="form-control">
                                        <option value="" disabled selected>Choose Program</option>
                                        @foreach ($programs as $program)
                                        <option value="{{$program->id}}" >{{$program->name}}</option>
                                        @endforeach
                                    </select>
</div>


                                 <label for="">Semester:</label>
                                <div class="input-group input-group-outline mb-3">

                                   <input type="text" name = "semester" value="" class="form-control ">
                                </div>
                                <label for="">Subject Name:</label>
                                <div class="input-group input-group-outline mb-6">
                                  <input type="text" name = "subject_name" class="form-control">
                                </div>


                                            @if ($errors->any())
                                                <div class="alert alert-danger" role="alert">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if (Session::has('success'))
                                                <div class="alert alert-success text-center">
                                                    <p>{{ Session::get('success') }}</p>
                                                </div>
                                            @endif
                                            <table class="table table-bordered" id="dynamicAddRemove">
                                                <tr>
                                                    <th><label for="">Subject Name:</label></th>
                                                </tr>
                                                <tr>

                                                    <td>
                                                    <div class="input-group input-group-outline mb-6">
                                  <input type="text" name = "subject_name" class="form-control">
                                </div>
                                                    </td>
                                                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                                                </tr>
                                            </table>

                                    </div>

                                <!-- <div class="input-group input-group-outline mb-3">
                                  <label class="form-label">Password</label>
                                  <input type="text" class="form-control">
                                </div> -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Add</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


@endsection

