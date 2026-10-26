public class TugasRun {
    public static void main(String[] args) {
        int[] data = {5, 9, 13, 23, 21, 4};
        
        int total = 0;
        for (int n : data){
            total += n;
        }

        int banyakdata = data.length;

        double Rata = (double) total / banyakdata;

        System.out.println("Hasil RUN:");
        System.out.println("----------");
        for (int n : data) {
            System.out.println(n);
        }

        System.out.println("Total : " + total);
        System.out.println("Banyak Data : " + banyakdata);
        System.out.println("Rata-rata : " + Rata);
    }
}