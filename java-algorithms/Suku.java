import java.util.Scanner;

public class Suku {
    public static void main(String[] args) {
        int n;
        System.out.println("Deret angka");

        Scanner angka = new Scanner(System.in);
        System.out.println("n =");
        n = angka.nextInt(); 

        int bilangan = 0;
        for (int suku = 1; suku <= n; suku) {
            bilangan = bilangan + suku;
            System.out.print(bilangan + " ");
        }

        System.out.println();  
    }
}