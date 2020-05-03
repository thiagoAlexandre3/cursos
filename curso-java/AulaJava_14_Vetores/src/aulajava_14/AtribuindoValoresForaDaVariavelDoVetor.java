package aulajava_14;

public class AtribuindoValoresForaDaVariavelDoVetor {

    public static void main(String[] args) {
        int n[] = new int[4];
        n[0] = 1;
        n[1] = 5;
        n[2] = 7;
        n[3] = 8;
        for (int c = 0; c < n.length; c++) { // length, significa o comprimento em que o vetor possue
            System.out.println("Na posição " + c + ", temos o valor: " + n[c]);
        }
    }
}
