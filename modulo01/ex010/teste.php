<pre>
    <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date(("m-d-Y"));

        //$testeData = date("Y-m-d", strtotime("-1 days"));

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        $dados = json_decode(file_get_contents($url), true);
    
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "a cotação foi de $cotacao\n";

        echo "$inicio\n";

        echo "$fim\n";

        //echo "data teste do BAGULHO $testeData";
    ?>
</pre>