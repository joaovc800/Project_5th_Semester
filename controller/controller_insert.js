/**
 * Utilizado para realizar requisições do tipo POST.
 * @return {null} Não retorna dados.
 */
const post = () => {
    var formDados = new FormData(document.getElementById('form-new-acc')); // criar uma sessao do form
    const dados = Object.fromEntries(formDados.entries()); // Criar objeto com os dados da sessao

    // enviar os dados
    fetch("model/newAccount.php", {
        credentials:"same-origin",
        mode:"same-origin",
        method:"post",
        headers: { "Content-Type" : "application/json" },
        body: JSON.stringify({'username':dados.email, 'password':dados.password})
    })
    // verificar se o servidor teve erros, senao processar os dados
    .then( resp => {
        if (resp.status === 200) {
            return resp.json();
        } else {
            console.log('Error status: ', resp.status);
        };
    })
    // informar dados recebidos previamente
    .then( dados => {
        alert(dados.MSG); // lancar um alerta dizendo que a conta foi criada; seria bom melhorar isso
    })
    .catch( (err) => {console.log(err); })
}
