function mostrarNav(){
    let nav = document.getElementById("nav")
    nav.style.display = nav.style.display == "block" ? 'none' : 'block';
}

function mostrarFormEstagiario(){

    let dadosHorarios = document.getElementById("dadosHorarios")
    dadosHorarios.style.display = "none";
    
    let dadosEstagio = document.getElementById("dadosEstagio")
    dadosEstagio.style.display =  "none";

    let dadosEstagiario = document.getElementById("dadosEstagiario")
    dadosEstagiario.style.display = 'block';

}

function mostrarFormEstagio(){

    let dadosEstagiario = document.getElementById("dadosEstagiario")
    dadosEstagiario.style.display = 'none';

    let dadosHorarios = document.getElementById("dadosHorarios")
    dadosHorarios.style.display = "none";

    let dadosEstagio = document.getElementById("dadosEstagio")
    dadosEstagio.style.display = "block";

}

function mostrarHoarios(){
   
    let dadosEstagio = document.getElementById("dadosEstagio")
    dadosEstagio.style.display = "none";

    let dadosEstagiario = document.getElementById("dadosEstagiario")
    dadosEstagiario.style.display = 'none';

    let dadosHorarios = document.getElementById("dadosHorarios")
    dadosHorarios.style.display = "block";
}

