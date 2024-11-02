<?php
require_once '../vendor/autoload.php';

$produtos = [
    [
        'nome' => 'Arroz Branco',
        'categoria' => 'Grãos',
        'preco' => 'R$20,00',
        'descricao' => 'Arroz branco tipo 1, ideal para acompanhar diversos pratos.',
    ],
    [
        'nome' => 'Feijão Preto',
        'categoria' => 'Grãos',
        'preco' => 'R$8,50',
        'descricao' => 'Feijão preto selecionado, rico em proteínas e fibras.',
    ],
    [
        'nome' => 'Açúcar Cristal',
        'categoria' => 'Doces',
        'preco' => 'R$4,50',
        'descricao' => 'Açúcar cristal, perfeito para adoçar suas receitas e bebidas.',
    ],
    [
        'nome' => 'Sal Refinado',
        'categoria' => 'Condimentos',
        'preco' => 'R$2,00',
        'descricao' => 'Sal refinado, essencial para o tempero dos alimentos.',
    ],
    [
        'nome' => 'Óleo de Soja',
        'categoria' => 'Óleos',
        'preco' => 'R$6,00',
        'descricao' => 'Óleo de soja, ideal para frituras e preparos culinários.',
    ],
    [
        'nome' => 'Macarrão Espaguete',
        'categoria' => 'Massas',
        'preco' => 'R$5,00',
        'descricao' => 'Macarrão espaguete, excelente para uma deliciosa massa ao molho.',
    ],
    [
        'nome' => 'Molho de Tomate',
        'categoria' => 'Conservas',
        'preco' => 'R$3,50',
        'descricao' => 'Molho de tomate pronto, prático e saboroso para suas receitas.',
    ],
    [
        'nome' => 'Café em Pó',
        'categoria' => 'Bebidas',
        'preco' => 'R$10,00',
        'descricao' => 'Café em pó torrado, ideal para um café fresco pela manhã.',
    ],
];


    
$mpdf = new \Mpdf\Mpdf();
 
$tabela='
<style>
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #000;
    padding: 8px;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}
tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
    <table border="1">;
    <thead>
        <tr>nome</tr>
        <tr>Categoria</tr>
        <tr>Preço</tr>
        <tr>Deescrição</tr>
    </thead>

'
;


foreach ($produtos as $produto) {
   
    $tabela.= '

        <tr>
            <td>'.$produto['nome'].'</td>
            <td>'.$produto['categoria'].'</td>
            <td>'.$produto['preco'].'</td>
            <td>'.$produto['descricao'].'</td>
        </tr>';

}
$tabela.= '</table>';

$mpdf->WriteHtml($tabela);

$mpdf->Output();



?>