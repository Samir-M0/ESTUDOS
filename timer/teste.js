const tempoInicial = 60;

let tempo = tempoInicial * 60;

horas = Math.floor(tempoInicial/60)
let minutos = (horas % 60)/60;
let segundos = tempo % 60;
//                                                    SETAR O TEMPO

//----------------------------------------------------------------------------------------------------------------------------

segundos = segundos < 10 ?'0' + segundos : segundos

console.log(`${horas}:${minutos}:${segundos}`);