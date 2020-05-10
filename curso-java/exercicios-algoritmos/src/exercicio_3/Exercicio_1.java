package exercicio_3;

import javax.swing.JOptionPane;

public class Exercicio_1 {

    public static void main(String[] args) {

        boolean x2 = true;
        while (x2) {
            int x1 = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero par: "));
            if (x1 % 2 == 0) {
                System.out.println("O número digitado foi: " + x1);
                x2 = false;
            } else {
                x2 = true;
            }
        }

    }

}
