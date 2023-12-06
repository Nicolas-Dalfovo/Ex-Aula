function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === 'usuário' && password === 'senha') {
        localStorage.setItem('loggedInUser', username);
        window.location.href = 'Cadastro_html.html';
    } else {
        alert('Falha no login');
    }
}
