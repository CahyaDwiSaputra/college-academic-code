def implication(p, q):
    return not(p) or q

print(f'| {"Jika tidak ada tugas":^20s} | {"saya akan pergi bersamanya":^25s} | {"p -> q":^10s} |')
for p in [True, False]:
    for q in [True, False]:
        a = implication(p, q)
        print(f'| {p!s:20} | {q!s:25} | {a!s:10} |')