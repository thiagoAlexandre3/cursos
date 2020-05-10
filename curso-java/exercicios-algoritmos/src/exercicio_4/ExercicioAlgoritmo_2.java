package exercicio_4;

import javax.swing.JOptionPane;

public class ExercicioAlgoritmo_2 {

    public static void main(String[] args) {
        int x1 = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero: "));
        String x2 = (JOptionPane.showInputDialog("Digite um numero: "));
        int x3 = Integer.parseInt(JOptionPane.showInputDialog("Digite um numero: "));
        System.out.println("O resultado é: " + Calculo(x1, x2, x3));
    }

    public static int Calculo(int a, String b, int c) {
        int x = Integer.parseInt(b);
        int res = a * x * c;
        return res;
    }

}
