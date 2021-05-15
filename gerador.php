<!DOCTYPE html>
<html>

<head>
    <title> Currículo Profissional </title>
    <link rel="icon" href="images/curriculo.png">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            font-size: 18px;
            font-family: 'Arial';
            padding: 0px 5%;
        }

        .nome span {
            font-size: 24px;
            font-weight: bold;
        }

        .nome {
            padding-bottom: 15px;
        }

        .dados-p {
            display: flex;
            flex-direction: column;
            padding-bottom: 28px;
        }

        .title-obj {
            font-weight: bold;
        }

        .objetivo {
            padding-bottom: 28px;
        }

        .formacao span {
            font-weight: bold;
        }

        .formacao {
            padding-bottom: 28px;

        }

        .experiencia span {
            font-weight: bold;
        }

        .experiencia {
            padding-bottom: 28px;

        }

        .title-quali {
            font-weight: bold;
        }

        .qualificacoes {
            padding-bottom: 28px;
        }

        .titleadd {
            font-weight: bold;
        }

    </style>
</head>

<body>
    <?php 
    if(!isset($_POST)){
        die('Erro no envio');
    }
    $nome = $_POST['nome'];
    $nacionalidade = $_POST['nacionalidade'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereço = $_POST['endereço'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $objetivo = $_POST['objetivo'];
    $informacoesadicionais = $_POST['informacoesadicionais'];

?>

    <div class="container">
        <div class="nome">
            <span> <?php print $nome?> </span>
        </div>
        <div class="dados-p">
            <span> <?php print $nacionalidade ?> </span>
            <span> <?php print $endereço ?> </span>
            <span> <?php print $cidade . " - " . $estado ?> </span>
            <span> <?php print "Telefone: " . $telefone1 . " / " . $telefone2 ?> </span>
            <span> <?php print "Email: " . $email ?> </span>
        </div>
        <div class="objetivo">
            <span class="title-obj"> Objetivo </span>
            <hr/>
            <span> <?php print $_POST['objetivo'] ?> </span>
        </div>
        <div class="formacao">
            <span> Formação Acadêmica </span>
            <hr/>
            <div>
            <?php
            print "<ul>"; 
            for ($i=0; $i < count($_POST['curso']); $i++){ 
                print "<li>" . $_POST['curso'][$i] . ". " . $_POST['Instituicao'][$i] . ", " . $_POST['anodeconclusao'][$i] . "em" . $_POST['ano'][$i];
            }
            print "</ul>"; 
            ?> </div>
        </div>
        <div class="experiencia">
            <span> Experiência Profissional </span>
            <hr/>
            <div>
            <?php 
            print "<ul>"; 
            for ($i=0; $i < count($_POST['empresa']); $i++){ 
                print "<li>" . $_POST['empresa'][$i] . " - " . $_POST['Instituicao'][$i] . ", " . $_POST['anoentrada'][$i] . " - " . $_POST['anosaida'][$i] . " | " . $_POST['cargo'][$i] . " - " . $_POST['atividades'][$i];
            }
            print "</ul>"; 
            ?></div>
        </div>
        <div class="qualificacoes">
            <span class="title-quali"> Qualificações </span>
            <hr/>
            <?php for ($i=0; $i < count($_POST['qualificacoes']); $i++){ 
            print "<span>" . $_POST['qualificacoes'][$i] . "</span>"; } ?>
        </div>
        <div class="informacoesadd">
            <span class="titleadd"> Informações Adicionais </span>
            <hr/>
            <span><?php print $_POST['informacoesadicionais'] ?></span>
        </div>
    </div>

    


</body>

</html>