// script.js
var clientes = [
        { codigo: 1, nome: 'Nicolas', sobrenome: 'Dalfovo', dataNascimento: '2002-09-15', email: 'Nicolas@email.com' },
        { codigo: 2, nome: 'Michele', sobrenome: 'Dalfovo', dataNascimento: '1975-05-30', email: 'Michele@email.com' },
        { codigo: 3, nome: 'Ricardo', sobrenome: 'Dalfovo', dataNascimento: '1972-07-26', email: 'Ricardo@email.com' },
];

atualizarListaClientes();

function cadastrarCliente() {
    var codigo = document.getElementById('codigo').value;
    var nome = document.getElementById('nome').value;
    var sobrenome = document.getElementById('sobrenome').value;
    var dataNascimento = document.getElementById('dataNascimento').value;
    var email = document.getElementById('email').value;

    var novoCliente = {
        codigo: codigo,
        nome: nome,
        sobrenome: sobrenome,
        dataNascimento: dataNascimento,
        email: email
    };

    clientes.push(novoCliente);

    limparFormulario();
    atualizarListaClientes();
}

function limparFormulario() {
    document.getElementById('codigo').value = '';
    document.getElementById('nome').value = '';
    document.getElementById('sobrenome').value = '';
    document.getElementById('dataNascimento').value = '';
    document.getElementById('email').value = '';
}



function atualizarListaClientes() {
    var tabelaClientes = document.getElementById('tabelaClientes');
    tabelaClientes.innerHTML = '<tr><th>Código</th><th>Nome</th><th>Sobrenome</th><th>Data de Nascimento</th><th>Endereço de E-mail</th></tr>';

    clientes.forEach(cliente => {
        tabelaClientes.innerHTML += `<tr><td>${cliente.codigo}</td><td>${cliente.nome}</td><td>${cliente.sobrenome}</td><td>${cliente.dataNascimento}</td><td>${cliente.email}</td></tr>`;
    });
}

function filtrarClientes() {
    var filtro = document.getElementById('filtro').value.toLowerCase();
    var tabelaClientes = document.getElementById('tabelaClientes');
    tabelaClientes.innerHTML = '<tr><th>Código</th><th>Nome</th><th>Sobrenome</th><th>Data de Nascimento</th><th>Endereço de E-mail</th></tr>';

    clientes.filter(cliente => cliente.nome.toLowerCase().includes(filtro)).forEach(cliente => {
        tabelaClientes.innerHTML += `<tr><td>${cliente.codigo}</td><td>${cliente.nome}</td><td>${cliente.sobrenome}</td><td>${cliente.dataNascimento}</td><td>${cliente.email}</td></tr>`;
    });
}
