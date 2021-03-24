function eventoDoMenu(){

    let icone = document.querySelector("#icone")
    let menu = document.querySelector("#menu")
    let documento = document.querySelector("#documento")
    let cadastrar = document.querySelector("#cadastrar")
    let visualizar = document.querySelector("#visualizar")
    let menuOn = false
    menu.style.transition = "all .4s"

    function fechaMenu(){
        menu.style.marginLeft = "-50%"
        menuOn = false
    }

    function abreMenu(){
        menu.style.marginLeft = "0"
        menu.style.transition = "all .4s"
        menuOn = true
    }

    icone.addEventListener('click', () => {
        if(menuOn == false){
            abreMenu()
        } else {
            fechaMenu()
        }
    })

    cadastrar.addEventListener('click', () => {
        if(menuOn == false){
            abreMenu()
        } else {
            fechaMenu()
        }
    })

    visualizar.addEventListener('click', () => {
        if(menuOn == false){
            abreMenu()
        } else {
            fechaMenu()
        }
    })

    documento.addEventListener('click', () => {
        if(menuOn == true){
            fechaMenu()
        }
    })
}

function interacaoTelaWindow(){
    let update = document.querySelector("#box-user-update")
    let view = document.querySelector("#box-user-view")
    let spacer = document.querySelector("#spacer")
    let create = document.querySelector("#box-user-create")
    let cadastrar = document.querySelector("#cadastrar")
    let visualizar = document.querySelector("#visualizar")
    let btnSalvarEdicao = document.querySelector("#btn-save-edit")
    let btnCalcelarEdicao = document.querySelector(".btn-cancel")

    spacer.style.display = "none"
    create.style.display = "none"

    function blockView(){
        spacer.style.display = "block"
        create.style.display = "block"
        update.style.display = "none"
        view.style.display = "none"
    }

    function showView(){
        spacer.style.display = "none"
        update.style.display = "none"
        view.style.display = "block"
    }

    cadastrar.addEventListener('click', () => {
        blockView()
    })

    visualizar.addEventListener('click', () => {
        spacer.style.display = "none"
        create.style.display = "none"
        update.style.display = "none"
        view.style.display = "block"
    })

    btnSalvarEdicao.addEventListener('click', () => {
        showView()
    })

    btnCalcelarEdicao.addEventListener('click', () => {
        showView()
    })
}

function interacaoTela(){
    let update = document.querySelector("#box-user-update")
    let view = document.querySelector("#box-user-view")
    let spacer = document.querySelector("#spacer")
    spacer.style.display = "block"
    update.style.display = "block"
    view.style.display = "none"
}



// Declacações dos métodos
eventoDoMenu()
interacaoTelaWindow()