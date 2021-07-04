var ir=document.getElementById('ir');
ir.addEventListener('click',pesquisa_categoria);

function pesquisa_categoria(){

    var categoria=document.getElementById('pesquisa_categoria').value;
    switch(categoria){
        case "Romance":
            case"romance":vai_categoria('romance');break;

            case "Ação":
                case "acao":
                    case "Acao":
            case"ação":vai_categoria('acao');break;

            case "Comédia":
            case"comédia":vai_categoria('comédia');break;

            case "Terror":
            case"terror":vai_categoria('terror');break;

            default:categoria.value="Não temos essa categoria no momento";break;
    }
}

function vai_categoria(obj){

    var elemento=document.getElementById(obj);
    elemento.scrollIntoView();
}