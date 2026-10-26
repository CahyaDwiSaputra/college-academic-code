import numpy as np

def satu_variabel():
    print("\n=== Persamaan Linear Satu Variabel ===")
    print("Masukkan nilai-nilai untuk persamaan:")
    koefisien = int(input("Masukkan koefisien x: "))
    konstanta = int(input("Masukkan konstanta (gunakan negatif jika perlu): "))
    hasil = int(input("Masukkan hasil persamaan: "))

    print(f"Persamaan: {koefisien}x + ({konstanta}) = {hasil}")
    nilai_x = (hasil - konstanta) / koefisien

    print(f"Solusi: x = {nilai_x}\n")
def dua_variabel():
    print("\n=== Persamaan Linear Dua Variabel ===")
    print("Masukkan nilai-nilai untuk persamaan pertama:")
    a1 = int(input("Koefisien x: "))
    b1 = int(input("Koefisien y: "))
    c1 = int(input("Hasil: "))

    print("Masukkan nilai-nilai untuk persamaan kedua:")
    a2 = int(input("Koefisien x: "))
    b2 = int(input("Koefisien y: "))
    c2 = int(input("Hasil: "))

    matriks_a = np.array([[a1, b1], [a2, b2]])
    matriks_b = np.array([c1, c2])

    hasil_akhir = np.linalg.solve(matriks_a, matriks_b)
    print(f"Solusi: x = {hasil_akhir[0]}, y = {hasil_akhir[1]}\n")

def tiga_variabel():
    print("\n=== Persamaan Linear Tiga Variabel ===")
    print("Masukkan nilai-nilai untuk persamaan pertama:")
    a1 = int(input("Koefisien x: "))
    b1 = int(input("Koefisien y: "))
    c1 = int(input("Koefisien z: "))
    d1 = int(input("Hasil: "))

    print("Masukkan nilai-nilai untuk persamaan kedua:")
    a2 = int(input("Koefisien x: "))
    b2 = int(input("Koefisien y: "))
    c2 = int(input("Koefisien z: "))
    d2 = int(input("Hasil: "))

    print("Masukkan nilai-nilai untuk persamaan ketiga:")
    a3 = int(input("Koefisien x: "))
    b3 = int(input("Koefisien y: "))
    c3 = int(input("Koefisien z: "))
    d3 = int(input("Hasil: "))

    matriks_a = np.array([[a1, b1, c1], [a2, b2, c2], [a3, b3, c3]])
    matriks_b = np.array([d1, d2, d3])

    hasil_akhir = np.linalg.solve(matriks_a, matriks_b)
    print(f"Solusi: x = {hasil_akhir[0]}, y = {hasil_akhir[1]}, z = {hasil_akhir[2]}\n")

def persamaan_linear():
    while True:
        print("\n=== Menu Persamaan Linear ===")
        print("1. Satu Variabel")
        print("2. Dua Variabel")
        print("3. Tiga Variabel")
        print("0. Kembali ke menu utama")

        try:
            pilihan = int(input("Pilih menu: "))
            if pilihan == 1:
                satu_variabel()
            elif pilihan == 2:
                dua_variabel()
            elif pilihan == 3:
                tiga_variabel()
            elif pilihan == 0:
                break
            else:
                print("Pilihan tidak valid.")
        except ValueError:
            print("Input harus berupa angka.")

def logika_matematika():
    print("----- Logika Matematika -----")

    try:
        skor = int(input("Masukkan skor UTBK Anda: "))

        if skor > 650:
            print("Diterima di Program Studi Teknik Informatika UNS")
        else:
            print("Tidak diterima di Program Studi Teknik Informatika UNS")
    except Exception as e:
        print(f"Terjadi kesalahan: {e}")
    print("\n")

