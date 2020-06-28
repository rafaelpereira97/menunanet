<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <title>{{$restaurant->name}} | MENU</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,800&display=swap');
        body {
            font-family: 'Fredericka the Great';
            background-image: url("{{asset('background.jpg')}}");
            color: #e1e1e1;
        }

        table {
            width: 90%;
            margin:50px auto;
            table-layout:fixed;
            border-collapse: collapse;
        }

        td {
            padding:1em 0 0 0;
            vertical-align:bottom;
            /*background-image:radial-gradient(black 1px, white 0px);*/
            background-size: 8px 8px;
            background-repeat:repeat-x;
            background-position: left bottom;
        }

        td span{
            /*background-color:#fff;*/
        }

        td:first-child {
            text-align: left;
            font-weight: 700;
        }

        td:first-child span{
            padding-right:.25em;
        }

        td:last-child {
            text-align:right;
            width:3em;
        }

        td:last-child span{
            padding-left:.25em;
        }

        hr.hr-4 {
            padding: 0;
            border: none;
            border-top: medium double #8c8c8c;
            color: #8c8c8c;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div style="margin-top: 25px" class="row">
        <div class="col-md-4">
            <img style="margin-left: auto;
                        margin-right: auto;
                        margin-bottom: 25px;
                        display: block;
                        width: 250px" src="{{url("uploads/".$restaurant->logo)}}">
        </div>
        <div class="col-md-4">
            <h1 style="text-align: center;font-family: 'Open Sans', sans-serif; color: white">MENU</h1>
            <hr class="hr-4">
        </div>
        <div class="col-md-4">

        </div>
    </div>
    <br>
    @foreach($restaurant->menus->sortBy('order',true) as $menu)
        <div>
    <h4 style="text-align: center; font-family: 'Open Sans', sans-serif; color: whitesmoke">{{$menu->name}}</h4>
    <table>
        @foreach($menu->dishes as $dish)
        <tr>
            <td><span>{{$dish->name}}</span></td>
            <td><span>{{$dish->price}}€</span></td>
        </tr>
        @endforeach
    </table>
        </div>
        <br>
    @endforeach
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
