<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border="3">
        <tr>
            <td>id</td>
            <td>time</td>
            <td>duration</td>
            <td>ip</td>
            <td>url</td>
            <td>method</td>
            <td>input</td>
        </tr>
        @foreach ($logs as $log)
            <tr>
                <td>{{ $log['id'] }}</td>
                <td>{{ $log['time'] }}</td>
                <td>{{ $log['duration'] }}</td>
                <td>{{ $log['ip'] }}</td>
                <td>{{ $log['url'] }}</td>
                <td>{{ $log['method'] }}</td>
                <td>{{ $log['input'] }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
