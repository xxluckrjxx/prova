<html>
<head>
<title>PAGINA LOGIN</title>
</head>
<body>
<h1> Efetue o login</h1>
<form method="post" action="autenticar.php">
   <label>E-MAIL</label>
   <input type="text" name="email" size="20"/><br/>
   <label>Senha</label>
   <input type="password"  name="senha" size="20"/><br/>
   <input type="submit" value="Entrar"/>
 
 </form>

 <?php
    if(isset($_GET['err'])){

        if($_GET['err']==101){
            echo "Login Não Existente";

        }else if ($_GET['err']==102){
echo "Necessario Efetuar o Login";

        }

    }



?>



</body>

</html>