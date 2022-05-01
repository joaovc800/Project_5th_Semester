
$(document).ready(function() {
    fetch("/model/inventario.php")
    .then( res => res.json())
    .then( (dados) => {
        var root = document.getElementById("dados");
        dados.DADOS.map( (val,index) => {
            var div = criaElemento({ element: "tr", id: `dados_row_${index}`});
            root.appendChild(div);
        
            let modal = `
                <td id="rol_${index}_0" class="clickable">${val.codigo}</td>
                <td id="rol_${index}_1" class="clickable">${val.nota}</td>
                <td id="rol_${index}_2" class="clickable">${val.ativo}</td>
                <td id="rol_${index}_3" class="clickable">${val.serial}</td>
                <td id="rol_${index}_4" class="clickable">${val.localizacao}</td>
            `;
            
            document.getElementById(`dados_row_${index}`).innerHTML = modal;
            document.getElementById(`dados_row_${index}`).addEventListener('click', () => { 
                // delete old modal
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
                // create the element first
                const div = document.createElement('div');
                div.classList.add('modal');
                setAttributes(div, { tabindex:"-1", id: 'modal_descricao' });
                document.body.prepend(div);
                document.getElementById(`modal_descricao`).innerHTML = modalDescricao;
                $("#modal_descricao").modal("show");
            })
        })
    })
    .catch( err => console.log(err))
    
    function setAttributes(el, attrs) {
        Object.keys(attrs).forEach(key => el.setAttribute(key, attrs[key]));
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
})
