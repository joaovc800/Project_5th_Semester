$(function(){
    $.ajax({
        url: "../model/menus.php",
        method: "POST",
        dataType: "JSON",
    }).done(function(){
        erro = 0;
    }).fail(function(){
        erro = 1;
    }).always(function(retorno){
        if(erro != 1){
            if(retorno.ERRO != true){
                $.each(retorno.MENU,function(key,value){
                    var menu = `<li class="nav-item">
                                    <a class="nav-link btn-menu-click btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#sub-${value['ID_MENU']}" aria-expanded="false">
                                        <i class="nav-icon ${value['ICON']}"></i>
                                         ${value['DESCR']}
                                    </a>
                                </li>
                                <div class="hideable submenu collapse" id="sub-${value['ID_MENU']}">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small submenu-inner menu-${value['ID_MENU']}" m-item="${value['ID_MENU']}">
                                    
                                    </ul>
                                </div>
                                `;
                    $(".menus").append(menu);
                });
                
                $.each(retorno.SUBMENU,function(key,value){
                    $.each(value,function(key2,value2){
                        var submenu = `<li class="nav-item">
                                            <a href="${value2['LINK']}" class="nav-link">
                                                <span class="nav-text">
                                                    <span>${value2['DESCSUBMENU']}</span>
                                                </span>
                                            </a>
                                        </li>`;
                        $(".menu-" + key).append(submenu);                             
                    });
                }); 
            }
        }
    });
    
    var menuLogout = `<li class="nav-item">
                                    <a class="nav-link btn-menu-click btn btn-toggle align-items-center rounded collapsed" href="../model/logout.php">
                                        <i class="fas fa-sign-out-alt"></i>
                                         Logout
                                    </a>
                                </li>`;
    $(".menus").prepend(menuLogout);
});
