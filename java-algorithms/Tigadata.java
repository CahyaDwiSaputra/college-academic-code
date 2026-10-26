import java.util.Scanner;

public class Tigadata{
    public static void main(String[]args){
        Scanner kbd = new Scanner(System.in);
        System.out.print("Masukkan data: ");
        String Nama = kbd.next();
        String NIM = kbd.next();
        String Prodi = kbd.next();

        System.out.println("Nama = " +Nama);
        System.out.println("NIM  = " +NIM);
        System.out.println("Prodi = " +Prodi);
    }
}