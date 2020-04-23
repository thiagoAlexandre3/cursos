package aulajava_15;

public class Procedimentos_e_Funcao {

    public static void main(String[] args) {
        soma(5, 2);
        System.out.println("A soma é: " + adicao(5, 2));
        
    }

    public static void soma(int a, int b) {
        int s = a + b;
        System.out.println("A soma é: S" + s);
    }

    public static int adicao(int a, int b) {
        int s = a + b;
        return s;
    }
}
