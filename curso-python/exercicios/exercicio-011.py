largura = float(input('Qual é a largura? '));
altura = float(input('Qual é a altura? '));
area = largura * altura;
quantTinta = area / 2;
print('Sua parede tem dimensão de {}x{} e sua area é de {:.3f}m².'.format(largura, altura, area));
print('Para pintar essa parede, você precisará de {:.3f}fl de tinta.'.format(quantTinta));