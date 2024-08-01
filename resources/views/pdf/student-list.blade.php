<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header, .footer {
            width: 100%;
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            width: 100px;
        }
        .content {
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        .thead{
            background-color: #706f6f;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 50px; /* Footer height */
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="school_logo.png" alt="Logo">
    </div>
    <div class="content">
        <p>L.isdhoo School</p>
        <p>{{$competition->name}}</p>
        <h5>Participating Students List</h5>
        <table>
            <thead>
                <tr class="thead">
                    @foreach ($competition->included_fields as $included_field)
                    <td>{{$tableCols[$included_field]}}</td>

                    @endforeach
                </tr>
            </thead>
            <tbody>
                <!-- Example Data Rows -->
                @foreach ($competition->competitionStudents as $competitionStudent)

                <tr>
                    @foreach ($competition->included_fields as $included_field)
                    <td>{{$competitionStudent->students[$included_field]}}</td>

                    @endforeach
                </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="footer">
        <p>&copy; 2024 L.isdhoo school.</p>
    </div>
</body>
</html>
