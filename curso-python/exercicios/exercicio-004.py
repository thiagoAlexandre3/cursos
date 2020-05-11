leitura = input('Digite algo: ');
print('O valor digitado é do tipo, ', type(leitura));
print('É um numero? ', leitura.isnumeric())
print('É alfabético? ', leitura.isalpha());
print('É alfanumerico? ', leitura.isalnum());
print('Contem apenas espaços? ', leitura.isspace());
print('Está tudo em maisculas? ', leitura.isupper());
print('Está tudo em minusculas? ', leitura.islower());
#Faltava apenas a próxima função
print('Está capitalizado? ', leitura.istitle());