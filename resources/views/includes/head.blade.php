<!-- Head links -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:url"           content="http://stark-stream-15678.herokuapp.com/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Sherlockfood" />
<meta property="og:description"   content="check out this recipe at Sherlockfood!" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />

<!-- Hotjar Tracking Code for http://stark-stream-15678.herokuapp.com/ -->
{{-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1177744,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> --}}

<!-- Title -->
<title>Recipes</title>

<!-- Message warnings -->
@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::to('/images/ml.png') }}">

<!-- Google fonts -->
 <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,500,700,800" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,300,400,500,600,700,800,900" rel="stylesheet">

<!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />