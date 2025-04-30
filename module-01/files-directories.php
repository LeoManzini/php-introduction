<?php
// fopen() - Abre um arquivo ou URL
// fopen($filename, $mode, $use_include_path, $context)
// $filename - O nome do arquivo a ser aberto. Pode ser um caminho relativo ou absoluto.
// $mode - O modo de abertura do arquivo. Os modos mais comuns são:
// 'r' - Abre o arquivo para leitura. O ponteiro do arquivo é colocado no início do arquivo.
// 'w' - Abre o arquivo para escrita. O ponteiro do arquivo é colocado no início do arquivo e o conteúdo anterior é truncado.
// 'a' - Abre o arquivo para escrita. O ponteiro do arquivo é colocado no final do arquivo. Se o arquivo não existir, ele será criado.
// 'x' - Cria um novo arquivo para escrita. Se o arquivo já existir, a chamada falhará.
// 'c' - Abre o arquivo para leitura e escrita. O ponteiro do arquivo é colocado no início do arquivo. Se o arquivo não existir, ele será criado.
// 'r+' - Abre o arquivo para leitura e escrita. O ponteiro do arquivo é colocado no início do arquivo. O conteúdo anterior não é truncado.
// 'w+' - Abre o arquivo para leitura e escrita. O ponteiro do arquivo é colocado no início do arquivo e o conteúdo anterior é truncado.
// 'a+' - Abre o arquivo para leitura e escrita. O ponteiro do arquivo é colocado no final do arquivo. Se o arquivo não existir, ele será criado.
// 'x+' - Cria um novo arquivo para leitura e escrita. Se o arquivo já existir, a chamada falhará.
// $use_include_path - Se definido como true, o caminho do arquivo será procurado no include_path.
// $context - Um contexto de arquivo. Um contexto é um recurso que contém informações adicionais sobre como abrir o arquivo. Por exemplo, você pode usar um contexto para definir opções de proxy ou autenticação.
// __DIR__ - constante mágica que retorna o diretório do arquivo atual. É útil para construir caminhos relativos de forma segura.
$handler = fopen(__DIR__ . '/../additional-files/test.txt', 'r');

// Lê uma linha do arquivo até o caractere de nova linha ou até 4096 bytes, o que ocorrer primeiro.
// var_dump(fgets($handler, 4096));

// feof() - Verifica se o ponteiro do arquivo chegou ao final do arquivo. Retorna true se o ponteiro estiver no final do arquivo, caso contrário, retorna false.
// maneira otimizada de ler o arquivo, pois não é necessário ler o arquivo inteiro de uma vez. Isso é útil para arquivos grandes, onde você pode querer processar linha por linha em vez de carregar tudo na memória de uma só vez.
while (!feof($handler)) {
    $line = fgets($handler, 4096);
    echo 'Iteração: ' . $line . '<br>';
}
fclose($handler); // fecha o arquivo após a leitura

// $handler = fopen(__DIR__ . '/../additional-files/test.txt', 'w');
// fwrite($handler, 'Escrevendo no arquivo com fwrite()' . PHP_EOL);
// fclose($handler);

// Modo 'a' para adicionar ao final do arquivo
// $handler = fopen(__DIR__ . '/../additional-files/test.txt', 'a');
// PHP_EOL - constante mágica que representa a quebra de linha do sistema operacional atual. Isso garante que o código funcione corretamente em diferentes sistemas operacionais (Windows, Linux, etc.).
// fwrite($handler, PHP_EOL . 'Escrevendo no arquivo com fwrite()');
// fclose($handler);

// Abre para leitura e escrita sem truncar
$handler = fopen(__DIR__ . '/../additional-files/test.txt', 'r+');
// fseek($handler, $offset, $whence);
// $offset: O número de bytes para mover o ponteiro;
// $whence: Define a posição de referência para o deslocamento. Pode ser:
//    SEEK_SET (padrão): Início do arquivo.
//    SEEK_CUR: Posição atual do ponteiro.
//    SEEK_END: Final do arquivo.
fseek($handler, 10, SEEK_SET);

// O método `ftell()` retorna a posição atual do ponteiro no arquivo.
$position = ftell($handler);
echo "Posição atual: $position";

// O método `rewind()` reposiciona o ponteiro no início do arquivo. Ele é equivalente a `fseek($handle, 0, SEEK_SET)`.
rewind($handler);
fclose($handler);
print '<br>';

$arquivo = file_get_contents(__DIR__ . '/../additional-files/test.txt');
var_dump($arquivo);

// FILE_APPEND - constante que indica que o conteúdo deve ser adicionado ao final do arquivo, em vez de sobrescrever o conteúdo existente. Isso é útil quando você deseja manter o conteúdo anterior e adicionar novas informações a ele.
file_put_contents(__DIR__ . '/../additional-files/test.txt', 'Escrevendo no arquivo com file_put_contents()' . PHP_EOL, FILE_APPEND);

// file() - Lê um arquivo inteiro em um array. Cada linha do arquivo se torna um elemento do array. Isso é útil quando você deseja processar o arquivo linha por linha, mas não precisa ler o arquivo inteiro de uma vez.
// O arquivo deve ser pequeno o suficiente para caber na memória, pois ele é lido completamente de uma vez. Se o arquivo for muito grande, pode causar problemas de desempenho ou esgotar a memória disponível.
$arquivo = file(__DIR__ . '/../additional-files/test.txt');

// Copia o arquivo do primeiro param, para o segundo arquivo, pode ser em outro diretório, ter qlq nome
copy(__DIR__ . '/../additional-files/test.txt', __DIR__ . '/../additional-files/novo.txt');

// Renomeia e move o arquivo do primeiro param, para onde o segundo apontar
rename(__DIR__ . '/../additional-files/test.txt', __DIR__ . '/../additional-files/novo.txt');

// Exclui um arquivo
unlink(__DIR__ . '/../additional-files/novo.txt');

// Checa se um arquivo existe
if (file_exists(__DIR__ . '/../additional-files/test.txt')) {
    echo 'O arquivo existe!';
} else {
    echo 'O arquivo não existe!';
}

// Cria um diretório, define as variáveis de acesso à esse novo diretório
mkdir('/../additional-files/novo-dir', 0777);

// Remove um diretório
rmdir('/../additional-files/novo-dir');

// Comando que vasculha um diretório e lista o seu conteúdo retornando um vetor com o conteúdo do diretório
$vetorArquivos = scandir(__DIR__ . '/../additional-files');
?>