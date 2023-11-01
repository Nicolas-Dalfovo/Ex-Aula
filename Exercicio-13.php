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

    public function toJson() {
        $data = [
            'nome' => $this->getNome(),
            'idade' => $this->getIdade(),
            'email' => $this->getEmail(),
        ];
        return json_encode($data);
    }
}

$familyMembers = [
    new Pessoa("Nicolas", 21, "nicolas.dalfovo@unidavi.edu.br"),
    new Pessoa("Ricardo", 52, "ricardo.dalfovo@gmail.com.br"),
    new Pessoa("Michele", 48, "mdalfovo@yahoo.com.br"),
];

foreach ($familyMembers as $person) {
    echo $person->toJson() . "\n";
}
?>
</body>
</html>