    let textoOriginal = document.getElementById("texto").textContent
        let campoTexto = document.getElementById("campoTexto")
        let resultado = document.getElementById("resultado")
        let contador = document.getElementById("contador")
        let reniciarbotao = document.getElementById("btnIniciar")

        let tempoIniciado = false
        let tempo = 0
        let intervalId;
        function iniciarTempo(){
            tempoIniciado = true
            intervalId = setInterval(()=>{
                tempo++;
                contador.textContent = tempo
            },1000)
            }

            function reiniciarJogo(){
             tempo = 0
             contador.textContent = tempo;
             campoTexto.value = "";
             campoTexto.disabled = false;
             tempoIniciado = false;
            }

            campoTexto.addEventListener("input",()=>{
                if(!tempoIniciado){
                iniciarTempo();
                    }
              if(campoTexto.value === textoOriginal){
               clearInterval(intervalId);
               resultado.textContent = `Parabéns, você digitou em ${tempo} segundos!`;
                campoTexto.disabled = true;
              }
            })

            reniciarbotao.addEventListener("click",reiniciarJogo())

            
