@if(empty(Session::get('jezik.AdminOptions::server()')))
	<link rel="stylesheet" href="{{ AdminOptions::base_url()}}admin">
@endif
<title>{{ AdminOptions::findSession('firma', 'naziv')}}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="msapplication-tap-highlight" content="no"/>
  	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="{{ AdminOptions::base_url()}}favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ AdminOptions::base_url()}}css/alertify.core.css">
    <link rel="stylesheet" href="{{ AdminOptions::base_url()}}css/alertify.default.css">
    <link href="{{ AdminOptions::base_url()}}css/admin.css" rel="stylesheet" type="text/css" />
    <script src="{{ AdminOptions::base_url()}}js/alertify.js" type="text/javascript"></script>    
	<link rel='stylesheet' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
    

