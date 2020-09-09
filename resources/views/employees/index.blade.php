@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Darbuotojas</th>
                <th>Projekto ID</th>
                <th>Veiksmai</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                   
                    <td>{{ $employee->project_id}}</td>
                    
                    <td>
                        <form action={{ route('employees.destroy', $employee->id) }} method="POST">
                            <a class="btn btn-success" href={{ route('employees.edit', $employee->id) }}>Redaguoti</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" value="Trinti" />
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <div>
            <a href="{{ route('employees.create') }}" class="btn btn-success">Pridėti</a>
        </div>
    </div>


@endsection
