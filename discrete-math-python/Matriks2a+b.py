jum_baris = 3
jum_kolom = 3

matriksA = [[1, 2, 3],
            [2, 3, 4],
            [2, 5, 1]]

matriksB = [[1, 1, 3],
            [1, 1, 4],
            [2, 5, 1]]

# Membuat matriks hasil untuk 2A + B dengan inisialisasi 0
hasil = [[0 for _ in range(jum_kolom)] for _ in range(jum_baris)]

# Menghitung 2A
for i in range(jum_baris):
    for j in range(jum_kolom):
        hasil[i][j] = 2 * matriksA[i][j]

# Menambahkan B ke hasil
for i in range(jum_baris):
    for j in range(jum_kolom):
        hasil[i][j] += matriksB[i][j]

# Menampilkan hasil 2A + B
print("Hasil 2A + B:")
for baris in hasil:
    for elemen in baris:
        print('%4d' % elemen, end=' ')
    print()
