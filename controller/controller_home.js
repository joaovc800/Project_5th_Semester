request = new XMLHttpRequest();
request.onreadystatechange = function(){
    if(this.status == 200 && this.readyState == 4){
        
        if(this.responseText != ""){
            
            var json = JSON.parse(this.responseText);

            if(json.RESET == "S"){
                var container = document.createElement("div");
                container.setAttribute("id","div-modal");
                var div = `<div class="bootbox modal col-12 fade bootbox-prompt show" style="display: block" tabindex="-1" role="dialog" aria-modal="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">
                                      <p class="text-orange-d2 mb-0">Faça a sua redefinição de senha.</p>
                                  </h5>
                              </div>
                              <div class="modal-body">
                                <div class="bootbox-body">  
                                    <div class="mb-3 pos-rel">
                                        <input type="password" class="form-control form-control-lg pr-5" placeholder="Digite sua nova senha" id="senha1">
                                        <button id="view_senha1" type="button" class="btn btn-sm border-0 btn-white bgc-h-warning-l2 text-125 position-tr mt-1 mr-1 no-underline radius-1 d-style">
                                            <i class="pass1 fa fa-eye-slash text-90 d-n-active w-3"></i>
                                        </button>
                                    </div>     
                                    <div class="pos-rel mb-3">
                                        <input type="password" class="form-control form-control-lg pr-5" placeholder="Repita a senha" id="senha2">
                                        <button id="view_senha2" type="button" class="btn btn-sm border-0 btn-white bgc-h-warning-l2 text-125 position-tr mt-1 mr-1 no-underline radius-1 d-style">
                                            <i class="pass2 fa fa-eye-slash text-90 d-n-active w-3"></i>
                                        </button>
                                    </div>     
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-default bootbox-cancel">Cancel</button>
                                <button type="button" class="btn btn-primary bootbox-accept">OK</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-backdrop fade show"></div>`;
    
                container.innerHTML = div;
                document.body.appendChild(container);
                
                // botões para mostrar senha
            var button1 = document.querySelector("#view_senha1");
            var button2 = document.querySelector("#view_senha2");
            button1.addEventListener("click",function(){
                tooglePass("senha1","pass1")
            });

            button2.addEventListener("click",function(){
                tooglePass("senha2","pass2")
            });

            //botões do modal
            document.querySelector(".bootbox-cancel").addEventListener("click",function(){
                var div = document.getElementById("div-modal");
                div.parentNode.removeChild(div);
                $(".modal-backdrop").remove();
            });

            document.querySelector(".bootbox-accept").addEventListener("click",function(){
                const buttonThis = this;
                buttonThis.setAttribute("disabled","disabled");
                requestChangePass = new XMLHttpRequest();
                requestChangePass.onreadystatechange = function(){
                    if(requestChangePass.readyState == 4 && requestChangePass.status == 200){
                        var json = JSON.parse(this.responseText);
                        
                        if(json.ERRO == false){
                            
                            var container = document.createElement("div");
                            container.setAttribute("id","div-msg");
                            var msg = `<div class="alert alert-success bgc-success-l3 brc-success-m2 d-flex align-items-center" role="alert">
                                            <i class="fas fa-info-circle mr-3 fa-2x text-success"></i>
                                            <div>
                                                ${json.MSG}
                                            </div>
                                        </div>`;
                            container.innerHTML = msg
                            document.querySelector(".bootbox-body").appendChild(container)

                            setTimeout(() =>{     
                                container.parentNode.removeChild(container);
                                $(".modal-backdrop").remove();
                                var div = document.getElementById("div-modal");
                                div.parentNode.removeChild(div);
                                buttonThis.removeAttribute("disabled");
                            },2500);
                        }else{
                            
                            var container = document.createElement("div");
                            container.setAttribute("id","div-msg");
                            var msg = `<div class="alert alert-danger bgc-danger-l3 brc-danger-m2 d-flex align-items-center" role="alert">
                                            <i class="fas fa-info-circle mr-3 fa-2x text-danger"></i>
                                            <div>
                                                ${json.MSG}
                                            </div>
                                        </div>`;
                            container.innerHTML = msg
                            document.querySelector(".bootbox-body").appendChild(container)
                            setTimeout(() =>{     
                                container.parentNode.removeChild(container);
                                buttonThis.removeAttribute("disabled");
                            },3000)
                        }
                    }
                }

                const data = {
                    senha1: document.getElementById("senha1").value,
                    senha2: document.getElementById("senha2").value,
                    reset_user: true
                }

                requestChangePass.open("POST","../model/reset.php",false);
                requestChangePass.send(JSON.stringify(data));
            });
            }

            function tooglePass(idIcon,classPass){
                var input = document.querySelector("#" + idIcon);
                var icon = document.querySelector("." + classPass);
                if(input.type == "text"){
                    input.type = "password";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                    
                }else{
                    input.type = "text";
                    icon.classList.remove("fa","fa-eye-slash");
                    icon.classList.add("fa","fa-eye");
                }
            }

        }
            
    }
}

request.open("POST","../model/verificar_reset.php",false);
request.send();


$("body").on("click",".nav-item",function(){
    $(".nav-item").removeClass("active")
    $(this).addClass("active");
});




