import java.util.Scanner;

public class Nama {
    public static void main(String[] args) {
        int totalNilai = 0;
        int jumlahMahasiswa;
        String nama;

        Scanner angka = new Scanner(System.in);

        System.out.println("Masukkan jumlah mahasiswa:");
        jumlahMahasiswa = angka.nextInt();

        angka.nextLine(); 

        for (int i = 1; i <= jumlahMahasiswa; i++) {

            System.out.println("Masukkan Nama Mahasiswa ke-" + i + ":");
            nama = angka.nextLine();

            System.out.println("Masukkan Nilai Mahasiswa " + nama + ":");
            int nilai = angka.nextInt();

            totalNilai += nilai;
            angka.nextLine(); 
        }
        angka.close();
    }
}