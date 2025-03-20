<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Student List</h2>
        <h5 class="text-center mb-4">SIA-2 (MID TERM EXAM)</h5>
        <table class="table table-bordered table-light table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Department</th>
                    <th>MidTerm GRADE</th>
                    <th>Final GRADE</th>
                    <th>Commulative Grade</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $exam as $students )
                <tr>
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->last_name }}, {{  $students->first_name }} {{ $students->middle_name }}.</td>
                    <td>
                        @if ($students->dept->isNotEmpty())
                            {{ $students->dept->first()->department}}
                        @else
                            N/A
                        @endif
                        <td>
                            @if($students->grades->isNotEmpty())
                                {{ $students->grades->first()->midtermGrade }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($students->grades->isNotEmpty())
                                {{ $students->grades->first()->finalGrade }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($students->grades->isNotEmpty())
                                {{ ($students->grades->first()->midtermGrade + $students->grades->first()->finalGrade) / 2 }}
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 class="text-center mb-4">Student List</h2>
  <h5 class="text-center mb-4">SIA-2 (MID TERM EXAM)</h5>           
  <table class="table table-dark table-hover">
    <thead>
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Department</th>
                <th>MidTerm GRADE</th>
                <th>Final GRADE</th>
                <th>Commulative Grade</th>
                </tr>
    </thead>
    <tbody>
    @foreach ( $exam as $students )
                <tr>
                    <td>{{ $students->id }}</td>
                    <td>{{ $students->last_name }}, {{  $students->first_name }} {{ $students->middle_name }}.</td>
                    <td>
                        @if ($students->dept->isNotEmpty())
                            {{ $students->dept->first()->department}}
                        @else
                            N/A
                        @endif
                        <td>
                            @if($students->grades->isNotEmpty())
                                {{ $students->grades->first()->midtermGrade }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($students->grades->isNotEmpty())
                                {{ $students->grades->first()->finalGrade }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if($students->grades->isNotEmpty())
                                {{ ($students->grades->first()->midtermGrade + $students->grades->first()->finalGrade) / 2 }}
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
    </tbody>
  </table>
</div>

</body>
</html>