package exercicio_3;

import javax.swing.JOptionPane;

public class text {

    public static void main(String[] args) {
        boolean x1 = true;
        while (x1) {
            int x4 = Integer.parseInt(JOptionPane.showInputDialog("Digite um número: "));
            /*int n1 = x4;
            int n2 = n1;
            if (x4 > n1) {
                int x5 = x4;
                int x6 = x2;
            } else if (x4 < x2) {
                int x5 = x2;
                int x6 = x4;
            }*/
            if(x4 != 0){
                int z = x4-1;
                System.out.println(z);
            }
            else if (x4 == 0) {
                x1 = false;
            }           
        }
        System.out.println("Não teve um número maior nem um número menor");
    }

}
