<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>

<body>

    <h1>Calculator : {{ $number }}</h1>

    @foreach (range(1, 12) as $key )
        {{ $key }} * {{ $number }} = {{ $key * $number }} <br />
    @endforeach


</body>

</html>
