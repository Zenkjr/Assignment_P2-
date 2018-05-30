<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">student</th>
        <th scope="col">time slot</th>
        <th scope="col">subject code</th>
        <th scope="col">date</th>
        <th>link</th>
    </tr>
    </thead>
    <tbody>
    @foreach($id_class as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>

    @endforeach
    </tbody>
</table>
</body>
</html>


    {{--@endsection--}}

