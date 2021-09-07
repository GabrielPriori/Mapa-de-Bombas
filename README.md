# Mapa de Bombas

O objetivo deste teste é criar uma matriz em tela e permitir ao usuário posicionar bombas  (identificadas pela letra “X”) nas interseções de linhas e colunas escolhidas. A interseção de  uma linha e coluna chamaremos de célula. Como saída, espera-se a contagem das bombas nos  arredores das posições escolhidas e a coloração das contagens de acordo com os critérios  definidos abaixo.  
Instruções:  
Criar uma tela com quadros organizados de tal forma que forme um quadrado maior. Utilizar o  tamanho 15 x 15.  
Nestes quadros, deverá permitir a entrada das posições onde ficariam localizadas as bombas,  marcando com o caractere “X”. O usuário poderá escolher o local onde marcará o “X” em  qualquer das posições da matriz (ou células).  
A partir da entrada, cada célula ao redor do “X” informado pelo usuário, deve  mostrar a contagem de bombas nas imediações (os 8 quadros ao redor do quadro  atual).  
Todas posições ao redor de uma bomba, devem conter a contagem de bombas  nas imediações (os 8 quadros ao redor do quadro onde está sendo feita a  contagem), acumulando a quantidade de bombas nas imediações.  
De forma que cada célula pode ter a contagem de 0 a 8 bombas ao seu redor. A contagem 0  (zero) não deve ser mostrada, e as demais, devem ter o número colorido de acordo com os  critérios abaixo:  
 1 bomba próxima => roxo  
 2 bombas próxima => azul  
 3 bombas próxima => verde  
 4 bombas próxima => amarelo  
 5 bombas próxima => laranja  
 6 bombas próxima => vermelho  
 7 bombas próxima => Bordo  
 8 bombas próxima => Rosa  
A saída, além das numerações, a posição onde está localizada a bomba deve ser exibida com 1  ícone representando a bomba e não o input.  
Abaixo é mostrado um exemplo. Note que no exemplo não está sendo mostrado o ícone da  bomba, que é requerido conforme requisito.
