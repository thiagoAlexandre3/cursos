package exercicio_3;

import javax.swing.JOptionPane;

public class Exercicio_4 {

    public static void main(String[] args) {
        boolean x2 = true;
        while (x2) {
            int x1 = Integer.parseInt(JOptionPane.showInputDialog("Digite um número entre 1 e 10: "));
            if (x1 >= 1 && x1 <= 10) {
                double x3 = Math.sqrt(x1);
                System.out.println(x3);
                x2 = false;
            } else {
                x2 = true;
            }
        }
    }
}
