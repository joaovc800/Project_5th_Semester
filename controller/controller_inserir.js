////////////////////////////////////////
// Modal do form
function criaModal(param){
    var nodeModal = document.getElementById("div_container_modal");
    if(nodeModal){
        nodeModal.remove();
    }
    var div = document.getElementById("div_container_modal");
    var div = criaElemento({element: "div", id: "div_container_modal"});
    document.body.appendChild(div);
    
    var modal = `<div class="modal fade" id="${param.idModal}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Aten��o</h5>
                                <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">${param.textContent}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-fecha-modal" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>`;

    if(param.btnAcao == true){
        var buttonAcao = `<button type="button" class="btn btn-primary btn-fecha-modal" data-bs-dismiss="modal">Salvar</button>`;
        document.querySelector(".modal-footer").innerHTML += buttonAcao;
    }

    document.getElementById("div_container_modal").innerHTML = modal
}

function criaElemento(param){
    
    element = document.createElement(param.element);
    
    if(param.id){
        element.setAttribute("id",param.id);
    }

    if(param.class){
        for (const key in param.class) {
            if (Object.hasOwnProperty.call(param.class, key)) {
                element.classList.add(param.class[key]);
            }
        }
    }
    
    if(param.text){
        var text = document.createTextNode(param.text);
        element.appendChild(text);
    }
    if(param.attribute){
        for (const key2 in param.attribute) {
            if (Object.hasOwnProperty.call(param.attribute, key2)) {
                element.setAttribute(key2,param.attribute[key2]);
            }
        }
    }
    console.log(element)
    return element
}


function reset(e) {
    for (let i of inputs) {
        i.value = '';
    }
}

// Botao de reset
const botao = document.getElementById('reset');
const inputs = document.getElementsByClassName('form-control col-sm-8 col-md-6')
botao.addEventListener('click', reset);

////////////////////////////////////////////////////////////////////////////////////////////////////////////
// selectbox

const tipoAtivo = document.getElementById('form-field-select-1'); // ativo
const localizacao = document.getElementById('form-field-select-2'); // localizacao

fetch("/model/dropowns.php")
.then( res => res.json())
.then( (dados) => {
    if (dados.ERR !== 'Success') {
        console.log(dados);
        dados.TIPO_ATIVO.map( (valor) =>  {
            let child = document.createElement("option");
            child.value = valor.item;
            child.innerText = valor.item;
            tipoAtivo.appendChild(child);
        }) 
        
        dados.LOCALIZACAO.map( (valor) =>  {
            let child = document.createElement("option");
            child.value = valor.item;
            child.innerText = valor.item;
            localizacao.appendChild(child);
        }) 
    } else {
        throw new Error('Nenhum dado enviado pelo servidor');
    }
})
.catch( err => console.log(err))
    
//////////////////////////////////////////
// Pegar dados do form

document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault(); // previnir redirect
    // pegar dados do form
    const dados = Array(Object.fromEntries( new FormData(e.target).entries()));
    let dropdown = document.getElementById('form-field-select-1');
    let dropdown2 = document.getElementById('form-field-select-2');
    let resultado = {...dados[0], t_ativo:dropdown.options[dropdown.selectedIndex].value, localizacao:dropdown2.options[dropdown2.selectedIndex].value}
    // enviar dados do form
    fetch('/model/adicionar.php', {
        method: 'POST', 
        mode: 'no-cors', 
        cache: 'no-cache', 
        credentials: 'same-origin', 
        headers: {
          'Content-Type': 'application/json'
        },
        redirect: 'follow', 
        referrerPolicy: 'no-referrer', 
        body: JSON.stringify(resultado)
    })
    .then( res => res.json())
    .then( dados => {
        if (dados.ERRO !== true) {
            console.log(dados);
        } else {
            criaModal({idModal: "modal_error", textContent: dados.MSG, btnAcao: false});;
            $("div_container_modal").modal("show")
        }
    })
    .catch( err => {
        console.log(err)
    })
});


// idModal = "id"
// TextContent = "o conteudo que vai dentro"
// BtnAção = Se vai existir um botão que vai execuar ajax
