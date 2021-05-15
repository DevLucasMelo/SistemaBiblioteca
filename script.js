function validarUsuario(){
    var end = document.querySelector('#endereco');
    var nome = document.querySelector('#nome');
    var cpf = document.querySelector('#cpf');
    var rg = document.querySelector('#rg');
    var email = document.querySelector('#email');
    var telef = document.querySelector('#telefone');
    var login = document.querySelector('#login');
    var senha = document.querySelector('#senha');
    var restr = document.querySelector('#restricao');
    var tpusuario = document.querySelector('#tipoUsuario');
    var nEscolhido = document.querySelector('#naoEscolhido');

    //login = login.value.replace(/( )/ig,"");
    //cpf = cpf.value.replace(/( )/ig,"");

    //nome,split(" ").filter(value => value != "").join(" ");
    if (end.value == ""){
        alert('Preencha o campo de endereço!');
        end.focus();
        return false;
    }else if (nome.value == "" || nome.value.length < 6) {
        alert('Preencha o nome completo!');
        nome.focus();
        return false;
    }else if (cpf == "" || cpf.value.length < 11) {
        alert('Preencha o campo do cpf!');
        cpf.focus();
        return false;
    }else if (rg.value == "" || rg.value.length < 8) {
        alert('Preencha o campo do rg!');
        rg.focus();
        return false;
    }else if (email.value == "" || email.value.indexOf("@") == -1 || email.value.indexOf(".") ==-1) {
        alert('Preencha o campo do email corretamente!');
        email.focus();
        return false;
    }else if (telef.value == "" || telef.value.length<11) {
        alert('Preencha o campo do Telefone Celular!');
        telef.focus();
        return false;
    }else if (login == "") {
        alert('Preencha o campo do login!');
        //alert(login);
        //login.focus();
        return false;
    }else if (senha.value == "" || senha.value.length<7) {
        alert('Preencha o campo da senha!');
        senha.focus();
        return false;
    }else if (restr.value == "") {
        alert('Preencha o campo da restrição!');
        restr.focus();
        return false;
    }else if (tpusuario.value == nEscolhido.value ) {
        alert('Escolha um tipo de usuário!');
        tpusuario.focus();
        return false;
    }else {
        alert('Todos os campos preenchidos!')
        return true;
    }
}

function validarEndereco() {
    var cep = document.querySelector('#cep');
    var rua = document.querySelector('#rua')
    var numero = document.querySelector('#numero');
    var bairro = document.querySelector('#bairro');
    var cidade = document.querySelector('#cidade');
    var estado = document.querySelector('#estado');
    var naoEscolhido = document.querySelector('#naoEscolhido');
    var naoEscolhe = document.querySelector('#naoEscolhe');

    if (cep.value == "" || cep.value.length < 8) {
        alert ('Preencha o campo cep');
        cep.focus();
        return false;
    }else if (rua.value == "") {
        alert ('Preencha o campo rua');
        rua.focus();
        return false;
    }else if (numero.value == "") {
        alert ('Preencha o campo número');
        numero.focus();
        return false;
    }else if (bairro.value == "") {
        alert ('Preencha o campo bairro');
        bairro.focus();
        return false;
    }else if (cidade.value == naoEscolhido.value) {
        alert ('Preencha o campo cidade');
        cidade.focus();
        return false;
    }else if (estado.value == naoEscolhe.value) {
        alert ('Preencha o campo estado');
        estado.focus();
        return false;
    }else {
        alert ('Todos os campos preenchidos')
        return true;
    }
}

function validarAdministrador() {
    var usuario = document.querySelector('#usuario');

    if (usuario.value == "" || usuario.value.length < 3 ){
        alert ('Preencha o campo usuário');
        usuario.focus();
        return false;
    }else {
        alert ('Todos os campos preenchidos');
        return true;
    }
}

