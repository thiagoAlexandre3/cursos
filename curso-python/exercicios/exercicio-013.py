salario = float(input('Digite o valor atual do salário: R$ '));
aumento = salario * (15/100);
promocao = salario + aumento;
print('O seu salário, era de {:.2f}R$, mas com o aumento de 15%, você receberá {:.2f}R$'.format(salario, promocao));