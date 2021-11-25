<?php
    
    if(isset($_GET["btnSalvar"]))
    {
        
        //Comentário
        #Comentário
        /*  Comentário em bloco */ 


        //$_GET permite resgatar um dado enviado pelo metodo GET

        $nome = $_GET["txtnome"];
        $uf = $_GET["sltUf"];
        $sexo = $_GET["rdoSexo"];



        //isset() - Verifica se o objeto ou variavel existe ou foi criado na programaçao (retorna verdadeiro ou falso)

        //Tratamento de erro para quando o checkbox não for selecionado
        if (isset ($_GET["chkJapones"]))
            {
             $idiomaJap = $_GET["chkJapones"];
            }else{
            $idiomaJap = null;
        }
       //Tratamento de erro para quando o checkbox não for selecionado
        if (isset ($_GET["chkIngles"]))
            {
             $idiomaIng = $_GET["chkIngles"];
            }else{
            $idiomaIng = null;
        }

        //Tratamento de erro para quando o checkbox não for selecionado
        if (isset ($_GET["chkPortugues"]))
            {
             $idiomaPort = $_GET["chkPortugues"];
            }else{
            $idiomaPort = null;
        }

        $senha = $_GET["txtSenha"];
        $obs = $_GET["txtObs"];


        echo("O nome digitado foi: <span class='destaque'>" . $nome . "</span>");
        echo("<br>O estado selecionado foi: " . $uf);
        echo("<br>O sexo selecionado foi: " . $sexo);
        echo("<br>Os idiomas selecionados foram: " . $idiomaPort . " " .$idiomaIng . " " . $idiomaJap);

        echo("<br>A senha digitada foi: " . $senha);
        echo("<br>A observção digitada foi: " . $obs);

    
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
            Aula de Formulários
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/style.css">
    </head>
    <body>
        <div id="formContatos">
            <h1>Formulário</h1>
            <form name="frmContatos" action="" method="get">
                <div>
               <label>
                   Nome:
                </label>
                   <input type="text" name="txtnome" size="50" maxlength="40" value="" placeholder="Insira seu nome">
                </div>
                <div>
                <label>
                    UF:
                </label>
                <select name="sltUf">
                <option value="">Selecionar</option>
                <option value="SP" selected>São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                </select>
            </div>
            <div>
            <label>Sexo</label>
                <input type="radio" name="rdoSexo" value="F" > Feminino
                <input type="radio" name="rdoSexo" value="M" checked>
                Masculino
            </div>
                <div>
                    <label>Idiomas: </label>
                    <input type="checkbox" name="chkPortugues" value="pt" checked>Português
                    <input type="checkbox" name="chkIngles" value="en">Inglês
                    <input type="checkbox" name="chkJapones" value="jp">Japonês
                </div>
                <div>
                    <label>Senha: </label>
                    <input type="password" name="txtSenha" size="20" maxlength="10" placeholder="Insira a Senha"> 
                </div>
                <div>
                    <label>Obs: </label>
                    <textarea name="txtObs" cols="50" rows="5"> </textarea>
                </div>
                <div>
                    <input type="submit" name="btnSalvar" value="Salvar">
                    <input type="reset" name="btnLimpar" value="Limpar">
                    <!-- 
                    button - será utilizado exclusivamenter com JavaScript
                    submit - será utilizado em conjunto com o form, para retirar os dados dos formulários
                    reset - permit limpar o formulário 
                    -->
                </div>
            </form>
        </div>
    </body>
</html>
 