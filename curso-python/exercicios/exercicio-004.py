leitura = input('Digite algo: ');
print('O valor digitado é do tipo ', type(leitura));
print('Obs.: Será respondido como, true para sim, e false para não!');
print('É numero: ', leitura.isnumeric())
print('É string: ', leitura.isalpha());
print('É alfanumerico: ', leitura.isalnum());
print('É spaço: ', leitura.isspace());
print('Está em caixa alta: ', leitura.isupper());
print('Está em caixa baixa: ', leitura.islower());