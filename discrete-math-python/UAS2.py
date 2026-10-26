import numpy as np

def input_linear_equation():
    print("\n=== Persamaan Linear ===")
    a = float(input("Masukkan koefisien x: "))
    b = float(input("Masukkan koefisien y: "))
    c = float(input("Masukkan konstanta: "))
    x = float(input("Masukkan nilai x: "))
    hasil = a * x + b
    print(f"Hasil persamaan linear {a}x + {b} = {c} adalah: {hasil}")

def himpunan_operations():
    print("\n=== Operasi Himpunan ===")
    A = set(map(int, input("Masukkan elemen himpunan A (pisahkan dengan spasi): ").split()))
    B = set(map(int, input("Masukkan elemen himpunan B (pisahkan dengan spasi): ").split()))
    print("A \u222A B (Union):", A | B)
    print("A \u2229 B (Intersection):", A & B)
    print("A - B (Difference):", A - B)

def logic_operations():
    print("\n=== Logika Matematika ===")
    p = bool(int(input("Masukkan nilai p (1 untuk True, 0 untuk False): ")))
    q = bool(int(input("Masukkan nilai q (1 untuk True, 0 untuk False): ")))
    print(f"p AND q: {p and q}")
    print(f"p OR q: {p or q}")
    print(f"NOT p: {not p}")
    print(f"p XOR q: {p ^ q}")

def matrix_operations():
    print("\n=== Operasi Matriks ===")
    print("Masukkan elemen matriks 2x2 pertama:")
    mat1 = np.array([[int(input("Masukkan elemen (1,1): ")), int(input("Masukkan elemen (1,2): "))],
                     [int(input("Masukkan elemen (2,1): ")), int(input("Masukkan elemen (2,2): "))]])
    print("Masukkan elemen matriks 2x2 kedua:")
    mat2 = np.array([[int(input("Masukkan elemen (1,1): ")), int(input("Masukkan elemen (1,2): "))],
                     [int(input("Masukkan elemen (2,1): ")), int(input("Masukkan elemen (2,2): "))]])
    print("Penjumlahan Matriks:\n", mat1 + mat2)
    print("Perkalian Matriks:\n", np.dot(mat1, mat2))

def solve_story_problem():
    print("\n=== Soal Cerita ===")
    print("Seorang petani memiliki ayam dan kambing dengan jumlah total kaki adalah 40. Jika jumlah ayam adalah 10, berapa jumlah kambing?")
    jumlah_ayam = 10
    total_kaki = 40
    kaki_kambing = 4
    kaki_ayam = 2
    jumlah_kambing = (total_kaki - (jumlah_ayam * kaki_ayam)) / kaki_kambing
    print(f"Jumlah kambing adalah {jumlah_kambing}")

def main():
    while True:
        print("\n=== Project Matematika Informatika ===")
        print("1. Persamaan Linear")
        print("2. Operasi Himpunan")
        print("3. Logika Matematika")
        print("4. Operasi Matriks")
        print("5. Soal Cerita")
        print("6. Keluar")
        choice = int(input("Pilih opsi (1-6): "))

        if choice == 1:
            input_linear_equation()
        elif choice == 2:
            himpunan_operations()
        elif choice == 3:
            logic_operations()
        elif choice == 4:
            matrix_operations()
        elif choice == 5:
            solve_story_problem()
        elif choice == 6:
            print("Keluar dari program. Terima kasih!")
            break
        else:
            print("Pilihan tidak valid. Silakan coba lagi.")

if __name__ == "__main__":
    main()