def himpunan():
    print("- Himpunan -")

    try:
        def input_himpunan(label):
            print(f"Masukkan elemen untuk {label} (pisahkan dengan spasi pada tiap baris, tekan Enter untuk selesai):")
            data_himpunan = []
            while True:
                row = input(f"Baris ke-{len(data_himpunan) + 1}: ").strip()
                if row == "":
                    break
                data_himpunan.append(set(map(int, row.split())))
            return data_himpunan

        print("Input Himpunan A:")
        A = input_himpunan("A")

        print("Input Himpunan B:")
        B = input_himpunan("B")

        print("Gabungan per baris:")
        for i in range(min(len(A), len(B))):
            hasil_union = A[i] | B[i]
            print(f"Gabungan A[{i + 1}] dan B[{i + 1}] = {hasil_union}")

        print("Irisan per baris:")
        for i in range(min(len(A), len(B))):
            hasil_intersection = A[i] & B[i]
            print(f"Irisan A[{i + 1}] dan B[{i + 1}] = {hasil_intersection}")

        print("Masukkan ruang semesta untuk komplement:")
        universe = set(map(int, input("Masukkan ruang semesta (pisahkan dengan spasi): ").split()))

    except ValueError as ve:
        print(f"Input tidak valid: {ve}")
    except Exception as e:
        print(f"Terjadi kesalahan: {e}")
    print("\n")

def matriks():
    print("- Matriks -")

    try:
        rows_A = int(input("Masukkan jumlah baris matriks A: "))
        cols_A = int(input("Masukkan jumlah kolom matriks A: "))
        matriks_A = []
        print("Masukkan elemen-elemen matriks A:")
        for i in range(rows_A):
            row = list(map(float, input(f"Baris {i+1}: ").split()))
            if len(row) != cols_A:
                raise ValueError(f"Jumlah elemen pada baris {i + 1} harus sama dengan jumlah kolom ({cols_A}).")
            matriks_A.append(row)
        matriks_A = np.array(matriks_A)

        rows_B = int(input("Masukkan jumlah baris matriks B: "))
        cols_B = int(input("Masukkan jumlah kolom matriks B: "))
        matriks_B = []
        print("Masukkan elemen-elemen matriks B:")
        for i in range(rows_B):
            row = list(map(float, input(f"Baris {i+1}: ").split()))
            if len(row) != cols_B:
                raise ValueError(f"Jumlah elemen pada baris {i + 1} harus sama dengan jumlah kolom ({cols_B}).")
            matriks_B.append(row)
        matriks_B = np.array(matriks_B)

        if matriks_A.shape == matriks_B.shape:
            hasil_penjumlahan = matriks_A + matriks_B
            print("Penjumlahan Matriks A dan B:")
            print(hasil_penjumlahan)
        else:
            print("Ukuran matriks A dan B tidak cocok untuk penjumlahan.")

        if matriks_A.shape[1] == matriks_B.shape[0]:
            hasil_perkalian = np.dot(matriks_A, matriks_B)
            print("Perkalian Matriks A dan B:")
            print(hasil_perkalian)
            
        else:
            print("Matriks A bukan matriks kuadrat, tidak dapat dihitung determinannya.")
    except ValueError as ve:
        print(f"Input tidak valid: {ve}")
    except Exception as e:
        print(f"Terjadi kesalahan: {e}")
    print("\n")

def main():
    while True:
        print("Pilih materi yang ingin dipelajari:")
        print("1. Persamaan Linear")
        print("2. Logika Matematika")
        print("3. Himpunan")
        print("4. Matriks")
        print("5. Keluar")

        try:
            pilihan = input("Masukkan pilihan (1-5): ")

            if pilihan == '1':
                persamaan_linear()
            elif pilihan == '2':
                logika_matematika()
            elif pilihan == '3':
                himpunan()
            elif pilihan == '4':
                matriks()
            elif pilihan == '5':
                print("Terima kasih! Program selesai.")
                break
            else:
                print("Pilihan tidak valid, silakan pilih antara 1 dan 5.")
        except Exception as e:
            print(f"Terjadi kesalahan: {e}")

if __name__ == "__main__":
    main()