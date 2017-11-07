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
 <div class="column is-3 green">
   <div class="column is-10 is-offset-1">

<!-- Profil perso -->
<div class="card-header">
  <div class="card-header-title is-centered">
    <figure class="image is-96x96">
      <img class="radius" src="{{ asset('img/pp2.jpg') }}" alt="Placeholder image">
    </figure>
  </div>
</div>
  <div class="card-content">
    <div class="media">

      <div class="media-content">
        <p class="title is-4 has-text-white has-text-centered">Christophe Parmentier</p>
        <p class="subtitle has-text-danger has-text-centered">@thecrispydesign</p>
      </div>

    </div>
  <div class="content has-text-grey-lighter has-text-centered">
    Le poker est un jeu passionnant permettant de perdre son argent, son temps et ses amis.
  </div>
  </div>
</div>


<!-- menu -->
<div class="">
<a href="#">
  <div class="column">
    <p class="field has-text-centered">
      <span class="icon is-large">
        <i class="fa fa-2x fa-bar-chart has-text-grey"></i>
      </span>
      <span class="title has-text-grey">Stats</span>
    </p>
  </div>
</a>
</div>



<div class="link-active">
<a href="#">
  <div class="column">
    <p class="field has-text-centered">
      <span class="icon is-large">
        <i class="fa fa-2x fa-gamepad has-text-white"></i>
      </span>
      <span class="title has-text-white">Parties</span>
    </p>
  </div>
</a>
</div>

<div class="">
<a href="#">
  <div class="column">
    <p class="field has-text-centered">
      <span class="icon is-large">
        <i class="fa fa-2x fa-star has-text-grey"></i>
      </span>
      <span class="title has-text-grey">Scores</span>
    </p>
  </div>
</a>
</div>


<div class="">
<a href="#">
  <div class="column">
    <p class="field has-text-centered">
      <span class="icon is-large">
        <i class="fa fa-2x fa-trophy has-text-grey"></i>
      </span>
      <span class="title has-text-grey">Classements</span>
    </p>
  </div>
</a>

</div>


<div class="">
<a href="#">
  <div class="column">
    <p class="field has-text-centered">
      <span class="icon is-large">
        <i class="fa fa-2x fa-sign-out has-text-grey"></i>
      </span>
      <span class="title has-text-grey">Se deconnecter</span>
    </p>
  </div>
</a>

</div>

 </div>
</div>


<!-- contenu -->

<!-- TOP CARDS -->
 <div class="column is-offset-3">
   <div class="columns">

     <!--  CARD 1 -->
     <div class="column is-3">
       <div class="card">
           <header class="card-header" >

            <div class="column is-3 is-offset-2">
               <a href="#" class="card-header-icon" aria-label="more options">
                 <span class="icon has-text-danger is-large">
                   <i class="fa fa-3x fa-gamepad"></i>
                 </span>
               </a>

             </div>

              <div class="column is-6">
                <p class="has-text-right has-text-grey">Parties
                </p>
                <div class="columns">
                  <div class="column">
                    <p class="title has-text-right has-text-danger">5
                    </p>
                  </div>

                </div>
              </div>
            </header>

            <footer class="card-footer has-text-right">
              <div class="column">
                <span class="icon has-text-grey">
                  <i class="fa fa-calendar"></i>
                </span>


                <span class="subtitle is-6 has-text-grey">ce mois-ci</span>


              </div>
            </footer>



        </div>
      </div>

<!-- CARD2 -->
      <div class="column is-3">
        <div class="card">
            <header class="card-header" >

             <div class="column is-3 is-offset-2">
                <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon has-text-success is-large">
                    <i class="fa fa-3x fa-money"></i>
                  </span>
                </a>

              </div>

               <div class="column is-6">
                 <p class="has-text-right has-text-grey">Gains
                 </p>
                 <div class="columns">
                   <div class="column">
                     <p class="title has-text-right has-text-success">500€
                     </p>
                   </div>

                 </div>
               </div>
             </header>

             <footer class="card-footer has-text-right">
               <div class="column">
                 <span class="icon">
                   <i class="fa fa-calendar has-text-grey"></i>
                 </span>


                 <span class="subtitle is-6 has-text-grey">ce mois-ci</span>


               </div>
             </footer>



         </div>
       </div>






<!-- CARD3 -->
       <div class="column is-3">
         <div class="card">
             <header class="card-header" >

              <div class="column is-3 is-offset-2">
                 <a href="#" class="card-header-icon" aria-label="more options">
                   <span class="icon has-text-danger is-large">
                     <i class="fa fa-3x fa-area-chart"></i>
                   </span>
                 </a>

               </div>

                <div class="column is-6">
                  <p class="has-text-right has-text-grey">Ratios
                  </p>
                  <div class="columns">
                    <div class="column">
                      <p class="title has-text-right has-text-danger">~23%
                      </p>
                    </div>

                  </div>
                </div>
              </header>

              <footer class="card-footer has-text-right">
                <div class="column">
                  <span class="icon">
                    <i class="fa fa-calendar has-text-grey"></i>
                  </span>


                  <span class="subtitle is-6 has-text-grey">ce mois-ci</span>


                </div>
              </footer>



          </div>
        </div>





