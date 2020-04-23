package exercicio_4;

import javax.swing.JOptionPane;

public class ExercicioAlgoritmo_1 {

    public static void main(String[] args) {
        int x = Integer.parseInt(JOptionPane.showInputDialog("Digite o valor do raio"));
        System.out.println("O volume será: " + raioDaEsfera(x));
    }

    public static double raioDaEsfera(int a) {
        double x = Math.pow(a, 3);
        double volume = 4 / 3 * x;
        return volume;
    }
}
