<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercício 4 - Vetor $carro</title>
  <link rel="stylesheet" href="./styles.css" />
</head>
<body>
     <header>
    <div id="header-placeholder"></div>
    <script src="header.js"></script>
     
  </header>
   
   <div class="container">
      <aside class="sidebar">
        <div id="menu-placeholder"></div>
      </aside>  

  
  <main>
    <h1>Exercício 4 - Vetor $carro</h1>
    <div class="container">
      <section style="border-radius: 8px; border: 2px solid #ccc; padding: 15px; margin-bottom: 20px;">
        <h2>Inicialização Campo a Campo</h2>
        <?php
        
          $carro['marca'] = 'Ford';
          $carro['modelo'] = 'Fiesta';
          $carro['motorizacao'] = 1.4;
          $carro['premios_europa'] = ['Le Mans', 'Estoril 1999', 'Rali Monte Carlo'];
          $carro['premios_usa'] = 'Daytona 2000';

          // Exibindo o vetor
          echo "<pre>";
          print_r($carro);
          echo "</pre>";
        ?>
      </section>

      <section style="border-radius: 8px; border: 2px solid #ccc; padding: 15px; margin-bottom: 20px;">
        <h2>Inicialização Usando a Instrução array</h2>
        <?php
          // Inicialização usando a instrução array
          $carro = array(
            'marca' => 'Ford',
            'modelo' => 'Fiesta',
            'motorizacao' => 1.4,
            'premios_europa' => ['Le Mans', 'Estoril 1999', 'Rali Monte Carlo'],
            'premios_usa' => 'Daytona 2000'
          );

          // Exibindo o vetor
          echo "<pre>";
          print_r($carro);
          echo "</pre>";
        ?>
      </section>
    </div>  </div>
  </main>
  
   <footer>
    <div id="footer-placeholder"></div>
    <script src="footer.js"></script>
  </footer>
  <script src="menu.js"></script>
</body>
</html>