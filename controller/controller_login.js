var logar = function(){
    request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(this.status == 200 && this.readyState == 4){
            var json = JSON.parse(this.responseText);
            var divError = document.getElementById("msg-error");
            if(json.ERRO == false){
                divError.innerHTML = "";
                window.location = json.REDIRECT;
            }else{
                divError.innerHTML = `<div class="alert alert-danger">
                                            <b>${json.MSG}</b>
                                      </div>`;
            }
        }
    }

    var data = {
        user: document.getElementById("user").value,
        password: document.getElementById("password").value
    }
    request.open("POST","model/login.php",false);
    request.send(JSON.stringify(data));
}

var button = document.getElementById("btn-submit");
button.addEventListener("click",logar);