import java.util.Scanner;

public class SistemAkademikk {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        
        // Input jumlah mahasiswa
        System.out.print("Masukkan jumlah mahasiswa: ");
        int jumlah = input.nextInt();
        input.nextLine(); // Clear the buffer
        
        DataMahasiswa[] mahasiswaArray = new DataMahasiswa[jumlah];
        int[] nilaiArray = new int[jumlah];
        int totalNilai = 0;
        int KKM = 75;
        
        // Input data mahasiswa dan nilai
        for (int i = 0; i < jumlah; i++) {
            mahasiswaArray[i] = inputMahasiswa(input, i);
            nilaiArray[i] = inputNilai(input, i);
            totalNilai += nilaiArray[i];
        }
        
        // Tampilkan hasil
        tampilkanHasil(mahasiswaArray, nilaiArray, totalNilai, jumlah, KKM);
    }

    // Fungsi untuk input data mahasiswa
    private static DataMahasiswa inputMahasiswa(Scanner input, int index) {
        System.out.print("Masukkan NIM untuk mahasiswa " + (index + 1) + ": ");
        String nim = input.nextLine();
        
        System.out.print("Masukkan nama untuk mahasiswa " + (index + 1) + ": ");
        String nama = input.nextLine();
        
        System.out.print("Masukkan prodi untuk mahasiswa " + (index + 1) + ": ");
        String jurusan = input.nextLine();
        
        return new DataMahasiswa(nim, nama, jurusan);
    }

    // Fungsi untuk input nilai mahasiswa
    private static int inputNilai(Scanner input, int index) {
        System.out.print("Masukkan nilai untuk mahasiswa " + (index + 1) + ": ");
        int nilai = input.nextInt();
        input.nextLine(); // Clear the buffer
        return nilai;
    }

    // Fungsi untuk menampilkan hasil
    private static void tampilkanHasil(DataMahasiswa[] mahasiswaArray, 
                                        int[] nilaiArray, 
                                        int totalNilai, 
                                        int jumlah, 
                                        int kkm) {
        System.out.println("\nNilai Kelas Algoritma dan Pemrograman:");
        System.out.println("-----------------------------------------------------------");
        System.out.printf("| %-3s | %-20s | %-20s | %-5s | %-10s |\n", "No", "Nama", "NIM", "Nilai", "Status");
        System.out.println("-----------------------------------------------------------");
        
        // Menampilkan data mahasiswa dan status kelulusan
        for (int i = 0; i < jumlah; i++) {
            String status = (nilaiArray[i] >= kkm) ? "Lulus" : "Gagal";
            System.out.printf("| %-3d | %-20s | %-20s | %-5d | %-10s |\n", 
                              (i + 1), mahasiswaArray[i].nama, mahasiswaArray[i].nim, nilaiArray[i], status);
        }
        
        System.out.println("-----------------------------------------------------------");
        
        // Menampilkan nilai KKM dan rata-rata nilai
        double rataRataNilai = (double) totalNilai / jumlah;
        System.out.printf("Nilai KKM: %d\n", kkm);
        System.out.printf("Rata-rata Nilai: %.2f\n", rataRataNilai);
    }
}

// Class untuk menyimpan data mahasiswa
class DataMahasiswa {
    String nim;
    String nama;
    String jurusan;

    // Constructor untuk DataMahasiswa
    public DataMahasiswa(String nim, String nama, String jurusan) {
        this.nim = nim;
        this.nama = nama;
        this.jurusan = jurusan;
    }
}
