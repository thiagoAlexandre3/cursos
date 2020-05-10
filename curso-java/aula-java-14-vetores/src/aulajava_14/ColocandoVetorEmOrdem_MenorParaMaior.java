
package aulajava_14;

import java.util.Arrays;

public class ColocandoVetorEmOrdem_MenorParaMaior {
    public static void main(String[] args) {
        double v[] = {6.5, 2.3, 1.9, -5, -9, 0};
        Arrays.sort(v);
        for(double valor: v){
            System.out.print(valor+" ");
        }
    }
}
