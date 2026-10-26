import java.util.Scanner;

public class Kuadrat2 {
    public static void main(String[] args) {
        String nama, namaDuaKaliTua;
        int umur;

        Scanner input = new Scanner(System.in);

        System.out.println("Masukkan Nama Anda:");
        nama = input.nextLine(); 

        System.out.println("Masukkan Umur Anda:");
        umur = input.nextInt();

        input.nextLine(); 

        System.out.println("Masukkan nama seseorang yang umurnya dua kali lebih tua dari Anda:");
        namaDuaKaliTua = input.nextLine();

        int umurDuaKaliTua = umur * 2;

        System.out.println("Nama Anda: " + nama);
        System.out.println("Umur Anda: " + umur);
        System.out.println("Nama seseorang yang dua kali lebih tua dari Anda: " + namaDuaKaliTua);
        System.out.println("Umur seseorang yang dua kali lebih tua dari Anda: " + umurDuaKaliTua);
    }
}