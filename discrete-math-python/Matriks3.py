jum_baris = 3
jum_kolom = 3

matriksA = [[2, 4, 6],
            [1, 3, 5],
            [1, 2, 3]]

matriksB = [[3, 2, 1],
            [6, 5, 4],
            [2, 4, 5]]

hasil = [[0 for _ in range(jum_kolom)] for _ in range(jum_baris)]

for i in range(jum_baris):
    for j in range(jum_kolom):
        for k in range(jum_kolom):
            hasil[i][j] += matriksA[i][k] * matriksB[k][j]

print("Hasil Perkalian Matriks A dan B:")
for baris in hasil:
    for elemen in baris:
        print('%4d' % elemen, end=' ')
    print()
