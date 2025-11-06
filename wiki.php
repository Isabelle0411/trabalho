<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap" rel="stylesheet">

    <title>Projeto</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.html"><h1>SKYRIM</h1></a>
            <div id="menu">
                <a id="escolhamenu"href="index.html">Inicio</a>
                <a id="escolhamenu"href="./sobre.html">Sobre o Jogo</a>
                <a id="paginaAtiva"href="./wiki.php">Wiki</a>
<a id="loginLink" href="cadastro.html">Login/Cadastro</a>
            </div>
        </nav>
    </header>
        <main>
    <section class="content">
      <h2>Guildas</h2>
    



      <div class="cards">
        <div class="card">
          <h3>Companions</h3>
          <button onclick="companions()">Saiba Sobre</button>
        </div>
        
        <div class="card">
          <h3>Guilda dos Ladrões</h3>
          <button onclick="ladroes()">Saiba Sobre</button>
        </div>
       
        <div class="card">
          <h3>Dark Brotherhood</h3>
          <button onclick="darkbrotherhood()">Saiba Sobre</button>
        </div>
       
        <div class="card">
          <h3>Colegio de Winterhold</h3>
          <button onclick="magos()">Saiba Sobre</button>
        </div>
       
        <div class="cards">
      
          <div class="card">
          <h3>Colegio dos Bardos</h3>
          <button onclick="bardos()">Saiba Sobre</button>
        </div>
      </div>
    </section>
  </main>

      <div class="container">
      </div>
      <audio id="musica" autoplay muted loop>
  <source src="sons/From Past to Present(MP3_160K).mp3" type="audio/mp3">
</audio>

<script>
  const musica = document.getElementById("musica");

  function liberarSom() {
    musica.muted = false; 
    musica.volume = 0;   

    musica.play().then(() => {
      let vol = 0;
      const fade = setInterval(() => {
        if (vol < 1) {
          vol += 0.05;         
          musica.volume = vol;
        } else {
          clearInterval(fade); 
        }
      }, 100);                 
    }).catch(() => {
      console.log("Autoplay com som bloqueado. Clique na página para ouvir a música.");
    });

    window.removeEventListener("click", liberarSom);
  }

  window.addEventListener("click", liberarSom);
</script>

<style>
  #musica {
    display: none;
  }
</style>


            <script>
              function companions() {
                window.location.href="companions.html";
              }
            </script>

            
            <script>
              function ladroes() {
                window.location.href="thievesguild.html";
              }
            </script>

            
            <script>
              function darkbrotherhood() {
                window.location.href="darkbrotherhood.html";
              }
            </script>

            
            <script>
              function magos() {
                window.location.href="collegeofwinterhold.html";
              }
            </script>

            
            <script>
              function bardos() {
                window.location.href="collegeofbards.html";
              }
            </script>

<section id="comentarios" class="comentarios">
  <h3>Deixe seu comentário</h3>
  <form id="formComentario" method="POST" action="comentarios.php">
    <input type="text" name="nome" placeholder="Seu nome" required><br>
    <textarea name="mensagem" placeholder="Escreva seu comentário..." required></textarea><br>
    <button type="submit">Enviar</button>
  </form>

  <div id="listaComentarios">
    <?php include("listar_comentarios.php"); ?>
  </div>
</section>

<a id="loginLink" href="cadastro.html">Login/Cadastro</a>

</body>
</html>