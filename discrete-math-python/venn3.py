from matplotlib_venn import venn2
from matplotlib import pyplot as plt

A = {1,3,5,6,7}
B = {2,3,4,6,8}

venn2([A,B],set_labels=('A','B'))
plt.show()