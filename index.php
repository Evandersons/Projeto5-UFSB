<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimento de Licença para Capacitação</title>
    <?php
    require './conexao.php';
    ?>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
</head>

<body>
    <!-- Cabeçalho com título (com css de id "titulo") -->
    <div>
        <img src="http://localhost/formlicenca/imagens/logo.jpg" alt="Logo" width="120" height="140">
        <h1 id="titulo">UFSB Formulário de Requerimento de Licença para Capacitação</h1>
        <br>
    </div><br><br>

    <form method="post">
        <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
        <fieldset class="grupo">
            <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
            <div class="campo">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" name="nome" id="nome" placeholder="Nome completo" required><br><br>
            </div>
            <!-- Campo de siape -->
            <div class="campo">
                <label for="siape"><strong>SIAPE:</strong></label>
                <input type="text" name="siape" id="siape" placeholder="Digite seu SIAPE" required><br><br>
            </div>
            <!-- Campo de cargo -->
            <div class="campo">
                <label for="cargo"><strong>Cargo:</strong></label>
                <input type="text" name="cargo" id="cargo" placeholder="Digite seu cargo" required><br><br>
            </div>
            <!-- Campo de email -->
            <div class="campo">
                <label for="email"><strong>E-mail:</strong></label>
                <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required><br><br>
            </div>
            <!-- Campo de lotação/campus -->
            <div class="campo">
                <label for="campus"><strong>Lotação/Campus:</strong></label>
                <input type="text" name="campus" id="campus" placeholder="Digite seu campus" required><br><br>
            </div>
            <!-- Campo de unidade de exercício -->
            <div class="campo">
                <label for="exercicio"><strong>Unidade de Exercício:</strong></label>
                <input type="text" name="exercicio" id="exercicio" placeholder="Digite sua unidade" required><br><br>
            </div>
        </fieldset>

        <fieldset class="grupo">
            <!-- Campo de dias de licença -->
            <div class="campo">
                <label for="dias_lic"><strong>Dias de Licença para Capacitação:</strong></label>
                <input type="text" name="dias_lic" id="dias_lic" placeholder="" required><br><br>
            </div>
            <!-- Campo da data inicial do periodo aquisitivo -->
            <div class="campo">
                <label for="datainicial_a"><strong>Data inicial do período aquisitivo:</strong></label>
                <input type="date" name="datainicial_a" id="datainicial_a" placeholder="" required><br><br>
            </div>

            <!-- Campo da data final do periodo aquisitivo -->
            <div class="campo">
                <label for="datafinal_a"><strong>Data final do período aquisitivo:</strong></label>
                <input type="date" name="datafinal_a" id="datafinal_a" placeholder="" required><br><br>
            </div>
            <!-- Campo de local do evento -->
            <div class="campo">
                <label for="local_evento"><strong>Local do Evento:</strong></label>
                <input type="text" name="local_evento" id="local_evento" placeholder="Digite o local do evento"
                    required><br><br>
            </div>
            <!-- Campo de promotor do evento -->
            <div class="campo">
                <label for="promotor_evento"><strong>Promotor do Evento:</strong></label>
                <input type="text" name="promotor_evento" id="promotor_evento" placeholder="Digite o nome do promotor"
                    required><br><br>
            </div>
            <!-- Campo de modalidade -->
            <div class="campo">
                <label>Modalidade:</label><br>
                <label><input type="radio" name="modalidade" value="Presencial" required>Presencial</label>

                <label><input type="radio" name="modalidade" value="Remota" required>Remota</label><br>
            </div>
            <!-- Campo de carga horária total -->
            <div class="campo">
                <label for="horas"><strong>Carga horária total, conforme documentação em anexo:</strong></label>
                <input type="text" name="horas" id="horas" placeholder="" required><br><br>
            </div>
            <!-- Campo da data final do periodo aquisitivo -->
            <div class="campo">
                <p>Período para usufruto da licença (considerar prazo de 60 dias entre as parcelas):</p>
                <ul>
                    <label for="datainicial_p1">
                        <li>1° e/ou único período de: </li>
                    </label><input type="date" name="datainicial_p1" id="datainicial_p1" required><label
                        for="datafinal_p1"> a </label><input type="date" name="datafinal_p1" id="datafinal_p1"
                        required><br><br>

                    <label for="datainicial_p2">
                        <li>2° período, se houver, de: </li>
                    </label><input type="date" name="datainicial_p2" id="datainicial_p2"><label for="datafinal_p2"> a
                    </label><input type="date" name="datafinal_p2" id="datafinal_p2"><br><br>

                    <label for="datainicial_p3">
                        <li>3° período, se houver, de: </li>
                    </label><input type="date" name="datainicial_p3" id="datainicial_p3"><label for="datafinal_p3"> a
                    </label><input type="date" name="datafinal_p3" id="datafinal_p3"><br><br>

                    <label for="datainicial_p4">
                        <li>4° período, se houver, de: </li>
                    </label><input type="date" name="datainicial_p4" id="datainicial_p4"><label for="datafinal_p4"> a
                    </label><input type="date" name="datafinal_p4" id="datafinal_p4"><br><br>

                    <label for="datainicial_p5">
                        <li>5° período, se houver, de: </li>
                    </label><input type="date" name="datainicial_p5" id="datainicial_p5"><label for="datafinal_p5"> a
                    </label><input type="date" name="datafinal_p5" id="datafinal_p5"><br><br>

                    <label for="datainicial_p6">
                        <li>6° período, se houver, de: </li>
                    </label><input type="date" name="datainicial_p6" id="datainicial_p6"><label for="datafinal_p6"> a
                    </label><input type="date" name="datafinal_p6" id="datafinal_p6"><br><br>
                </ul>
                <p><strong>Obs: </strong>O servidor poderá pleitear os períodos seguintes neste formulário ou em momento
                    oportuno.</p><br>
            </div> 
            <!-- Campo de descrição de atividades -->
            <div class="campo">
                <label for="descri"><strong>Descrição das atividades desenvolvidas pelo servidor:</strong></label>
                <textarea id="descri" name="descri" rows="5" cols="40"></textarea>
            </div>
            <!-- Campo de justificativa -->
            <div class="campo">
                <label for="just"><strong>Justificativa quanto ao interesse da administração pública na ação, visando o
                        desenvolvimento do servidor:</strong></label>
                <textarea id="just" name="just" rows="5" cols="40"></textarea>
            </div>
            <p>Nestes termos, pede deferimento.</p>
            <!-- Campo da data final do periodo aquisitivo -->
            <div class="campo">
                <label for="local"><strong>Local:</strong></label>
                <input type="text" name="locall" id="local" required><br>

                <label for="data"><strong>Data:</strong></label>
                <input type="date" name="dataa" id="data" required><br><br>

                <button name="Enviar" class="botao">Enviar</button>

                <!--<h3 class="linha">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_____________________________________________
                </h3>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Assinatura do Servidor</h3>-->
            </div>
        </fieldset>

        <label><strong>Observação: </strong>Para que se viabilize o afastamento em tempo hábil, o interessado deverá dar
            entrada na solicitação com, no mínimo, 45 dias de antecedência do início da Licença.</label>

        <fieldset>
            <h3>Termo de Compromisso</h3>
            <label>Comprometo-me, ao término da licença, em no máximo 30 dias, apresentar documentação comprobatória de
                participação nas atividades de capacitação informadas neste Formulário. Estou ciente de que a concessão
                de nova licença para capacitação está condicionada à aprovação da documentação apresentada ao término
                desta Licença.</label>
        </fieldset>

        <fieldset>
            <!--Incluir orientação sobre a Manifestação da Chefia Imediata-->
            <h3>ORIENTAÇÕES GERAIS:</h3>
            <label>A documentação completa e atualizada deverá ser protocolada no Setor de Capacitação da Diretoria de
                Gestão de Pessoas, ou encaminhada para o e-mail capacitacao@ufsb.edu.br, atendendo ao prazo de 45 dias
                de antecedência ao início da licença.
                Além do formulário devidamente preenchido e assinado pelo servidor (com a ciência da chefia), anexar a
                este os seguintes documentos:
                1. Documentação comprobatória da participação em curso ou outra modalidade de capacitação (carga horária
                compatível com o período pelo qual pretende se afastar);
                2. Documentos relativos à solicitação de Afastamento do País, caso a ação de capacitação ocorra fora do
                território nacional.
            </label><br>

            <h3>IMPORTANTE SABER!</h3>
            <label>• As seguintes informações serão avaliadas pelo Setor de Capacitação/DGP para a concessão da licença:
                interesse da administração; compatibilidade da capacitação com as atribuições do cargo e área de atuação
                do servidor; comprovação de que atende ao requisito de 05 anos de efetivo exercício e que não usufruiu
                licença capacitação relativa ao quinquênio em questão; relatório de faltas e licenças relativas ao
                quinquênio; programação de férias; declaração de que não atende a processo administrativo.
                • São considerados para o cálculo dos quinquênios somente os períodos de efetivo exercício. Não são
                considerados como efetivo exercício os seguintes afastamentos: Licença para Tratamento de Saúde superior
                a 24 meses, Licença por Motivo de Doença em Pessoa da Família superior a 30 dias em 12 meses, Licença
                por Motivo de Afastamento de Cônjuge/Companheiro, Licença para Tratar de Interesses Particulares e
                Licença para Atividade Política. Ou seja, estes afastamentos interrompem a contagem dos quinquênios.
                • Os 90 dias de licença a que o servidor tem direito a usufruir após completar cada quinquênio não são
                cumuláveis e podem ser divididos em até 06 parcelas, desde que a menor parcela não seja inferior a 15
                dias; é obrigatório que haja interstício de 60 dias entre as parcelas.
                • O servidor deverá apresentar documentação comprobatória de participação nas atividades de capacitação
                solicitadas, em até 30 dias, após a finalização da licença. Caso tenha realizado Curso de capacitação
                presencial ou à distância, o servidor deverá encaminhar Certificado de Conclusão; nas demais modalidades
                de capacitação, deverá ser enviado Relatório de Atividades realizadas durante o período, devidamente
                assinado pelo orientador que acompanhou o servidor durante a Licença, ou Documento que comprove a
                conclusão do curso/atividade.
            </label>
        </fieldset>
    </form>

</body>

</html>