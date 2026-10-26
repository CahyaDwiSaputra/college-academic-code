public class ArrayBulanID {
    public static void main(String[] args) {
        String[] Bulan; //deklarasi Array

        Bulan = new String[12]; //menentukan jumlah elemen / panjang array

        int[] JumlahHari = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};
                         "Februari", 28,
                         "Maret", 31,
                         "April", 30,
                         "Mei", 31,
                         "Juni", 30,
                         "Juli", 31,
                         "Agustus", 31,
                         "September", 30,
                         "Oktober", 31,
                         "November", 30,
                         "Desember", 31};
        String[] data = {"rama", "ingin", "bertemu", "dengan", "delvi"};

        System.out.println("Data pada larik bulan");
        for (int i = 0; i < bulan.length; i++) {
            System.out.println("Bulan" + Bulan[i] + "Memiliki" + JumlahHari[i] + "Hari");
        }
    }
}