public class MatriksXY {

    public static void findXY() {
        // Matriks A = [2 2x; -3y 5]
        // Matriks B = [2 6; -12 5]

        // 2x = 6   -> x = 6 / 2 = 3
        // -3y = -12 -> y = -12 / -3 = 4

        double x = 6 / 2.0;  // x = 3
        double y = -12 / -3.0;  // y = 4

        System.out.println("x: " + x);
        System.out.println("y: " + y);
    }

    public static void main(String[] args) {
        findXY();
    }
}
