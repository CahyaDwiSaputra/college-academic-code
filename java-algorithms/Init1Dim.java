public class Init1Dim{
    public static void main(String[]args){
        System.out.println("Inisialisasi array berdimensi satu");
        System.out.println("----------------------------------");

        int [] data = {50,77,30,1,22};
        
        System.out.println();
        System.out.println("Data pada array");
        
        for (int indeks=0; indeks<5; indeks++)
            System.out.println(data[indeks]);
    }
}