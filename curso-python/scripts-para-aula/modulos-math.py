import math;
# ou também, podemos fazer importações de apenas as funções que precisamos, com,
# from math import sqrt, floor;
num = int(input('Digite um numero: '));
raiz = math.sqrt(num);
print('A raiz quadrada de {}, é igual a {:.3f}'.format(num, raiz));