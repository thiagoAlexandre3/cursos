
package exercicio_3;

import javax.swing.JOptionPane;

public class Exercicio_7 {
    public static void main(String[] args) {
        int entrada = 0;
        for (int cont = 0; cont < 5; cont++) {
            
            entrada = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero: "));
            if (entrada % 2 == 0) {
                System.out.println("Número pares: " + entrada);
            }
        }

    }
    
}
