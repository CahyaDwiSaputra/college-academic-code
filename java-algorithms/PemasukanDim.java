import java.util.Scanner;

public class PemasukanDim {
    public static void main(String[] args) {

        System.out.println("Contoh pemasukan data");
        System.out.println("---------------------");

        int[] data = new int[5];

        Scanner kbd = new Scanner(System.in);
        for (int indeks = 0; indeks < 5; indeks++) {
            System.out.println("Data ke-" + (indeks + 1) + " = ");
            data[indeks] = kbd.nextInt();
        }

        System.out.println();

        System.out.println("Data pada larik:");
        for (int indeks = 0; indeks < 5; indeks++) {
            System.out.println(data[indeks]);
        }

        kbd.close();
    }
}