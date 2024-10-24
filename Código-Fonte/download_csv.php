<?php
// Função para preparar e permitir o download do arquivo CSV
function gerarCsv() {
    $arquivo = 'dados.csv';
    
    if (!file_exists($arquivo)) {
        echo "Arquivo de dados não encontrado!";
        exit();
    }

    // Configurações para download do CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="dados.csv"');
    readfile($arquivo);
    exit();
}

// Verifica se o parâmetro 'download' foi passado na URL
if (isset($_GET['download']) && $_GET['download'] == 'csv') {
    gerarCsv();
}
?>
