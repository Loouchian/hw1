

<html>
  <head>
    <meta charset="utf-8">
    <title>Agenzia pubblicitaria LC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="mhw1.css">
    <script src="holidays.js" defer></script>
    <script src="MHW3.js" defer></script>
    <script src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
    <?php

      if (session_status() == PHP_SESSION_NONE) session_start();


     ?>
  </head>
  <body>
    <header>
      <nav>
        <div id="logo">
          <img src="lucianocarusologo.png" alt="">
        </div>
        <?php
          if(isset($_SESSION['session_user'])){
            echo "Bentornato ".$_SESSION['session_user'];
            printf("%s", '<a href="php/dashboard.php">logout</a>');
}


        ?>
        <div id="links">


          <a href="MHW2.html" class="button">Servizi</a>
          <a href="login.html" class="button">Login</a>
          <a href="register.php" class="button">Registrati</a>
        </div>
		<div id="menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
      </nav>

      <h1>
        <em>Ti aiutiamo a far crescere la tua azienda</em><br/>
        <strong>mettiti in gioco</strong><br/>
        <a class="button">Impara di piu'</a>
      </h1>

    </header>
    <section>
      <div id="main">
        <h1>              </h1>
        <p>       </p>
      </div>
<div></div>
<div></div>
<div></div>




<div id="details">
  <div><br><br></div>
  <div>
    <img src="Social.jpg" />
    <h1>social</h1>
    <p>
Prendiamo in gestione il nome della tua azienda per potenziarlo a livelli superiori
</p>
  </div>
  <div>
    <img src="fotografia.jpg" />
    <h1>fotografia</h1>
    <p>
    Trattiamo i più disparati generi di Fotografia che possano esserti utili <br> per creare branding alla tua azienda
    </p>
  </div>
</div>

<div id="details">
  <div><br><br></div>
  <div>
    <img src="advertise.jpg" />
    <h1>advertise</h1>
    <p>
 Facciamo uno studio settoriale <br> e ti aiutiamo indicizzare meglio i tuoi contenuti sul web
</p>
  </div>
  <div>
    <img src="video.jpg" />
    <h1>videomaking</h1>
    <p>
      Ti serve uno spot? <br>
      sei sul posto giusto!
    </p>
  </div>

    </section>

    <section>

        <div class="holidays">
            <h3>Giorni di chiusura</h3>
            <div class="researches">
                <button id="ricercaNormale">Ricerca quest'anno</button>
                <button id="ricercaConData">Ricerca anno specifico</button>
                <input type='text'>
            </div>
            <div id="vacanze" class=hidden>
                <div class="results"></div>
            </div>
        </div>
    </section>

    <section>
        <h4>Noi siamo qui!</h4>
        <div id="info">
            <div id="map"></div>

            </div>
        </div>
    </section>

    <footer>
      <div id="logofooter">
        <img src="lucianocarusologo.png" alt="">
      </div>
      <address> Catania</address>
      <p>Powered by Caruso Luciano O46002124</p>
    </footer>
  </body>
</html>
