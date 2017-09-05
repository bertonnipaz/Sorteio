  <?php
  require_once 'cabecalho.php';

  $peladeiros = ["ANDINHO", "ANDRÉ", "ANDRÉ/EMILIO", "BEETHOVEN", "BERTONNI", "BETINHO", "BETO", "CHOCOLATE", "DANDÃO", "DANIEL", "DUDU", "ELVYZ", "EMERSON", "EMILIO", "FERNANDO", "FLEDSON", "GAÚCHO", "JEFSON", "ODAIR", "PEDOCA", "PEDRO", "PINHA", "PIQUENO", "RODOLFO", "ROGÉRIO", "ROTSON", "SALSA", "TARCÍZIO", "THIAGO", "TRIGO", "VALMIR", "VICTOR"];
  ?>
  <div class="container">
  <div class="col-md-12">
    <button class="btn btn-warning" id="mark_all">Marcar Todos</button>
    <a href="home.php" class="btn btn-danger">Desmarcar Todos</a>
  </div>
    <form action="result.php" method="POST">
    <?php
      for ($i = 0; $i < sizeof($peladeiros); $i++) { 
    ?>
      <div class="col-md-2">
        <label><?= $peladeiros[$i] ?>
        <input type="checkbox" class="form-control" name="peladeiro[]" value="<?= $peladeiros[$i] ?>">
        </label>
      </div>
    <?php
      }
    ?>
      <div class="col-md-12">
        <input type="submit" value="Sortear" class="btn btn-success"></input>
      </div>
    </form>
  </div>
</body>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/sorteio.js"></script>
</html>