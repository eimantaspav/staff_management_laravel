@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         
                

            <div class="card-body">
                <?
    $servername = "127.0.0.1";
    $username = "root";
    $password = "mysql";
    $db = "staff_management";

    $conn = mysqli_connect($servername, $username, $password, $db);
            $sql = "SELECT employees.name, projects.title
            FROM employees JOIN projects ON
            projects.id = employees.project_id";
            $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                  echo '<table class="table">';
                  echo
                    "<tr>
                <td class='col-name'><strong>Darbuotojas</strong></td>
                <td class='col-name'><strong>Projektas</strong></td>
                </tr>";
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $row["name"] .  "</td>
                        <td>" . $row["title"] .  "</td>";
                  }
                } else {
                  echo "NESUKURTI KURSAI IR DARBUOTOJAI";
                }
                echo '</table><br></tr>';
                
            ?>
            </div>
            
        </div>
    </div>
</div>
@endsection


