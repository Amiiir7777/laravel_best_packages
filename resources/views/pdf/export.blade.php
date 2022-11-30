<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users pdf</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
    <tr>
        <th scope="row">{{ $key += 1 }}</th>
        <td>{{ $user->name }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
