c = int (0)

while c < 10:
       n1 = int(input(" Digite um numero ? "))
       
       p = str(input(" Voce quer parar ? (s/n) "))
       
       sp = int(0)
       
       if n1 % 2 == 0:
           print("O número é par")
           sp = sp + n1
       else:
           print("O número é ímpar")
           
       if(p == "s"):
            print("Você escolheu parar")
            break
       if(p == "n"):
            print("Você escolheu continuar")
            continue
       c = c + 1
           
print("A soma dos números pares é: "+ str(sp))     

