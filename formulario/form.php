<?php 

    if(isset($_POST['submit'])){
    //    print_r('Nome: '$_POST['nome']);
    //    print_r('<br>');
    //    print_r('Email: '$_POST['email']);
    //    print_r('<br>');
    //    print_r('Telefone: '$_POST['telefone']);
    //    print_r('<br>');
    //    print_r('Sexo: '$_POST['genero']);
    //    print_r('<br>');
    //    print_r('Data de nascimento: '$_POST['data_nascimento']);
    //    print_r('<br>');
    //    print_r('Cidade: '$_POST['cidade']);
    //    print_r('<br>');
    //    print_r('Estado: '$_POST['estado']);
    //    print_r('<br>');
    //    print_r('Endereço: '$_POST['endereco']);
    //    print_r('<br>'); PARA VER SE TAVA CHEGANDO INFORMAÇÃO

    include_once('config.php')
     
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];
    }

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco)
                                     VALUES('$nome' ,'$email' ,'$telefone' ,'$sexo', '$data_nasc', '$cidade', '$estado', '$endereco' ) ")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(250, 10, 10), rgb(80, 6, 6));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 25%;
        }
        fieldset{border: 3px solid firebrick;}
        legend{
            border: 1px solid firebrick;
            padding: 10px;
            text-align: center;
            background-color: firebrick;
            border-radius: 8px;
            
        }
        .inputbox{
            position: relative;
        }
        .inputuser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px ;
            width: 100% ;
            letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: 3s;
        }
        .inputuser:focus~.labelinput,
        .inputuser:valid~.labelinput{
            top: -20px;
            font-size: 12px;
            color: firebrick;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, rgb(163, 7, 7), rgb(32, 1, 1));
            width: 100%;
            padding: 15px;
            border: none;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image:  linear-gradient(to right, rgb(250, 10, 10), rgb(80, 6, 6));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="form.php" method="POST">
          <fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br>
            <div class="inputbox">
                 <input type="text" name="nome" id="nome" class="inputuser" required>
              <label for="nome" class="labelinput">Nome completo</label>
            </div>
            <br><br>
            <div class="inputbox">
                 <input type="email" name="email" id="email" class="inputuser" required>
              <label for="email" class="labelinput">Email</label>
            </div>
            <br><br>
            <div class="inputbox">
                 <input type="tel" name="telefone" id="telefone" class="inputuser" required>
              <label for="telefone" class="labelinput">Telefone</label>
            <br>
            </div>
            <p>Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
        
          <label for="data_nascimento"><b>Data de Nascimento:</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="data_nascimento" required>
          <br><br>
          <div class="inputbox">
            <input type="text" name="cidade" id="cidade" class="inputuser" required>
            <label for="cidade" class="labelinput">Cidade</label>
       </div>
       <br><br>
        <div class="inputbox">
            <input type="text" name="estado" id="estado" class="inputuser" required>
            <label for="estado" class="labelinput">Estado</label>
        </div>
        <br><br>
        <div class="inputbox">
            <input type="text" name="endereco" id="endereco" class="inputuser" required>
            <label for="endereco" class="labelinput">Endereço</label>
        </div>
        <br><br>    
        <input type="submit" nome="submit" id="submit">
          </fieldset>
        </form>
      </div>
</body>
</html>