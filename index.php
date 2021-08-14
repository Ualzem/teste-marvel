<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <title>Teste Marvel</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

  <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@500&display=swap" rel="stylesheet">
  
</head>

<body onload="character()">

<header class="desafioHeader">
   <div class="container">
      <div class=itensHeader>
          <div class="logoHeader">
            <img src="img/logoUalzem2.png">
          </div>
          <div class="titleHeader">
            <h1>Desafio Single Page Application SG2 Sistemas<h1>
          </div>
      </div>
   </div>
</header>

  <section class="jumbotron">
    <div class="container">
      <h1 class="header-main-title">Digite o nome do personagem Marvel desejado</h1>
      <form id="connectionForm">

        <div class="form-group">
          <input required type="text" name="name" id="name" class="form-control character-search-box"
            placeholder="(Thor, Iron Man, Spider-Man, etc...)">
        </div>
        <input type="submit" value="Buscar" class="btn btn-danger mb-2 float-right search-character-button">

      </form>
    </div>
  </section>

  <div class="container" id="contentContainer">

    <div class="d-flex align-items-center" id="characterSpinnerSection"></div>
    <div class="d-flex align-items-center" id="comicsSpinnerSection"></div>

    <section id="characterSection"></section>

    <section id="comicSection"></section>
  </div>


  <script src="main.js"></script>
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>