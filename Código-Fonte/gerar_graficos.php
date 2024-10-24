<?php
// Nome do arquivo CSV
$arquivo = 'dados.csv';

// Verifica se o arquivo existe
if (!file_exists($arquivo)) {
    echo "Arquivo de dados não encontrado!";
    exit();
}

// Lê os dados do CSV
$dados = [];
if (($handle = fopen($arquivo, "r")) !== false) {
    // Pula o cabeçalho
    fgetcsv($handle, 1000, ",");
    
    // Lê cada linha de dados e adiciona ao array
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $dados[] = $data;
    }
    fclose($handle);
}

// Calcula a média para cada coluna
$colunas = count($dados[0]);
$totais = array_fill(0, $colunas, 0);
$contador = count($dados);

foreach ($dados as $linha) {
    for ($i = 1; $i < $colunas; $i++) { // Começa de 1 para evitar o campo "Nome"
        $totais[$i] += (int)$linha[$i];
    }
}

$medias = [];
for ($i = 1; $i < $colunas; $i++) {
    $medias[] = $totais[$i] / $contador;
}

// Inclui a biblioteca Chart.js no HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos de Respostas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="graficoMedia" width="400" height="200"></canvas>
    <script>
        var ctx = document.getElementById('graficoMedia').getContext('2d');
        var graficoMedia = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Idade', 'Gênero'], // Ajuste os rótulos conforme as colunas do CSV
                datasets: [{
                    label: 'Média das Respostas',
                    data: <?php echo json_encode($medias); ?>, // Inclui as médias calculadas
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
