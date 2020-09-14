@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Darbuotojas</th>
                <th>Projekto ID</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                   
                    <td>{{ $employee->project_id}}</td>

                </tr>
            @endforeach

        </table>
       
    </div>


@endsection
