<?php

    $nomeUsuario = $_POST['nome'];
    $senhaUsuario = $_POST['senha'];

    if ($nomeUsuario == "ifpr" && $senhaUsuario == "tds") 
    {
        print "<h2>Bem-vindo ao TDS!</h2>";
    }else
    {
        print "<h2>Você não é bem-vindo ao TDS</h2>";
    }
    
    if($_POST['nome'] == "" || $_POST['senha'] == "" || $_POST['nome'] != "ifpr" || $_POST['senha'] != "tds")
    {
?>
<h2>Login</h2>
<form method="POST" action="form.php">
    <div class="login">
        <input type="text" placeholder="Insira o nome de usuário: " name="nome">
        <br><br>
        <input type="password" placeholder="Insira a senha: " name="senha">
        <br><br>
        <button type="submit">Enviar</button>
    </div>
</form> 
<?php
}
?>
