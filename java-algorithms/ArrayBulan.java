public class ArrayBulan {
    public static void main(String[] args) {
        // Declare and initialize the Bulan array with month names.
        String[] Bulan = {
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        };

        // Array to hold the number of days in each month.
        int[] JumlahHari = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};

        // Print out the months and corresponding number of days.
        System.out.println("Data pada larik bulan:");
        for (int i = 0; i < Bulan.length; i++) {
            System.out.println("Bulan " + Bulan[i] + " memiliki " + JumlahHari[i] + " hari.");
        }
    }
}