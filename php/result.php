<?php
require_once 'cabecalho.php';
?>
  <div class="container">
    <?php
    $peladeiros = $_POST['peladeiro'];

    if (sizeof($peladeiros) >= 6) {
      $times = ceil(sizeof($peladeiros)/6);
    }
    $peladeiro = 0;
    $delimitador = 0;
    shuffle($peladeiros);
    for ($i = 0; $i < $times; $i++) {
      echo "<div class='col-md-2 times'>";
      echo "<b>Time " . ($i+1) . "</b><br><br>";
      $delimitador += 6;
      for ($j = $peladeiro; $j < $delimitador; $j++) { 
        if ($j == sizeof($peladeiros)) {
          break;
        } else
          echo $peladeiros[$j] . "<br>";
      }
      echo "</div>";
      $peladeiro = $j;
      // echo "<br>";
    }
    ?>
    <div class="col-md-12">
      <a href="home.php" class="btn btn-primary">Voltar</a>
    </div>
  </div>
</body>
<script src="../js/bootstrap.min.js"></script>
</html>