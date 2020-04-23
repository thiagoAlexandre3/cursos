package exercicio_3;

public class Exercicio_9 {

    public static void main(String[] args) {
        int x1 = 1;
        int x2 = 2;
        System.out.println(x1 + "\n" + x2);
        int x3 = x1 + x2;
        System.out.println(x3);
        for (int cont = 0; cont <= 15; cont++) {
            ++x1;
            ++x2;
            int x4 = x1 + x2;
            System.out.println(x4);
        }
    }
}
