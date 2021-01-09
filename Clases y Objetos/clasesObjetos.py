########################################################################
# Clases y Objetos
#######################################################################


class operaciones:

    def __init__(self, num1,num2): #contructor
        self.num1 = num1
        self.num2 = num2

    def suma(self):
        return self.num1+self.num2

    def resta(self):
        return self.num1-self.num2
        
class operaciones2:
    def __init__(self, nume1,nume2): #contructor
        self.nume1 = nume1
        self.nume2 = nume2

    def multiplicacion(self):
        return self.nume1*self.nume2


#Objeto
obj = operaciones(5, 6)
print(obj.suma())


obj2 = operaciones2(5, 6)
print(obj2.multiplicacion())