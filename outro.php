 <style>
.fund{
             background-color: black;
        }

.bom{
            width: 500px;
            margin-left: 38%;
            
        }

        .aaa{
             color: white;
             font-size: 20px;
             text-decoration: none;
             transition: 2s;
            cursor: pointer;
             
        }

        .lk{
            margin-left: 38%;
            transition: 2s;
            cursor: pointer;
            
        }

        .aaa:hover{
            transition: 2s;
            cursor: pointer;
            font-size: 30px;
        }

        .lk:hover{
            color: blue;
            transition: 2s;
            cursor: pointer;
            font-size: 30px;
        }

</style>
 
 <?php
   // Conexão com SQLite
try {
    $db = new PDO('sqlite:pessoas.db');
} catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
}

// Inserção de dados (se vier POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $idade = $_POST['idade'] ?? '';
    $telefone = $_POST['telefone'] ?? '';

    if (!empty($nome) && !empty($idade) && !empty($telefone)) {
        $stmt = $db->prepare("INSERT INTO usuarios (nome, idade, telefone) VALUES (:nome, :idade, :telefone)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':idade', $idade);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->execute();

        echo "  <body class = 'fund'>

      <section class = 's200'>
           
      <img class = 'bom' src = 'laud.gif'>

     <a class = 'aaa' href = 'formpy.php'> <h1 class='lk'> Cadastrado com sucesso / voltar ao inicio </h1> </a>

     </section>

      </body>";

    }
}

$stmt = $db->query("SELECT * FROM usuarios");



?>









