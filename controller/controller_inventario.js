
$(document).ready(function() {
    fetch("/model/inventario.php")
    .then( res => res.json())
    .then( (dados) => {
        createTable(dados);
    })
    .catch( err => console.log(err))
    
    function setAttributes(el, attrs) {
        Object.keys(attrs).forEach(key => el.setAttribute(key, attrs[key]));
    }
    
    function createTable(dados) {
        /**
         * Função principal de criação de tabela
         */
        // deleta a velha tabela
        let nodeDados = document.getElementById("dados");
        if(nodeDados){
            nodeDados.remove();
        }
        // remover alerta
        let errorAlert = document.getElementById("error_alert");
        if(errorAlert){
            errorAlert.remove();
        }
        
        // criar nova tabela com os dados
        const newDados = document.createElement('tbody');
        setAttributes(newDados, { id: 'dados' });
        document.getElementById("dados_root").appendChild(newDados);
        
        let root = document.getElementById("dados");
        dados.DADOS.map( (val,index) => {
    
            let div = criaElemento({ element: "tr", id: `dados_row_${index}`});
            root.appendChild(div);
        
            let tabelaSearch = `
                <td id="rol_${index}_0" class="clickable">${val.codigo}</td>
                <td id="rol_${index}_1" class="clickable">${val.nota}</td>
                <td id="rol_${index}_2" class="clickable">${val.ativo}</td>
                <td id="rol_${index}_3" class="clickable">${val.serial}</td>
                <td id="rol_${index}_4" class="clickable">${val.localizacao}</td>
            `;
            
            document.getElementById(`dados_row_${index}`).innerHTML = tabelaSearch;
            document.getElementById(`dados_row_${index}`).addEventListener('click', () => { 
             
                let nodeModal = document.getElementById("modal_descricao");
                if(nodeModal){
                    nodeModal.remove();
                }
                
                let modalDescricao = `
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Descrição do ${val.ativo} adicionado ${val.data}</h5>
                            </div>
                            <div class="modal-body">
                                <p>${val.descricao}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                `;
                
            
                const div = document.createElement('div');
                div.classList.add('modal');
                setAttributes(div, { tabindex:"-1", id: 'modal_descricao' });
                document.body.prepend(div);
                document.getElementById(`modal_descricao`).innerHTML = modalDescricao;
                $("#modal_descricao").modal("show");
            }) 
        })
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
            let text = document.createTextNode(param.text);
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

    // FORM HANDLEEEEEEEEEEEEEEEEEEEEEERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
    document.querySelector('form').addEventListener('submit',  async (e) => {
        e.preventDefault(); // previnir redirect
        // pegar dados do form
        const dados = Array(Object.fromEntries( new FormData(e.target).entries()));
        let resultado = {...dados[0]}
        // enviar dados do form
        fetch("/model/inventario.php")
        .then( res => res.json())
        .then( (dados) => {
            // delete old table data body
            let nodeDados = document.getElementById("dados");
            if(nodeDados){
                nodeDados.remove();
            }
            // remove alert
            let errorAlert = document.getElementById("error_alert");
            if(errorAlert){
                errorAlert.remove();
            }
            // create a new table data body
            const newDados = document.createElement('tbody');
            setAttributes(newDados, { id: 'dados' });
            document.getElementById("dados_root").appendChild(newDados);
            
            let root = document.getElementById("dados");
            dados.DADOS.map( (val,index) => {
                if (val.codigo === resultado.buscar) {
                    // criar elemento
                    let div = criaElemento({ element: "tr", id: `dados_row_${index}`});
                    root.appendChild(div);
                
                    let tabelaSearch = `
                        <td id="rol_${index}_0" class="clickable">${val.codigo}</td>
                        <td id="rol_${index}_1" class="clickable">${val.nota}</td>
                        <td id="rol_${index}_2" class="clickable">${val.ativo}</td>
                        <td id="rol_${index}_3" class="clickable">${val.serial}</td>
                        <td id="rol_${index}_4" class="clickable">${val.localizacao}</td>
                    `;
                    
                    document.getElementById(`dados_row_${index}`).innerHTML = tabelaSearch;
                    document.getElementById(`dados_row_${index}`).addEventListener('click', () => { 
                        // deletar modal velho
                        let nodeModal = document.getElementById("modal_descricao");
                        if(nodeModal){
                            nodeModal.remove();
                        }
                    
                        let modalDescricao = `
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Descrição do ${val.ativo} adicionado ${val.data}</h5>
                                    </div>
                                    <div class="modal-body">
                                        <p>${val.descricao}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        `;
                        
                        const div = document.createElement('div');
                        div.classList.add('modal');
                        setAttributes(div, { tabindex:"-1", id: 'modal_descricao' });
                        document.body.prepend(div);
                        document.getElementById(`modal_descricao`).innerHTML = modalDescricao;
                        $("#modal_descricao").modal("show");
                    })
                }  
            })
            // Checar se há dados ou não
            const targetDiv = document.getElementById('dados');
        
            if (targetDiv.childNodes.length === 0) {
                // avisar que nada foi encontrado
                let errorAlert = document.getElementById("error_alert");
                if(errorAlert){
                    errorAlert.remove();
                }
                
                let div = criaElemento({ element: "div", id: `error_alert`});
                document.getElementById("main_container").prepend(div);
            
                let error = `
                    <div class="alert alert-primary" role="alert">
                        O produto não existe em nosso estoque, resetando.
                    </div>
                `;
                
                document.getElementById(`error_alert`).innerHTML = error;
                // após 5000 millisegundos fazer reload dos dados
                setTimeout(function() { createTable(dados); }, 3000);
            }
        })
        .catch( err => console.log(err))
    });

}) // linha de finalizacao jquery
