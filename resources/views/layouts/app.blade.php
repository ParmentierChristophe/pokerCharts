<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>test</title>
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="columns is-gapless">

 <!-- sidebar -->
 <div class="column is-3 side">
   <div class="column is-10 is-offset-1">

<!-- Profil perso -->
@include('layouts/partials/_profil')


<!-- menu -->
@include('layouts/partials/_menu')


 </div>
</div>


<!-- contenu -->

<!-- TOP CARDS -->
 <div class="column is-offset-3">
    @include('layouts/partials/_topCard')



<!-- partie -->

@include('layouts/partials/_cardParty')






  </div>








</body>
</html>
