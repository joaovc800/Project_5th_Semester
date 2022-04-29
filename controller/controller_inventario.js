fetch("/model/inventario.php")
.then( res => res.json())
.then( (dados) => {
    console.log(dados);
    
    var root = document.getElementById("dados");
    dados.DADOS.map( (val,index) => {
        var div = criaElemento({ element: "tr", id: `dados_row${index}`});
        root.appendChild(div);
    
        modal = `
                <th>${val.codigo}</th>
                <td>${val.nota}</td>
                <td>${val.ativo}</td>
                <td>${val.serial}</td>
                <td>${val.localizacao}</td>
                `;
        document.getElementById(`dados_row${index}`).innerHTML = modal;
    })
})
.catch( err => console.log(err))

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
