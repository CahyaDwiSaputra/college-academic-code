public class CacahElemen {
    public static void main(String[] args) {
        System.out.println("Contoh Length");
        System.out.println("-------------");

        String[] kata = {"Nyamuk", "Belalang", "Semut", "Lalat", "Ulat"};
        String[] data = {"Data1", "Data2", "Data3", "Data4"};

        System.out.println("Cacah larik kata = " + kata.length);
        System.out.println("Cacah larik data = " + data.length);
        System.out.println();

        System.out.println("Data pada larik kata:");
        for (int indeks = 0; indeks < kata.length; indeks++) {
            System.out.println(kata[indeks]);
        }
    }
}