<!-- CARD4 -->
<div class="column is-3">
  <div class="card">
      <header class="card-header" >

       <div class="column is-3 is-offset-2">
          <a href="#" class="card-header-icon" aria-label="more options">
            <span class="icon has-text-danger is-large">
              <i class="fa fa-3x fa-money"></i>
            </span>
          </a>

        </div>

         <div class="column is-6">
           <p class="has-text-right has-text-grey">Gains
           </p>
           <div class="columns">
             <div class="column">
               <p class="title has-text-right has-text-danger">-20€
               </p>
             </div>

           </div>
         </div>
       </header>

       <footer class="card-footer has-text-right">
         <div class="column">
           <span class="icon">
             <i class="fa fa-clock-o has-text-grey"></i>
           </span>


           <span class="subtitle is-6 has-text-grey">Derniere partie</span>


         </div>
       </footer>



   </div>
 </div>


<!-- End card4 -->



    </div>

    <!-- End CARDS -->



  <!-- start partie -->
    <div class="columns">

      <!-- partie 3 -->
      <div class="column">
        <nav class="panel">
          <div class="panel-heading">
            <div class="column">
              <a class="title" href="#">Partie numéro 3</a>
            </div>
          </div>
          <p class="panel-tabs">
            <a class="is-active">infos</a>
            <a>joueurs</a>

          </p>
          <div class="panel-block">
            <div class="column">
              <p class="has-text-centered">
                Nombre de joueurs : 9<br>
                BUY-IN : 20€ <br>
                Nombres de caves : 3 <br>
                Pot total : 180€ <br>
                durée : 3h <br>
                date : 30 septembre 2017 <br>

              </p>

            </div>
          </div>

          <label class="panel-block">
            <input type="checkbox">
            Ajouter en favoris
          </label>
          <div class="panel-block">
            <div class="field is-grouped">
              <p class="control">
                <a href=""class="button is-info">
                  Participer
                </a>
              </p>
              <p class="control">
                <a href=""class="button is-warning">
                  Détails
                </a>
              </p>
            </div>
          </div>
        </nav>






      </div>

    </div>
      <!-- partie en cours -->




<div class="columns">
  <div class="column">
    <nav class="panel">
      <div class="panel-heading">
        <div class="column">
          <a class="title" href="#">Partie numéro 4</a>

        </div>
      </div>
      <p class="panel-tabs">
        <a class="is-active">infos</a>
        <a>joueurs</a>

      </p>
      <div class="panel-block">
        <div class="column">
          <p class="has-text-centered">
            Nombre de joueurs : 9<br>
            BUY-IN : 20€ <br>
            Nombres de caves : 3 <br>
            Pot total : 180€ <br>
            durée : 3h <br>
            date : 30 septembre 2017 <br>

          </p>

        </div>
      </div>

      <label class="panel-block">
        <input type="checkbox">
        Ajouter en favoris
      </label>
      <div class="panel-block">
          <div class="field is-grouped">
            <p class="control">
              <a title="Disabled button" disabled class="button is-success">
                Vous participez
              </a>
            </p>
            <p class="control">
              <a class="button is-danger">
                Ne plus participer
              </a>
            </p>
            <p class="control">
              <a class="button is-warning">
                Détails
              </a>
            </p>
            <p class="control">
              <a class="button is-success">
                Edit
              </a>
            </p>
          </div>

      </div>
    </nav>






  </div>


</div>





<!-- partie finie -->


<div class="columns">
  <div class="column">
    <nav class="panel">
      <div class="panel-heading">
        <div class="column">
          <a class="title" href="#">Partie numéro 2 (finie) </a>
        </div>
      </div>
      <p class="panel-tabs">
        <a class="is-active">infos</a>
        <a>joueurs</a>
        <a>scores</a>


      </p>
      <div class="panel-block">
        <div class="column">
          <p class="has-text-centered">
            Nombre de joueurs : 9<br>
            BUY-IN : 20€ <br>
            Nombres de caves : 3 <br>
            Pot total : 180€ <br>
            durée : 3h <br>
            date : 30 septembre 2017 <br>

          </p>

        </div>
      </div>

      <label class="panel-block">
        <input type="checkbox">
        Ajouter en favoris
      </label>
      <div class="panel-block">
          <div class="field is-grouped">
            <p class="control">
              <a href="" title="Disabled button" disabled class="button is-black">Finie</a>

            </p>
            <p class="control">
              <a href="" class="button is-warning">Détails</a>

            </p>
          </div>

      </div>
    </nav>






  </div>


</div>




  </div>








</body>
</html>
