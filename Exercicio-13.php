<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Pessoa {
    private $nome;
    private $idade;
    private $email;

    public function __construct($nome, $idade, $email) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Método para obter a representação JSON da pessoa
    public function toJson() {
        $data = [
            'nome' => $this->getNome(),
            'idade' => $this->getIdade(),
            'email' => $this->getEmail(),
        ];
        return json_encode($data);
    }
}

// Criar instâncias da classe Pessoa para membros da família
$familyMembers = [
    new Pessoa("Pai", 50, "pai@email.com"),
    new Pessoa("Mãe", 45, "mae@email.com"),
    new Pessoa("Irmão1", 25, "irmao1@email.com"),
    new Pessoa("Irmão2", 22, "irmao2@email.com"),
];

// Exibir a representação JSON de cada pessoa
foreach ($familyMembers as $person) {
    echo $person->toJson() . "\n";
}
?>
</body>
</html>