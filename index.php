<!DOCTYPE html>
<html lang="ckb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family: calibri !important;
        }
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ecf0f1;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows: repeat(4, 1fr);
            grid-gap: 20px;
            height: 100vh;
            padding: 20px;
        }

        .button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #3498db;
            font-size: 18px;
            height: 100%;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
        }
        a, a:link, a:visited, a:hover {
            text-decoration: none;
            color: #fff;
            font-size: xx-large;
        }

        .button:hover {
            background-color: #2980b9;
        }

        /* Media Query for Laptop/Desktop */
        @media only screen and (min-width: 768px) {
            .container {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, 1fr);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="button"><a href="info.php">زانیاری سایەق پاص</a></div>
        <div class="button"><a href="set.php">ڕێکخستن</a></div>
        <div class="button"><a href="maps.php">نەخشە</a></div>
        <div class="button"><a href="about.php">دەربارەی ئێمە</a></div>
    </div>
</body>

</html>