function validarEmprestimo() {
    var exemplar = document.querySelector('#exemplar');
    var usuario = document.querySelector('#usuario');
    var emprestimo = document.querySelector('#emprestimo');
    var devolucao = document.querySelector('#devolucao');
    var efetiva = document.querySelector('#efetiva');
    var estadoLivro = document.querySelector('#estadoLivro');
    var naoEscolhido = document.querySelector('#naoEscolhido');

    if (exemplar.value == "") {
        alert('Preencha o campo exemplar');
        exemplar.focus();
        return false;
    }else if (usuario.value == "" || usuario.length < 3) {
        alert('Preencha o campo usuario');
        usuario.focus();
        return false;
    }else if (emprestimo.value == "" ) {
        alert ('Preencha o campo Data do empréstimo');
        emprestimo.focus();
        return false;
    }else if (devolucao.value == "") {
        alert('Preencha o campo Data da devolução');
        devolucao.focus();
        return false;
    }else if (efetiva.value == "") {
        alert('Preencha o campo Data de devolução efetiva');
        efetiva.focus();
        return false;
    }else if (estadoLivro.value == naoEscolhido.value) {
        alert('Escolha um estado do livro');
        estadoLivro.focus();
        return false; 
    }else {
        alert('Todos os campos preenchidos');
        return true;
    }
}
function validarEditora() {
    var editora = document.querySelector('#editora');
    var endereco = document.querySelector('#endereco');

    if (editora.value == "") {
        alert('Preencha o campo editora');
        editora.focus();
        return false;
    }else if (endereco.value == "") {
        alert ('Preencha o campo endereço');
        endereco.focus();
        return false;
    }else {
        alert('Todos os campos preenchidos')
        return true;
    }
}
function validarExemplar() {
    var tombo = document.querySelector('#tombo');
    var codigoLivro = document.querySelector('#codigoLivro');
    var localizacao = document.querySelector('#localizacao');
    var status = document.querySelector('#status');
    var naoEscolhido = document.querySelector('#naoEscolhido');

    if (tombo.value == "") {
        alert('Preencha o campo tombo');
        tombo.focus();
        return false;
    }else if (codigoLivro.value == "") {
        alert ('Preencha o campo código do livro');
        codigoLivro();
        return false;
    }else if (localizacao.value == "") {
        alert ('Preecha o campo da localização');
        localizacao.focus();
        return false;
    }else if (status.value == naoEscolhido.value) {
        alert ('Escolha um status');
        status.focus();
        return false;
    }else {
        alert('Todos os campos preenchidos');
        return true;
    }
}

function validarAutorLivro() {
    var autor = document.querySelector('#autor');
    var livro = document.querySelector('#livro');

    if (autor.value == "") {
        alert('Preencha o campo autor');
        autor.focus();
        return false;
    }else if (livro.value == "") {
        alert ('Preencha o campo livro');
        livro.focus();
        return false;
    }else {
        alert('Todos os campos preenchidos');
        return true;
    }
}

function validarLivro() {
    var editora = document.querySelector('#editora');
    var categoria = document.querySelector('#categoria');
    var titulo = document.querySelector('#titulo');
    var subtitulo = document.querySelector('#subtitulo');
    var idioma = document.querySelector('#idioma');
    var naoEscolhe = document.querySelector('#naoEscolhe');
    var naoEscolhido = document.querySelector('#naoEscolhido');

    if (editora.value == "") {
        alert('Preencha o campo da editora');
        editora.focus();
        return false;
    }else if (categoria.value == naoEscolhe.value) {
        alert ('Escolha uma categoria do livro');
        categoria.focus();
        return false;
    }else if (titulo.value == "") {
        alert ('Preecha o campo do título');
        titulo.focus();
        return false;
    }else if (subtitulo.value == "") {
        alert ('Preecha o campo do subtítulo');
        subtitulo.focus();
        return false;
    }else if (idioma.value == naoEscolhido.value) {
        alert ('Escolha um idioma');
        idioma.focus();
        return false;
    }else {
        alert('Todos os campos preenchidos');
        return true;
    }
}

function validarAutor() {
    var autor = document.querySelector('#autor');

    if (autor.value == "") {
        alert ('Preencha o campo do autor');
        autor.focus();
        return false;
    }else {
        alert ('Todos os campos preenchidos');
        return true;
    }

}

function validarCategoria() {
    var categoria = document.querySelector('#categoria');

    if (categoria.value == "") {
        alert ('Preencha o campo do categoria');
        categoria.focus();
        return false;
    }else {
        alert ('Todos os campos preenchidos');
        return true;
    }

}