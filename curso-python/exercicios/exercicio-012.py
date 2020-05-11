produto = float(input('Digite o preço desse produto: R$ '));
desconto = produto * (35/100);
promocao = produto - desconto;
print('O produto que custava {} R$, na promoção de 5% de desconto, agora custa {}'.format(produto, promocao));
