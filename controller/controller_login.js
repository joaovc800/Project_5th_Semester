var logar = function(){
    request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(this.readState == 4 && this.status == 200){
            console.log(this);
        }
    }

    var data = {
        user: document.getElementById("user").value,
        password: document.getElementById("password").value
    }
    request.open("POST","../model/login.php",true);
    request.send(JSON.stringify(data));
}

var button = document.getElementById("btn-submit");
button.addEventListener("click",logar);