<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="topnav">
        <a class="active" href="home">Home</a>
        <a href="contact">Contact</a>
    </div>

    <div style="padding-left:16px">
        <h2>Top Navigation Example</h2>
        <p>Some content..</p>
    </div>
    <div id="content"></div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function () {
            //initial
            $('#content').load('contents/home.php');
            //handle file clicks
            $('div.topnav a').click(function(){
                var page = $(this).attr('href');
                $('#content').load('contents/' + page + '.php');
                return false;
            });
        });
    </script>
</body>

</html>