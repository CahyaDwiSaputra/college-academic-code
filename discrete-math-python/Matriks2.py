jum_baris = 3
jum_kolom = 3

matriksA= [[2,4,6],
           [1,3,5],
           [1,2,3]]

matriksB= [[3,2,1],
           [6,5,4],
           [2,4,5]]

for baris in range (0, jum_baris):
    for kolom in range (0, jum_kolom):
        hasil = 2 * matriksA [baris][kolom]+ \
                matriksB [baris][kolom]
        print('%4d' % hasil, end='')

    print()