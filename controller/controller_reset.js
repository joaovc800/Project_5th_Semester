function resetPass(){
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(this.status == 200 && this.readyState == 4){
            var json = JSON.parse(this.responseText);
            if(json.ERRO != 1){
                var divReset = document.getElementById("msg-reset");
                divReset.innerHTML = `<div class="alert alert-success">
                                        <p class="text-center">${json.MSG}</p>
                                        <p class="text-center"> Senha temporária: <b>${json.PASS}</b></p>
                                    </div>`;
            }
        }
}

var data = {
    email: document.getElementById("id-recover-email").value,
    matricula: document.getElementById("id-recover-registration").value
}
request.open("POST","model/reset.php",true)
request.send(JSON.stringify(data));
}

document.addEventListener('click',function(e){
    if(e.target.id == "btn-reset-pass"){
        resetPass();
    }
});