import java.util.Scanner;

public class Diskonn {
    public static void main (String[]args){
        System.out.println("Penentuan diskon");
        System.out.println("----------------");

        long besarPembelian, besarPembayaran, diskon;

        Scanner kbd = new Scanner (System.in);
        System.out.print("Nilai nominal pembelian =");
        besarPembelian = kbd.nextLong();
        
        
        if (besarPembelian >= 500000) 
            diskon =(long)(0.20*besarPembelian);
        else 
            if (besarPembelian >= 200000)
                diskon=(long)(0.05 *besarPembelian);
            else 
                diskon = 0;

        besarPembayaran = besarPembelian - diskon;

        System.out.println();
        System.out.println("Pembelian = " + besarPembelian);
        System.out.println("Diskon = " + diskon);
        System.out.println("Pembayaran ="+ besarPembayaran);
    }
    
}
