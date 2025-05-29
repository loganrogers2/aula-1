     const textoOriginal = document.getElementById('texto').textContent;
    const campoTexto = document.getElementById('campoTexto');
    const resultado = document.getElementById('resultado');
    const contador = document.getElementById('contador');
    const reiniciarButton = document.getElementById('reiniciar');
    
    let tempoIniciado = false;
    let tempo = 0;
    let intervalId;

    function iniciarTempo() {
      tempoIniciado = true;
      intervalId = setInterval(function() {
        tempo++;
        contador.textContent = tempo;
      }, 1000);
    }

    function reiniciarJogo() {
      clearInterval(intervalId)
      tempo = 0;
      contador.textContent = tempo;
      campoTexto.value = '';
      resultado.textContent = '';
      campoTexto.disabled = false;
      tempoIniciado = false;
    }

    campoTexto.addEventListener('input', function() {
      if (!tempoIniciado) {
        iniciarTempo();
      }

      if (campoTexto.value === textoOriginal) {
        clearInterval(intervalId); 
        resultado.textContent = `Parabéns! Você digitou o texto em ${tempo} segundos.`;
        campoTexto.disabled = true; 
      }
    });

    reiniciarButton.addEventListener('click', reiniciarJogo);

            
