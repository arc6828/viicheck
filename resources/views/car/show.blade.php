@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Car {{ $car->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/car') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/car/' . $car->id . '/edit') }}" title="Edit Car"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('car' . '/' . $car->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Car" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $car->id }}</td>
                                    </tr>
                                    <tr><th> Brand </th><td> {{ $car->brand }} </td></tr>
                                    <tr><th> Series </th><td> {{ $car->series }} </td></tr>
                                    <tr><th> Colour </th><td> {{ $car->colour }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <div class="text-center mt-4">
                  <a href="" class="btn btn-warning">Inspection Form</a>
                  <a href="" class="btn btn-primary">Quotation</a>
                  <a href="" class="btn btn-success">Share</a>
                </div>
            </div>
        </div>
    </div>
@endsection
