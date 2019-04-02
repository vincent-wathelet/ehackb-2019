<!DOCTYPE html>
<html lang="en">
<head>

    <title>Print</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

    <style>

        @page { size: A5 }

        body {
            font-family: 'Roboto', sans-serif;
            font-size: 0.8em;
        }

        h1, h3 {
            text-align: center;
        }

        img {
            display: block;
            margin: 2em auto;
            height: 150px;
            width: 150px;
            object-fit: contain;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 3em;
        }

        p {
            text-align: center;
            margin-top: 2em;
        }

        tr:first-child {
            background-color: #dddddd;
            font-weight: 500;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }



    </style>

</head>
<body class="A5">
    @yield('content')
</body>
</html>