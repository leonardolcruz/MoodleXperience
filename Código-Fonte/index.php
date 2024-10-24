<?php
// Incluir funções auxiliares para coleta de dados e download de CSV
include 'coleta_dados.php';
include 'download_csv.php';
 
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Moodle</title>";
echo "<style>.ativo { background-color: lightblue; }</style>";
<html lang="en">

<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moodle</title>
    <style>
        .ativo {
            background-color: lightblue;
        }
    </style>
	<style>
        .container {
            text-align: center;
            position: relative;
        }

        .icon {
            float: right;
            width: 30px; /* Defina o tamanho desejado */
            height: 30px; /* Defina o tamanho desejado */
            cursor: pointer;
            transition: transform 0.3s; /* Adiciona uma transição para a animação */
        }

        dialog-box {
            display: none;
            position: absolute;
            right: 60px; /* Ajuste a posição conforme necessário */
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1;
            animation: fadein 0.5s; /* Adiciona uma animação de fadein */
            font-size: 4px; /* Defina o tamanho da fonte */
            line-height: 1.0; /* Ajuste o espaçamento entre linhas */
            max-width: 200px; /* Defina a largura máxima do diálogo */
        }

        .icon:hover + .dialog-box {
            display: block;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
    <script>
        function selecionarRadio(elemento) {
            // Obtem todos os radios na mesma linha
            var radios = elemento.parentNode.parentNode.querySelectorAll('input[type=radio]');

            // Remove a classe 'ativo' de todos os radios na mesma linha
            radios.forEach(function(radio) {
                radio.classList.remove('ativo');
            });

            // Adiciona a classe 'ativo' ao radio selecionado
            elemento.classList.add('ativo');
        }
    </script>

	<p></div><br></br><br></br>
<div style="text-align: center;"><img src="https://www.valuehost.com.br/blog/wp-content/uploads/2016/08/moodle.jpg.webp"></div><br></br>
    <title>Questionarios</title>
</head>
<style>
        /* Estilos CSS para a tabela */
        table {
            border-collapse: collapse; /* Combina as bordas das células */
            width: 100%; /* Define a largura da tabela */
        }
        th, td {
            border: 1px solid black; /* Adiciona bordas às células */
            padding: 8px; /* Adiciona espaço dentro das células */
            text-align: center; /* Alinha o texto à esquerda */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Define uma cor de fundo para linhas pares */
        }
    </style>

<body>
<form><br></br>
	<p></div><br></br><br></br><br></br>
<h1><div style="text-align: center;">UFABC - Questionário Estudo e Relato sobre a Influência dos elementos de design de cursos à distância na Experiência do Usuário. </div></h1>
	<p></div><br></br><br></br><br></br>
	<h2><div style="text-align: center;">INSTRUÇÕES INICIAIS</div></h2>
<h3><div style="text-align: center;">
Bem-vindo(a) ao nosso questionário de experiência do usuário! Este questionário tem como objetivo aprofundar a compreensão sobre a influência dos elementos de design de cursos à distância na experiência do usuário (UX) ao interagir com o AVA (ambiente virtual de
aprendizagem). O AVA em utilização é o Moodle.
Sinta-se à vontade para responder de forma honesta e espontânea, pois isso nos ajudará a compreender suas necessidades e expectativas.
Gostaríamos de ressaltar que todas as suas respostas serão tratadas com a mais absoluta confidencialidade. Não há respostas certas ou erradas, estamos interessados em saber sua opinião sincera.
Tente decidir de forma espontânea! É importante não pensar em demasia sobre os termos para chegar a uma resposta direta. Selecione sempre uma resposta, mesmo que esteja inseguro em relação à avaliação de um par de termos ou se considerar que não se adequa.
Observe o exemplo abaixo:
pouco atraente o  o o o o o atraente
Esta avaliação acima considera o produto pouco atraente.
Marque apenas uma bolinha de seleção para cada opção da questão, ou seja, uma por linha. Totalizando 4 marcações por questão.
Desde já agradecemos pela sua dedicação e interesse em participar desse trabalho de pesquisa. Saiba que sua participação é extremamente valiosa. Vamos começar!</div></h6>
</div></h3><br></br><br></br>
<!-- Formulário para Coleta de Dados -->
    <div class="container">
        <h3>Coleta de Dados</h3>
        <form method="post" action="coleta_dados.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required><br><br>
            <label for="genero">Gênero:</label>
            <select id="genero" name="genero" required>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="Outro">Outro</option>
            </select><br><br>
            <button type="submit">Enviar Dados</button>
        </form>
    </div>
<!-- Link para Download do CSV -->
    <div class="container">
    <h3>Download dos Dados Coletados</h3>
    <a href="download_csv.php?download=csv">Baixar CSV</a>
    </div>
<!-- Link para visualizar gráficos -->
    <div class="container">
    <h3>Visualizar Gráficos dos Dados Coletados</h3>
    <a href="gerar_graficos.php">Visualizar Gráficos</a>
    </div>
<article>
    <p>
	    <h4><div style="text-align: center;"><br><br><label>*1 Clareza
		<div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="Como fica a clareza das informações e os passos de indicações para uso do curso.">
        <div class="dialog-box">
        Como fica a clareza das informações e os passos de indicações para uso do curso.
        </div>
    </div><p></br></br>
		
Em relação ao design e estrutura dos cursos, como você avalia a clareza das informações e diretrizes fornecidas?</label><br /><p><br></br>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Inflexível</th>
        <th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha1" onclick="selecionarRadio(this)"></th>
        <th>Flexível</th>
    </tr>
    <tr>
        <th>Confusas</th>
        <th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha2" onclick="selecionarRadio(this)"></th>
        <th>Claras</th>
    </tr>
	    <tr>
		<th>Complicadas</th>
        <th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha3" onclick="selecionarRadio(this)"></th>
        <th>Fáceis</th>
    </tr>
	    <tr>
        <th>Incompreensíveis</th>
        <th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
        <th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
        <th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha4" onclick="selecionarRadio(this)"></th>
        <th>Compreensíveis</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito da clareza. Sugestões de melhoria serão sempre bem-vindas (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>
	
	<p></div><br></br><br></br><br></br><br></br><br></br></h4>
	     <h4><div style="text-align: center;"><br><br><label>*2 Eficiência
		 <div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="A impressão tenta indicar que as tarefas podem ser concluídas com o minimo esforço.">
        <div class="dialog-box">
        A impressão tenta indicar que as tarefas podem ser concluídas com o minimo esforço.
        </div><p></br></br>
Como você classifica a facilidade de navegação e interação com os recursos do curso?</label><br /><p>
    <p>
		
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Lento</th>
        <th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha5" onclick="selecionarRadio(this)"></th>
        <th>Rápido</th>
    </tr>
    <tr>
        <th>Pouco prático</th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha6" onclick="selecionarRadio(this)"></th>
        <th>Prático</th>
    </tr>
	    <tr>
        <th>Desorganizado</th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha7" onclick="selecionarRadio(this)"></th>
        <th>Organizado</th>
    </tr>
	    <tr>
        <th>Complicado</th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha8" onclick="selecionarRadio(this)"></th>
        <th>Fácil</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito da eficiência. Sugestões de melhoria serão sempre bem-vindas (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>

	<p></div><br></br><br></br><br></br><br></br><br></br></h4>
	     <h4><div style="text-align: center;"><br><br><label>*3 Interação
		 <div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="O quão simples e fácil é a interação e integração com os colegas via AVA e se puder deixe no campo de sugestões abaixo como fica essa integração e interação fora do AVA.">
        <div class="dialog-box">
        O quão simples e fácil é a interação e integração com os colegas via AVA e se puder deixe no campo de sugestões abaixo como fica essa integração e interação fora do AVA.
        </div><p></br></br>
Como você avalia a facilidade de integração e interação com outros alunos no ambiente virtual?</label><br /><p>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Muito difícil</th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha9" onclick="selecionarRadio(this)"></th>
        <th>Muito fácil</th>
    </tr>
    <tr>
        <th>Conservadora</th>
        <th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha10" onclick="selecionarRadio(this)"></th>
        <th>Inovadora</th>
    </tr>
	    <tr>
        <th>Deselegante</th>
        <th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha11" onclick="selecionarRadio(this)"></th>
        <th>Elegante</th>
    </tr>
	    <tr>
        <th>Inconclusiva</th>
        <th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha12" onclick="selecionarRadio(this)"></th>
        <th>Conclusiva</th>
    </tr>
<p>

   <div style="text-align: left;"><label for="comentario">Como você avalia a facilidade de integração e interação com outros alunos fora do ambiente de aprendizagem, como, por exemplo, algum método alternativo como WhatsApp, Discord, Telegram e etc (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>

	<p></div><br></br><br></br><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*4 Personalização
		<div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="Impressão de que a plataforma poderia ser facilmente adaptada às preferências pessoais ou aos estilos de estudo.">
        <div class="dialog-box">
            Impressão de que a plataforma poderia ser facilmente adaptada às preferências pessoais ou aos estilo de estudo.
        </div><p></br></br>
O curso oferece opções de personalização que atendem às suas necessidades de aprendizagem?</label><br /><p>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Oferece poucas opções</th>
        <th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha13" onclick="selecionarRadio(this)"></th>
        <th>Oferece muitas opções</th>
    </tr>
    <tr>
        <th>Inflexível</th>
        <th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha14" onclick="selecionarRadio(this)"></th>
        <th>Flexível</th>
    </tr>
	    <tr>
        <th>Não ajustável</th>
        <th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha15" onclick="selecionarRadio(this)"></th>
        <th>Ajustável</th>
    </tr>
	    <tr>
        <th>Sem customização</th>
        <th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha16" onclick="selecionarRadio(this)"></th>
        <th>Oferece customização</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito da personalização. Sugestões de melhoria serão sempre bem-vindas (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>

	<p></div><br></br><br></br><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*5 Estética visual
		<div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="Percepção de que a interface gráfica é estilosa ou até mesmo apelativa.">
        <div class="dialog-box">
            Percepção de que a interface gráfica é estilosa ou até mesmo apelativa.
        </div><p></br></br>
Avalie a influência dos elementos visuais do curso (como layout, fontes, cores) na sua experiência de aprendizado.</label><br /><p>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Negativa</th>
        <th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha17" onclick="selecionarRadio(this)"></th>
        <th>Positiva</th>
    </tr>
    <tr>
        <th>Desprovido de estilo</th>
        <th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha18" onclick="selecionarRadio(this)"></th>
        <th>Estiloso</th>
    </tr>
	    <tr>
        <th>Pouco atraente</th>
        <th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha19" onclick="selecionarRadio(this)"></th>
        <th>Atraente</th>
    </tr>
	    <tr>
        <th>Desagradável</th>
        <th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha20" onclick="selecionarRadio(this)"></th>
        <th>Agradável</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito do visual (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>

	<p></div><br></br><br></br><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*6 Interatividade e Engajamento
		<div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="Impressão geral sobre a plataforma. Se os alunos de forma geral gostam ou não da  plataforma através destes elementos extras do produto">
        <div class="dialog-box">
        Impressão geral sobre a plataforma. Se os alunos de forma geral gostam ou não da  plataforma através destes elementos extras do produto
        </div><p></br></br>
Os elementos interativos do curso (como quizzes, fóruns, vídeos) contribuem para o seu engajamento com o material?</label><br /><p>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Pouco contribuem</th>
        <th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha21" onclick="selecionarRadio(this)"></th>
        <th>Contribuem bastante</th>
    </tr>
    <tr>
        <th>Desinteressantes</th>
        <th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha22" onclick="selecionarRadio(this)"></th>
        <th>Interessantes</th>
    </tr>
	    <tr>
        <th>Inútil</th>
        <th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha23" onclick="selecionarRadio(this)"></th>
        <th>Útil</th>
    </tr>
	    <tr>
        <th>Desmotivadores</th>
        <th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha24" onclick="selecionarRadio(this)"></th>
        <th>Motivadores</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito da interatividade e engajamento. Sugestões de melhoria serão sempre bem-vindas (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>
		
	<p></div><br></br><br></br><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*7 Aspectos Motivacionais
		<div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="Impressão subjetiva sobre qual foi a sua motivação, se acha que essa motivação esteja associada a parte do design da disciplina que foi criado.">
        <div class="dialog-box">
        Impressão subjetiva sobre qual foi a sua motivação, se acha que essa motivação esteja associada a parte do design da disciplina que foi criado.
        </div><p></br></br>
Como a estrutura e o design da disciplina influenciaram sua motivação ao longo do curso:</label><br /><p>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Pouco</th>
        <th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha25" onclick="selecionarRadio(this)"></th>
        <th>Muito</th>
    </tr>
    <tr>
        <th>Desestimulante</th>
        <th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha26" onclick="selecionarRadio(this)"></th>
        <th>Estimulante</th>
    </tr>
	    <tr>
        <th>Confuso</th>
        <th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha27" onclick="selecionarRadio(this)"></th>
        <th>Claro</th>
    </tr>
	    <tr>
        <th>Desmotivante</th>
        <th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha28" onclick="selecionarRadio(this)"></th>
        <th>Motivante</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito dos aspectos motivacionais (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>	
	
		<p></div><br></br><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*8 Atratividade
		<div class="container">
        <img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-lettre-d-information-i-bleu.png" alt="Ícone" class="icon" title="Impressão subjetiva de que a informação fornecida na plataforma é  estruturada, bem preparada e fácil de entender.">
        <div class="dialog-box">
        Impressão subjetiva de que a informação fornecida na plataforma é  estruturada, bem preparada e fácil de entender.
        </div><p></br></br>
Como você avalia a adequação do conteúdo do curso em relação às suas expectativas?</label><br /><p>
    <p>
	
<table>
<tr>
        <td></td>
        <td>-3</td>
		<td>-2</td>
        <td>-1</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td></td>
    </tr>
    <tr>
        <th>Abaixo</th>
        <th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha29" onclick="selecionarRadio(this)"></th>
        <th>Acima</th>
    </tr>
    <tr>
        <th>Ruim</th>
        <th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha30" onclick="selecionarRadio(this)"></th>
        <th>Boa</th>
    </tr>
	    <tr>
        <th>Desagradável</th>
        <th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha31" onclick="selecionarRadio(this)"></th>
        <th>Agradável</th>
    </tr>
	    <tr>
        <th>Não intuitivo</th>
        <th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
		<th><input type="radio" name="linha32" onclick="selecionarRadio(this)"></th>
        <th>Intuitivo</th>
    </tr>
</table>
<p>

   <div style="text-align: left;"><label for="comentario">Se achar necessário, comente algo sobre sua resposta a respeito da atratividade. Sugestões de melhoria serão sempre bem-vindas (opcional).</label><br>
<textarea id="comentario" name="comentario" rows="4" cols="50"></textarea>

		<p></div><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*9 Algumas perguntas sobre você<p></br></br></label><br /><p>
        <label for="opcoes">Qual é a sua idade?</label>
    <select id="opcoes" name="opcoes1 onclick="selecionarRadio(this) value="Enviar" onclick="enviarFormulario()">
	    <option value="op1" >Please select -</option>
        <option value="op2">15 a 30</option>
        <option value="op3">31 a 45</option>
        <option value="op4">46 a 65</option>
        <option value="op5">66 a 99</option>
    </select>
		<p>
		<label for="opcoes">Qual é o seu gênero?</label>
    <select id="opcoes" name="opcoes2 onclick="selecionarRadio(this) value="Enviar" onclick="enviarFormulario()">
	   <option value="op6">Please select -</option>
        <option value="op7">Masculino</option>
        <option value="op8">Feminino</option>
        <option value="op9">Prefiro não dizer</option>
        <option value="op10">Outro</option>
    </select>
	    <p>
		<label for="opcoes">Qual a sua familiaridade de uso com o Moodle?</label>
    <select id="opcoes" name="opcoes3 onclick="selecionarRadio(this) value="Enviar" onclick="enviarFormulario()">
	   <option value="op11">Please select -</option>
        <option value="op12">Básico</option>
        <option value="op13">intermediario</option>
        <option value="op14">Avançado</option>
        <option value="op15">Super Avançado</option>
    </select>
		<p></div><br></br><br></br><br></br><br></br></h4>
	    <h4><div style="text-align: center;"><br><br><label>*10 Questões de encerramento<p></br></br></label><br /><p>
		<div style="text-align: left;"><label for="comentario1"> Qual o conceito você daria para o seu aprendizado nessa disciplina de Jogos e Simulações?</label><br>
<div style="text-align: center;"><textarea id="comentario1" name="comentario1" rows="4" cols="50" value="com1" onclick="selecionarRadio(this)"></textarea><p><br></br>
<p>
<div style="text-align: left;"><label for="comentario1">Você indicaria esse curso para outra pessoa?</label><br>
<div style="text-align: center;"><textarea id="comentario1" name="comentario1" rows="4" cols="50" value="com1" onclick="selecionarRadio(this)"></textarea><p><br></br>
<p>
<div style="text-align: left;"><label for="comentario1">Qual é o aspecto mais positivo neste processo de aprendizagem através do Moodle?</label><br>
<div style="text-align: center;"><textarea id="comentario1" name="comentario1" rows="4" cols="50" value="com1" onclick="selecionarRadio(this)"></textarea><p><br></br>
<p>
<div style="text-align: left;"><label for="comentario1">O curso atendeu as suas expectativas?</label><br>
<div style="text-align: center;"><textarea id="comentario1" name="comentario1" rows="4" cols="50" value="com1" onclick="selecionarRadio(this)"></textarea><p><br></br>
<p>
<div style="text-align: left;"><label for="comentario">O que considera que deveria ser melhorado para aprimorar a experiência do usuário deste curso?
(onde a experiência do usuário, refere-se à facilidade e à satisfação com que as pessoas podem navegar e interagir com um ambiente digital, focando em como os elementos de design e a funcionalidade contribuem para atingir seus objetivos de aprendizado de forma eficiente e agradável).</label><br>
<div style="text-align: center;"><textarea id="comentario2" name="comentario2" rows="4" cols="50" value="com2" onclick="selecionarRadio(this)"></textarea>
	<div style="text-align: right;">
                <input type="hidden" name="comentario1" value="com1">
				<input type="hidden" name="comentario2" value="com2">
                <input type="submit" value="Enviar">

		<p></div><br></br>
		

</form>
</body>
</html>
?>
