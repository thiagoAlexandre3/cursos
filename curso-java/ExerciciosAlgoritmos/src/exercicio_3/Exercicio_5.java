package exercicio_3;

import javax.swing.JOptionPane;

public class Exercicio_5 {

    public static void main(String[] args) {
        int a = 0;
        for (int cont = 0; cont < 5; cont++) {
            
            a = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero: "));
            if (a < 0) {
                System.out.println("Número negativo: " + a);
            }
        }

    }
}
