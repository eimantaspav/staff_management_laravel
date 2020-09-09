@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Projektas</th>
             
                <th>Veiksmai</th>
            </tr>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
               

                    <td>
                    
                            <a class="btn btn-success" href={{ route('projects.edit', $project->id) }}>Redaguoti</a>

                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
        <div>
            <a href="{{ route('projects.create') }}" class="btn btn-success">Pridėti</a>
        </div>
    </div>


@endsection
