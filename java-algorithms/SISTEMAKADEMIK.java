import java.util.Scanner;
import java.util.Map;
import java.util.HashMap;

public class SISTEMAKADEMIK {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int jumlahMahasiswa = inputJumlahMahasiswa(scanner);

        Map<String, Student> mahasiswaMap = new HashMap<>();
        int totalNilai = 0;
        final int AMBANG_BATAS = 80;

        for (int i = 0; i < jumlahMahasiswa; i++) {
            inputDataMahasiswa(scanner, i, mahasiswaMap);
        }

        inputNilai(scanner, mahasiswaMap);

        for (Student mahasiswa : mahasiswaMap.values()) {
            totalNilai += mahasiswa.getNilai();
        }

        tampilkanHasil(mahasiswaMap, totalNilai, jumlahMahasiswa, AMBANG_BATAS);
    }

    private static int inputJumlahMahasiswa(Scanner scanner) {
        System.out.print("Masukkan Jumlah Data Mahasiswa: ");
        int jumlahMahasiswa = scanner.nextInt();
        scanner.nextLine();
        return jumlahMahasiswa;
    }

    private static void inputDataMahasiswa(Scanner scanner, int i, Map<String, Student> mahasiswaMap) {
        System.out.print("Masukkan NIM dan Nama untuk mahasiswa " + (i + 1) + " (pisahkan dengan koma): ");
        String inputData = scanner.nextLine();
        String[] data = inputData.split(",");

        if (data.length == 2) {
            String nim = data[0].trim();
            String nama = data[1].trim();
            mahasiswaMap.put(nim, new Student(nim, nama));
        } else {
            System.out.println("Format input tidak valid. Harap masukkan data dengan format: NIM, Nama");
        }
    }

    private static void inputNilai(Scanner scanner, Map<String, Student> mahasiswaMap) {
        System.out.println("Masukkan nilai untuk setiap mahasiswa, pisahkan dengan koma (misalnya: 80, 75, 90): ");
        String inputNilai = scanner.nextLine();
        String[] nilaiArray = inputNilai.split(",");

        if (nilaiArray.length == mahasiswaMap.size()) {
            int index = 0;
            for (Student mahasiswa : mahasiswaMap.values()) {
                try {
                    int nilai = Integer.parseInt(nilaiArray[index].trim());
                    mahasiswa.setNilai(nilai);
                    index++;
                } catch (NumberFormatException e) {
                    System.out.println("Nilai tidak valid untuk mahasiswa " + mahasiswa.nim);
                }
            }
        } else {
            System.out.println("Jumlah nilai tidak sesuai dengan jumlah mahasiswa. Nilai tidak dimasukkan untuk mahasiswa yang salah.");
        }
    }

    private static void tampilkanHasil(Map<String, Student> mahasiswaMap, int totalNilai, int jumlahMahasiswa, int ambangBatas) {
        System.out.println("\nNilai Kelas Algoritma dan Pemrograman:");
        System.out.println("-------------------------------------------------");
        System.out.printf("| %-3s | %-20s | %-20s | %-5s | %-10s |\n", "No", "Nama", "NIM", "Nilai", "Status");
        System.out.println("-------------------------------------------------");

        int index = 1;
        for (Student mahasiswa : mahasiswaMap.values()) {
            int nilai = mahasiswa.getNilai();
            String status = (nilai >= ambangBatas) ? "Lulus" : "Gagal";
            System.out.printf("| %-3d | %-20s | %-20s | %-5d | %-10s |\n", index++, mahasiswa.nama, mahasiswa.nim, nilai, status);
        }

        System.out.println("-------------------------------------------------");

        double rataRataNilai = (double) totalNilai / jumlahMahasiswa;
        System.out.printf("Ambang batas kelulusan (KKM): %d\n", ambangBatas);
        System.out.printf("Rata-rata Nilai: %.2f\n", rataRataNilai);
    }
}

class Student {
    String nim;
    String nama;
    private int nilai;

    public Student(String nim, String nama) {
        this.nim = nim;
        this.nama = nama;
    }

    public void setNilai(int nilai) {
        this.nilai = nilai;
    }

    public int getNilai() {
        return nilai;
    }
}