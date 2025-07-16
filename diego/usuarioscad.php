<style>
     a{
        text-decoration: none;
        color: white;
        font-size: 20px;
        transition: 2s;
        cursor: pointer;
        margin-left: 200px;

     }

     a:hover{
        color: red;
        transition: 2s;
        cursor: pointer;
        font-size: 30px;
     }

     body{
        background-color: black;
     }
</style>
<body> 
<h2>Usuários Cadastrados</h2>
  <a href="formpy.php">   <ul>
        
        <?php
        $db = new PDO('sqlite:pessoas.db');
        $stmt = $db->query("SELECT * FROM usuarios");
        while ($usuario = $stmt->fetchObject()): ?>
            <li>
                <?= htmlspecialchars($usuario->nome) ?> |
                <?= htmlspecialchars($usuario->idade) ?> anos |
                <?= htmlspecialchars($usuario->telefone) ?>
            </li>
        <?php endwhile; ?>
    </ul>

  </a>

</body>