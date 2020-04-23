
package aulajava_14;

import java.util.Arrays;

public class BuscandoVetor {
    public static void main(String[] args) {
        int v[] = {5,6,7,8,9,10};
        int busc = Arrays.binarySearch(v,5);
        for(int valor: v){
            System.out.print(valor+" ");
        }
        System.out.println("");
        System.out.println("Encontri o valor 5, na posição: "+ busc);
    }
}
