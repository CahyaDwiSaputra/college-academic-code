public class LarikTry {
    public static void main(String[] args) {

        int[] bilangan = {7, 8, 9, 1, 4, 0, 3, 5, 2, 6}; 

        for (int indeks = 0; indeks < bilangan.length / 2; indeks++) {
            System.out.print(bilangan[indeks * 2 + 1] + " ");
            System.out.print(bilangan[indeks * 2] + " ");
        }
    }
}