package exercicio_4;

import javax.swing.JOptionPane;

public class ExercicioAlgoritmo_3 {

    public static void main(String[] args) {
        int A = Integer.parseInt(JOptionPane.showInputDialog("Qual e o valor de A ?"));
        System.out.println("O valor de A e " + A);
        int B = Integer.parseInt(JOptionPane.showInputDialog("Qual e o valor de B ?"));
        System.out.println("O valor de B e " + B);
        int x = A;
        int y = B;

        System.out.println("Agora A possui " + (A = B));
        System.out.println("Agora B possui " + (B = x));

    }

}
