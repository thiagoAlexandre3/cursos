package aulajava_14;

import java.util.Arrays;

public class AtribuindoOMesovalorParaVetor {

    public static void main(String[] args) {
        int v[] = new int[200];
        Arrays.fill(v, 0);
        for(int valor:v){
            System.out.print(valor + " ");
        }
    }
}
