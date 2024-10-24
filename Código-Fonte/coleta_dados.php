<?php
// Função para coletar dados e armazená-los em um arquivo CSV
function coletarDados($nome, $idade, $genero) {
    // Verifica se o arquivo CSV existe, caso contrário, cria-o
    $arquivo = 'dados.csv';
    $existe = file_exists($arquivo);
    $arquivoCsv = fopen($arquivo, 'a');

    // Se o arquivo não existe, cria a linha de cabeçalho
    if (!$existe) {
        fputcsv($arquivoCsv, ['Nome', 'Idade', 'Gênero']);
    }

    // Adiciona os dados ao arquivo CSV
    fputcsv($arquivoCsv, [$nome, $idade, $genero]);
    fclose($arquivoCsv);
}

// Coletando dados do formulário via método POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? 'Desconhecido';
    $idade = $_POST['idade'] ?? '0';
    $genero = $_POST['genero'] ?? 'Não Informado';

    // Chama a função para salvar os dados
    coletarDados($nome, $idade, $genero);
    
    // Redireciona para a página principal após coletar os dados
    header('Location: index.php');
    exit();
}
?>
