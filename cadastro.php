<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $nascimento = $_POST['nascimento'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];

        $result = mysqli_query($conexao, "INSERT INTO users(cpf, nome, senha, email, telefone, sexo, nascimento, cep, cidade, estado, bairro, rua, numero, complemento) VALUES ('$cpf','$nome','$senha','$email','$telefone','$sexo','$nascimento', '$cep', '$cidade', '$estado', '$bairro', '$rua', '$numero', '$complemento')");
        
        header('Location: login.php');
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylecadastro.css">
    <title>Cadastro</title>
</head>
<body>
<div class="saida">
        <div class="sair">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
            </a>
        </div>
    </div>
 <div class="box">
    <form action="cadastro.php" method="POST">
         <div class="container">
            <div class="dividir">
            <div id="parte">
            <h1>Cadastro</h1>
            <legend>Doador Recifacil</legend>
            <br>
            <br>
            <div class="lado">
            <div class="input">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelinput">Nome Completo</label>
            </div>
            <br>
            <br>
            <p>Seu Sexo:</p>
            <br>
            <input type="radio" id="feminino" name="sexo" value="feminino" required>
            <label for="feminino">Feminino</label></p>
               
          <p><input type="radio" id="masculino" name="sexo" value="masculino" required>
            <label for="masculino">Masculino</label></p>

          <p><input type="radio" id="outro" name="sexo" value="outro" required>
            <label for="outro">Outro</label></p>

          <p><input type="radio" id="pfnd" name="sexo" value="pfnd" required>
            <label for="pfnd">Prefiro n??o dizer</label></p>
            <br>
            <div class="input">
                <input type="number" name="cpf" id="cpf" class="inputUser" required>
                <label for="cpf" class="labelinput">CPF</label>
            </div>
            <br>
            <br>
            
            <div class="input">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelinput">Email</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelinput">Senha</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="password" name="confirmarsenha" id="confirmarsenha" class="inputUser" required>
                <label for="senha" class="labelinput">Confirmar Senha</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelinput">Telefone</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="date" name="nascimento" id="nascimento" class="inputUser" required>
                <label for="nascimento" class="labeldata">Data de Nascimento</label>
            </div>
            </div>
            <br>
            </div>

            <div id="content">
            <div class="input">
                <input type="number" name="cep" id="cep" class="inputUser" required>
                <label for="cep" class="labelinput">CEP</label>
            </div>
            <br>
            <br>
            
            <div class="input">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelinput">Estado</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelinput">Cidade</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="text" name="bairro" id="bairro" class="inputUser" required>
                <label for="bairro" class="labelinput">Bairro</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="text" name="rua" id="rua" class="inputUser" required>
                <label for="rua" class="labelinput">Rua</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="text" name="numero" id="numero" class="inputUser" required>
                <label for="Numero" class="labelinput">N??mero</label>
            </div>
            <br>
            <br>
            <div class="input">
                <input type="text" name="complemento" id="complemento" class="inputUser" required>
                <label for="rua" class="labelinput">Complemento</label>
            </div>
            <br>
            <br>
            <input type="submit" name="submit" id="submit"> 
            <br>
            </div>
            </div>
            <div class="termos">
            <input type="radio" name="radio" id="radio" required>
            <a href="#" id="concordo">Concordo com os termos de servi??o</a>
            </div>
        </div>
 </div>
 <div class="dialog">
     <dialog>
        <h2>Pol??tica Privacidade</h2> 
        <p>A sua privacidade ?? importante para n??s. ?? pol??tica do Recif??cil respeitar a sua privacidade em rela????o a qualquer informa????o sua que possamos coletar no site <a href=https://github.com/felipeflorianof/RecifacilProject>Recif??cil</a>, e outros sites que possu??mos e operamos.</p> <p>Solicitamos informa????es pessoais apenas quando realmente precisamos delas para lhe fornecer um servi??o. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Tamb??m informamos por que estamos coletando e como ser?? usado. </p> <p>Apenas retemos as informa????es coletadas pelo tempo necess??rio para fornecer o servi??o solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceit??veis ??????para evitar perdas e roubos, bem como acesso, divulga????o, c??pia, uso ou modifica????o n??o autorizados.</p> <p>N??o compartilhamos informa????es de identifica????o pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p> <p>O nosso site pode ter links para sites externos que n??o s??o operados por n??s. Esteja ciente de que n??o temos controle sobre o conte??do e pr??ticas desses sites e n??o podemos aceitar responsabilidade por suas respectivas <a href='https://privacidade.me/' target='_BLANK'>pol??ticas de privacidade</a>. </p> <p>Voc?? ?? livre para recusar a nossa solicita????o de informa????es pessoais, entendendo que talvez n??o possamos fornecer alguns dos servi??os desejados.</p> <p>O uso continuado de nosso site ser?? considerado como aceita????o de nossas pr??ticas em torno de privacidade e informa????es pessoais. Se voc?? tiver alguma d??vida sobre como lidamos com dados do usu??rio e informa????es pessoais, entre em contato conosco.</p> <h2>Pol??tica de Cookies Recif??cil</h2> <h3>O que s??o cookies?</h3> <p>Como ?? pr??tica comum em quase todos os sites profissionais, este site usa cookies, que s??o pequenos arquivos baixados no seu computador, para melhorar sua experi??ncia. Esta p??gina descreve quais informa????es eles coletam, como as usamos e por que ??s vezes precisamos armazenar esses cookies. Tamb??m compartilharemos como voc?? pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p> <h3>Como usamos os cookies?</h3> <p>Utilizamos cookies por v??rios motivos, detalhados abaixo. Infelizmente, na maioria dos casos, n??o existem op????es padr??o do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. ?? recomend??vel que voc?? deixe todos os cookies se n??o tiver certeza se precisa ou n??o deles, caso sejam usados ??????para fornecer um servi??o que voc?? usa.</p> <h3>Desativar cookies</h3> <p>Voc?? pode impedir a configura????o de cookies ajustando as configura????es do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativa????o de cookies afetar?? a funcionalidade deste e de muitos outros sites que voc?? visita. A desativa????o de cookies geralmente resultar?? na desativa????o de determinadas funcionalidades e recursos deste site. Portanto, ?? recomend??vel que voc?? n??o desative os cookies.</p> <h3>Cookies que definimos</h3> <ul> <li> Cookies relacionados ?? conta<br><br> Se voc?? criar uma conta conosco, usaremos cookies para o gerenciamento do processo de inscri????o e administra????o geral. Esses cookies geralmente ser??o exclu??dos quando voc?? sair do sistema, por??m, em alguns casos, eles poder??o permanecer posteriormente para lembrar as prefer??ncias do seu site ao sair.<br><br> </li> <li> Cookies relacionados ao login<br><br> Utilizamos cookies quando voc?? est?? logado, para que possamos lembrar dessa a????o. Isso evita que voc?? precise fazer login sempre que visitar uma nova p??gina. Esses cookies s??o normalmente removidos ou limpos quando voc?? efetua logout para garantir que voc?? possa acessar apenas a recursos e ??reas restritas ao efetuar login.<br><br> </li> <li> Cookies relacionados a boletins por e-mail<br><br> Este site oferece servi??os de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ??????para lembrar se voc?? j?? est?? registrado e se deve mostrar determinadas notifica????es v??lidas apenas para usu??rios inscritos / n??o inscritos.<br><br> </li> <li> Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de com??rcio eletr??nico ou pagamento e alguns cookies s??o essenciais para garantir que seu pedido seja lembrado entre as p??ginas, para que possamos process??-lo adequadamente.<br><br> </li> <li> Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e question??rios para fornecer informa????es interessantes, ferramentas ??teis ou para entender nossa base de usu??rios com mais precis??o. Essas pesquisas podem usar cookies para lembrar quem j?? participou numa pesquisa ou para fornecer resultados precisos ap??s a altera????o das p??ginas.<br><br> </li> <li> Cookies relacionados a formul??rios<br><br> Quando voc?? envia dados por meio de um formul??rio como os encontrados nas p??ginas de contacto ou nos formul??rios de coment??rios, os cookies podem ser configurados para lembrar os detalhes do usu??rio para correspond??ncia futura.<br><br> </li> <li> Cookies de prefer??ncias do site<br><br> Para proporcionar uma ??tima experi??ncia neste site, fornecemos a funcionalidade para definir suas prefer??ncias de como esse site ?? executado quando voc?? o usa. Para lembrar suas prefer??ncias, precisamos definir cookies para que essas informa????es possam ser chamadas sempre que voc?? interagir com uma p??gina for afetada por suas prefer??ncias.<br> </li> </ul> <h3>Cookies de Terceiros</h3> <p>Em alguns casos especiais, tamb??m usamos cookies fornecidos por terceiros confi??veis. A se????o a seguir detalha quais cookies de terceiros voc?? pode encontrar atrav??s deste site.</p> <ul> <li> Este site usa o Google Analytics, que ?? uma das solu????es de an??lise mais difundidas e confi??veis ??????da Web, para nos ajudar a entender como voc?? usa o site e como podemos melhorar sua experi??ncia. Esses cookies podem rastrear itens como quanto tempo voc?? gasta no site e as p??ginas visitadas, para que possamos continuar produzindo conte??do atraente. </li> </ul> <p>Para mais informa????es sobre cookies do Google Analytics, consulte a p??gina oficial do Google Analytics.</p> <ul> <li> As an??lises de terceiros s??o usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conte??do atrativo. Esses cookies podem rastrear itens como o tempo que voc?? passa no site ou as p??ginas visitadas, o que nos ajuda a entender como podemos melhorar o site para voc??.</li> <li> Periodicamente, testamos novos recursos e fazemos altera????es subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ??????para garantir que voc?? receba uma experi??ncia consistente enquanto estiver no site, enquanto entendemos quais otimiza????es os nossos usu??rios mais apreciam.</li> <li> ?? medida que vendemos produtos, ?? importante entendermos as estat??sticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse ?? o tipo de dados que esses cookies rastrear??o. Isso ?? importante para voc??, pois significa que podemos fazer previs??es de neg??cios com precis??o que nos permitem analizar nossos custos de publicidade e produtos para garantir o melhor pre??o poss??vel.</li> </ul> <h3>Compromisso do Usu??rio</h3> <p>O usu??rio se compromete a fazer uso adequado dos conte??dos e da informa????o que o Recif??cil oferece no site e com car??ter enunciativo, mas n??o limitativo:</p> <ul> <li>A) N??o se envolver em atividades que sejam ilegais ou contr??rias ?? boa f?? a ?? ordem p??blica;</li> <li>B) N??o difundir propaganda ou conte??do de natureza racista, xenof??bica, ou casas de apostas, jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li> <li>C) N??o causar danos aos sistemas f??sicos (hardwares) e l??gicos (softwares) do Recif??cil, de seus fornecedores ou terceiros, para introduzir ou disseminar v??rus inform??ticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li> </ul> <h3>Mais informa????es</h3> <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que voc?? n??o tem certeza se precisa ou n??o, geralmente ?? mais seguro deixar os cookies ativados, caso interaja com um dos recursos que voc?? usa em nosso site.</p> <p>Esta pol??tica ?? efetiva a partir de <strong>Dec</strong>/<strong>2022</strong>.
        
       
        </p>
        <div class="divMid">
        <button class="btn">Voltar</button>
        </div>
     </dialog>
 </div>
     <script src="/recifacil/JS/scriptcadastro.js"></script>
</body>
</html> 