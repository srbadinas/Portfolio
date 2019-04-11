<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@yield('title') - Portfolio</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

{{ Html::style('css/styles.css') }}

{{ Html::style('css/textcolor.css') }}

<style>
    html {
    }

    body {
        background: url('{{ asset("img/wallpaper.jpg") }}') no-repeat;
        background-attachment: fixed;
        width: 100%;
        height: 100%;
    }

    .page-wrapper {
        float: right;
        background: url('{{ asset("img/bg.png") }}') repeat;
        width: 80%;
        min-height: 100vh;
    }

    .about {
        
    }
    .about .intro {
        float: left;
        width: 100%;
    }

    .about .intro .content {
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: bold;
        float: left;
        width: 95%;
        border-left: 5px solid #008073;
        color: #008073;
        padding-left: 25px;
    }

    .about .body {
        font-size: 17px;
        line-height: 27px;
    }

</style>
