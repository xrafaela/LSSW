<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercício 3 - PHP</title>
  <link rel="stylesheet" href="./styles.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div id="header-placeholder"></div>
    <script src="header.js"></script>
  </header>
  <main>
    <div class="container">
      <aside class="sidebar">
        <div id="menu-placeholder"></div>
      </aside>
      <div class="main-content">
        <section>
          <div class="text-container">
            <h1>Exercício 3 - Tabela com PHP</h1>
            <?php
              // Números inteiros
              $i1 = 10;
              $i2 = 20;
              $somaInteiros = $i1 + $i2;

              // Números reais
              $r1 = 10.0;
              $r2 = 20.0;
              $somaReais = $r1 + $r2;

              // Soma total (inteiros + reais)
              $somaTotal = $somaInteiros + $somaReais;

              // Exibindo a tabela
              echo "<table border='1' style='width: 100%; text-align: center;'>";
              echo "<tr>
                      <th>Números inteiros</th>
                      <th>Total inteiros</th>
                      <th>Soma</th>
                      <th>Números Reais</th>
                      <th>Total Reais</th>
                      <th>Soma</th>
                      <th>Total inteiros e reais</th>
                      <th>Soma</th>
                    </tr>";
              echo "<tr>
                      <td>$i1, $i2</td>
                      <td>$somaInteiros</td>
                      <td>Soma</td>
                      <td>$r1, $r2</td>
                      <td>$somaReais</td>
                      <td>Soma</td>
                      <td>$somaTotal</td>
                      <td>Soma</td>
                    </tr>";
              echo "</table>";
            ?>
          </div>
        </section>
      </div>
    </div>
  </main>
  <footer>
    <div id="footer-placeholder"></div>
    <script src="footer.js"></script>
  </footer>
  <script src="menu.js"></script>
</body>
</html>