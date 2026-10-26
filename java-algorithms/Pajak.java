import java.util.Scanner;

public class Pajak{
    public static void main (String[]args){
        System.out.println("Perhitungan Pajak");
        System.out.println("-----------------");

        long penghasilan, pajak;

        Scanner kbd = new Scanner(System.in);
        System.out.println("penghasilan kena pajak =");
        penghasilan = kbd.nextLong();

        if (penghasilan > 500000000)
            pajak= 2500000 + 15000000 + 87500000 + (penghasilan - 500000000)*30/100;
        else
            if (penghasilan > 150000000)
                pajak = 2500000 + 15000000 + (penghasilan - 150000000)*25/100;
            else
                if (penghasilan > 500000000)
                pajak = 2500000 + (penghasilan - 500000000)*15/100;

                else
                pajak = penghasilan *5/100;

        System.out.println("pajak=" + pajak);
    }
}