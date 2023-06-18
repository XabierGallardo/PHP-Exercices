let btn_resumen = document.getElementById("tickets_formulario-resumen");
let input_cantidad = document.getElementById("cantidad");
let input_categoria = document.getElementById("categoria_select");
let formulario_resultado = document.getElementById("tickets_formulario-resultado");
let valor_ticket = 200;
let valor_final = 0;

btn_resumen.addEventListener("click", resumenTickets);

function resumenTickets() {

    cantidad_tickets = parseInt(input_cantidad.value);
    valor_categoria = input_categoria.value;
    
    switch(valor_categoria) {
        case "Estudiante":
            valor_final = (valor_ticket - (valor_ticket * 80) / 100) * cantidad_tickets;
            break;

        case "Trainee":
            valor_final = (valor_ticket - (valor_ticket * 50) / 100) * cantidad_tickets;
            break;

        case "Junior":
            valor_final = (valor_ticket - (valor_ticket * 15) / 100) * cantidad_tickets;
            break;

        default:
            console.log("Categoria no especificada!")
    }

    formulario_resultado.innerHTML = valor_final;

    //console.log(typeof(cantidad_tickets))
}