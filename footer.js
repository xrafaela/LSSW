fetch('footer.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('footer-placeholder').innerHTML = data;

    // Atualiza a data e hora no rodapé
    const now = new Date();
    const options = { dateStyle: 'long', timeStyle: 'short' };
    const dateTime = now.toLocaleString('pt-PT', options);
    document.getElementById('footer-info').innerHTML += dateTime;
  })
  .catch(error => console.error('Erro ao carregar o rodapé:', error));