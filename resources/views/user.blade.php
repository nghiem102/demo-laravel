<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Ten</th>
                    <th>Tuoi</th>
                    <th>Dia chi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_list as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['age']}}</td>
                        <td>{{$item['address']}}</td>
                        <!-- @if($item['status'] === 1)
                            <td>Kich hoat</td>
                        @else
                            <td>khong kich hoat</td>
                        @endif -->
                        <td>{{$item['status'] ? 'kich hoat': 'khong kich hoat'}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
