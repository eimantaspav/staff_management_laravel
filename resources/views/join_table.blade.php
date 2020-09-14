@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Darbuotojas</th>
                <th>Projektas</th>
            </tr>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->name }}</td>
                   
                    <td>{{ $row->title }}</td>

                </tr>
            @endforeach

        </table>
       
    </div>


@endsection
