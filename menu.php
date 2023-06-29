<ul class="page-sidebar-menu">
    <li class="sidebar-toggler-wrapper">
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone">
        </div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li class="sidebar-search-wrapper">
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search" action="extra_search.html" method="POST">
            <div class="form-container">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..." />
                    <input type="button" class="submit" value=" " />
                </div>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="start active ">
        <a href="index.html">
            <i class="fa fa-home"></i>
            <span class="title">
                Dashboard
            </span>
            <span class="selected">
            </span>
        </a>
    </li>
    <!--Cliente-->
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-file-text"></i>
            <span class="title">
                Cadastro
            </span>
            <span class="arrow ">
            </span>
        </a>
        <ul id="menuCadastro" class="sub-menu">
        </ul>
    </li>
    <!--Relatorio-->
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-bar-chart-o"></i>
            <span class="title">
                Relatório
            </span>
            <span class="arrow ">
            </span>
        </a>
        <ul id="menuRelatorio" class="sub-menu"></ul>
    </li>
</ul>



<script>
const menuCadastroOptions = [{
    submenu: [{
            option: "Cliente"
        },
        {
            option: "Fornecedor"
        },
        {
            option: "Usuário"
        }
    ]
}];

// Adicionando as opções "Produtos" e "Perfil de Acesso" ao menu Cadastro
menuCadastroOptions[0].submenu.push({
    option: "Produtos"
});
menuCadastroOptions[0].submenu.push({
    option: "Perfil de Acesso"
});

// Ordenando as opções do submenu em ordem alfabética
menuCadastroOptions.forEach(menuItem => {
    menuItem.submenu.sort((a, b) => a.option.localeCompare(b.option));
});

// Obtendo a referência do elemento de menu Cadastro
const menuCadastroElement = document.getElementById("menuCadastro");

// Gerando o código HTML para as opções do menu Cadastro
let menuCadastroHTML = "";
menuCadastroOptions.forEach(menuItem => {
    menuItem.submenu.forEach(submenuItem => {
        menuCadastroHTML += `<li><a href="#">${submenuItem.option}</a></li>`;
    });
});

// Inserindo o código HTML gerado no elemento de menu Cadastro
menuCadastroElement.innerHTML = menuCadastroHTML;



const menuRelatorioOptions = [{
    submenu: [{
            option: "Cliente"
        },
        {
            option: "Faturamento"
        }
    ]
}];

// Adicionando a opção "Produtos" em ordem alfabética ao submenu de "Relatório"
menuRelatorioOptions[0].submenu.push({
    option: "Produtos"
});
menuRelatorioOptions[0].submenu.sort((a, b) => a.option.localeCompare(b.option));

// Obtendo a referência do elemento de menu Relatório
const menuRelatorioElement = document.getElementById("menuRelatorio");

// Gerando o código HTML para as opções do menu Relatório
let menuRelatorioHTML = "";
menuRelatorioOptions.forEach(menuItem => {
    menuItem.submenu.forEach(submenuItem => {
        menuRelatorioHTML += `<li><a href="#">${submenuItem.option}</a></li>`;
    });
});

// Inserindo o código HTML gerado no elemento de menu Relatório
menuRelatorioElement.innerHTML = menuRelatorioHTML;
</script>