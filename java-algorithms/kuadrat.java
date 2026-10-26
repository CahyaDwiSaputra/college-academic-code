import java.util.Scanner;

public class kuadrat {
    public static void main(String[] args) {
        int n;

        System.out.println("Masukkan Bilangan Kuadrat :");

        Scanner kuadrat = new Scanner(System.in);
        System.out.println("n = ");
        n = kuadrat.nextInt();

        for (int suku = 1; suku <= n; suku++) {
            System.out.println(suku * suku);
        }
    }
}