package exercicio_4;

import javax.swing.JOptionPane;

public class ExercicioAlgoritmo_4 {

    public static void main(String[] args) {
        int x = Integer.parseInt(JOptionPane.showInputDialog("Digite os minutos: "));
        exibirHora(x);
    }

    public static void exibirHora(int a) {
        double min =(double) a / 60;
        double hora = a / 3600;
        System.out.println(a + " segundos, corresponde a: " + hora + " horas, " + min + " minutos e " + a);
    }
}
