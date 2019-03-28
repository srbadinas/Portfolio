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

    main {
        
        background: url('{{ asset("img/wallpaper.jpg") }}') no-repeat top center/cover;
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .page-wrapper {
        float: right;
        background: url('{{ asset("img/bg.png") }}') repeat;
        width: 80%;
        height: 100%;
    }

    .page-title {
        float: left;
        width: 100%;
        height: 84px;
        background-color: #008073;
        color: #fff;
        padding: 3px 20px;
        margin-bottom: 40px;
        font-family: "Roboto", sans-serif;
        font-weight: 200;
    }

    .page-content {
        float: left;
        width: 100%;
        padding: 0px 20px;
    }

    .card {
        background: #fff;
        height: 80px;
        width: 90%;
        float: left;
        box-sizing: border-box;
        border-radius: 2px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        background-clip: padding-box;
        position: relative;
    }
    
</style>
