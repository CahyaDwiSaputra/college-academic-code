import numpy as np

a = np.array([[2,4,6], [1,3,5], [1,2,3]])
b = np.array([[3,2,1], [6,5,4], [2,4,5]])

print ("Hasil perkalian matriks A dan B")
c=np.matrix(a) * np.matrix(b)
print ('  \n',c )