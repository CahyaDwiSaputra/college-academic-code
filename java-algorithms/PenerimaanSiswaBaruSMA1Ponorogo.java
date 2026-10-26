import java.util.Scanner;
import java.util.Map;
import java.util.HashMap;

public class PenerimaanSiswaBaruSMA1Ponorogo {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Masukkan Jumlah Siswa yang Mendaftar: ");
        int jumlahSiswa = scanner.nextInt();
        scanner.nextLine();

        System.out.print("Masukkan Nilai Ujian Akhir yang Diperlukan (misalnya: 75): ");
        int nilaiAmbangBatas = scanner.nextInt();
        scanner.nextLine();

        Map<String, Siswa> siswaMap = new HashMap<>();
        
        for (int i = 0; i < jumlahSiswa; i++) {
            inputDataSiswa(scanner, i, siswaMap);
        }

        inputNilaiUjianAkhir(scanner, siswaMap);

        tampilkanHasil(siswaMap, nilaiAmbangBatas);
    }

    private static void inputDataSiswa(Scanner scanner, int i, Map<String, Siswa> siswaMap) {
        System.out.print("Masukkan NIS untuk siswa " + (i + 1) + ": ");
        String nis = scanner.nextLine();

        System.out.print("Masukkan Nama untuk siswa " + (i + 1) + ": ");
        String nama = scanner.nextLine();

        System.out.print("Masukkan Asal SMP untuk siswa " + (i + 1) + ": ");
        String asalSMP = scanner.nextLine();

        siswaMap.put(nis, new Siswa(nis, nama, asalSMP));
    }

    private static void inputNilaiUjianAkhir(Scanner scanner, Map<String, Siswa> siswaMap) {
        for (Siswa siswa : siswaMap.values()) {
            // Input nilai ujian akhir per siswa
            System.out.print("Masukkan nilai ujian akhir untuk siswa " + siswa.nama + " (NIS: " + siswa.nis + "): ");
            try {
                int nilaiUjian = Integer.parseInt(scanner.nextLine().trim());
                siswa.setNilaiUjianAkhr(nilaiUjian);
            } catch (NumberFormatException e) {
                System.out.println("Nilai ujian tidak valid untuk siswa " + siswa.nis);
                siswa.setNilaiUjianAkhr(0);
            }
        }
    }

    private static void tampilkanHasil(Map<String, Siswa> siswaMap, int nilaiAmbangBatas) {
        System.out.println("\nHasil Penerimaan Siswa Baru SMA 1 Ponorogo:");
        System.out.println("---------------------------------------------------------------");
        System.out.printf("| %-3s | %-20s | %-20s | %-15s | %-5s | %-10s |\n", "No", "Nama", "NIS", "Asal SMP", "Nilai", "Status");
        System.out.println("---------------------------------------------------------------");

        int index = 1;
        for (Siswa siswa : siswaMap.values()) {
            int nilaiUjian = siswa.getNilaiUjianAkhr();
            String status = (nilaiUjian >= nilaiAmbangBatas) ? "Diterima" : "Ditolak";
            System.out.printf("| %-3d | %-20s | %-20s | %-15s | %-5d | %-10s |\n", 
                index++, siswa.nama, siswa.nis, siswa.asalSMP, nilaiUjian, status);
        }

        System.out.println("---------------------------------------------------------------");
        System.out.printf("Nilai Ambang Batas: %d\n", nilaiAmbangBatas);
    }
}

class Siswa {
    String nis;
    String nama;
    String asalSMP;
    private int nilaiUjianAkhr;

    public Siswa(String nis, String nama, String asalSMP) {
        this.nis = nis;
        this.nama = nama;
        this.asalSMP = asalSMP;
    }

    public void setNilaiUjianAkhr(int nilaiUjianAkhr) {
        this.nilaiUjianAkhr = nilaiUjianAkhr;
    }

    public int getNilaiUjianAkhr() {
        return nilaiUjianAkhr;
    }
}