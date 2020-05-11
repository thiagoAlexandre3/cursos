nome = input('Qual é o seu nome? ');
print('Prazer em te conhecer, {:20}!'.format(nome));
#Imprime a variavel 20 caracteres
print('Prazer em te conhecer, {:<20}!'.format(nome));
#O sinal de menor, alinha a esquerda
print('Prazer em te conhecer, {:>20}!'.format(nome));
#o sinal de maior alinha a direita
print('Prazer em te conhecer, {:^20}!'.format(nome));
#O assento sirclunfexo, alinha ao centro
print('Prazer em te conhecer, {:=^20}!'.format(nome));
#Preenche o espaço com o caracter digitado
#Obs.: Se o nome tiver mais de 20 caracteres, ele aparece normalmente, se menos, o espaço é preenchido apartir da direita e só da preencher com um tipo de caracter
