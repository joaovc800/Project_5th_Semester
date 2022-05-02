////////////////////////////////////////
// Modal do form
/**
 * Função para criar o modal, recebe o tipo do madal, o ID e o texto que pode ser uma string ou objeto.
 * @param {{tipo:string,idModal:string,textContent:object}} param 
 */
function criaModal(param){
    var nodeModal = document.getElementById("modal_erro");
    if(nodeModal){
        nodeModal.remove();
    }

    var nodeToast = document.getElementById("modal_sucesso");
    if(nodeToast){
        nodeToast.remove();
    }

    // Cuidado com esta variavel, ela é universal para os modals
    var modal;

    if (param.tipo === 'modal') {
        var div = document.getElementById("div_container_modal");
        var div = criaElemento({ element: "div", id: "div_container_modal"});
        document.body.appendChild(div);

        modal = `<div class="modal fade" id="${param.idModal}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Atenção</h5>
                                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="solid fas fa-times"></i>
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
        document.getElementById("div_container_modal").innerHTML = modal;
    } else if (param.tipo === 'toaster') {
        var div = document.getElementById("toaster");
        let toastInner = document.createElement("div")
        toastInner.classList.add("form-group","col-md-6","d-flex","justify-content-center","align-items-center");
        toastInner.setAttribute('id',`${param.idModal}`);

        modal = `
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                    <img src="../includes/images/icons/logo.png" class="rounded mr-2" alt="logo wit">
                    <strong class="mr-auto">Mensagem</strong>
                    <small>0 minutos atrás</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="toast-body">
                        ${param.textContent}
                    </div>
                </div>
                `;
        toastInner.innerHTML = modal;
        div.append(toastInner);
    }
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
    if (dados.MSG === 'Success') {
        dados.TIPO_ATIVO.map( (valor) =>  {
            let child = document.createElement("option");
            child.value = valor.ID;
            child.innerText = valor.ITEM;
            tipoAtivo.appendChild(child);
        }) 
        
        dados.LOCALIZACAO.map( (valor) =>  {
            let child = document.createElement("option");
            child.value = valor.ID;
            child.innerText = valor.ITEM;
            localizacao.appendChild(child);
        }) 
    } else {
        throw new Error('Nenhum dado enviado pelo servidor');
    }
})
.catch( err => console.log(err))
    
//////////////////////////////////////////
// Pegar dados do form

document.getElementById('form_manual').addEventListener('submit',  async (e) => {
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
        if (dados.ERRO != true) {
            criaModal({tipo:'toaster',idModal: "modal_sucesso", textContent: dados.MSG});;
            $(".toast").toast("show");
        } else {
            criaModal({tipo:'modal',idModal: "modal_error", textContent: dados.MSG});;
            $("#modal_error").modal("show");
        }
    })
    .catch( err => {
        console.log(err)
    })
});

// pegar vários dados pelo arquivo
document.getElementById('form_json').addEventListener('submit',  async (e) => {
    e.preventDefault(); // previnir redirect
    // pegar dados do form
    const dados = Array(Object.fromEntries( new FormData(e.target).entries()));
    let resultado = {...dados[0]};
    // ENVIAR O ARQUIVO PARA FAZER O PROCESSAMENTO E JÁ ENVIAR PELO FETCH
    parseAndPostJson(resultado.arquivo);
});

document.getElementById("custom_file").addEventListener("change", function() {
    var file = this.files;
    document.getElementById("custom_file_label").innerHTML = file[0].name;
});

async function parseAndPostJson(file) {
    /**
     * ler e enviar os dados
     */
    
    const fileReader = new FileReader();
    fileReader.onload = event => { 
        const json = JSON.parse(event.target.result);

        for(const key of Object.keys(json)) {
            // enviar dados para o php
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
                body: JSON.stringify(json[key])
            })
            .then( res => res.json())
            .then( dados => {
                if (dados.ERRO != true) {
                    criaModal({tipo:'toaster',idModal: "modal_sucesso", textContent: dados.MSG});
                    $(".toast").toast("show");
                } else {
                    criaModal({tipo:'modal',idModal: "modal_error", textContent: dados.MSG});
                    $("#modal_error").modal("show");
                }
            })
            .catch( err => {
                console.log(err);
            })
        }
    };
    
    fileReader.onerror = error => error;
    fileReader.readAsText(file);
}
        
