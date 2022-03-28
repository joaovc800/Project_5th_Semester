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
async function postData(url, data) {
    const response = await fetch(url, {
      method: 'POST', 
      mode: 'no-cors', 
      cache: 'no-cache', 
      credentials: 'same-origin', 
      headers: {
        'Content-Type': 'application/json'
      },
      redirect: 'follow', 
      referrerPolicy: 'no-referrer', 
      body: JSON.stringify(data)
    });
    return response.json();
}


postData('', {})
  .then(data => {
    // console.log(data); // JSON data parsed by `data.json()` call
});

// Pegar dados do form
document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault(); // previnir redirect
    // pegar dados do form
    const dados = Array(Object.fromEntries( new FormData(e.target).entries()));
    let dropdown = document.getElementById('form-field-select-1');
    let dropdown2 = document.getElementById('form-field-select-2');
    let resultado = {...dados[0], t_ativo:dropdown.options[dropdown.selectedIndex].value, localizacao:dropdown2.options[dropdown2.selectedIndex].value}
    console.log(resultado);
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
        console.log(dados);
    })
    .catch( err => console.log(err))
});
