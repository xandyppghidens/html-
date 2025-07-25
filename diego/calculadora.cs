using System;

class Calculadora
{
    static void Main()
    {
        Console.WriteLine("Calculadora Simples em C#");
        Console.Write("Digite o primeiro número: ");
        double num1 = Convert.ToDouble(Console.ReadLine());

        Console.Write("Digite o operador (+, -, *, /): ");
        char operador = Console.ReadKey().KeyChar;
        Console.WriteLine();

        Console.Write("Digite o segundo número: ");
        double num2 = Convert.ToDouble(Console.ReadLine());

        double resultado = 0;
        bool valido = true;

        switch (operador)
        {
            case '+':
                resultado = num1 + num2;
                break;
            case '-':
                resultado = num1 - num2;
                break;
            case '*':
                resultado = num1 * num2;
                break;
            case '/':
                if (num2 != 0)
                    resultado = num1 / num2;
                else
                {
                    Console.WriteLine("Erro: Divisão por zero!");
                    valido = false;
                }
                break;
            default:
                Console.WriteLine("Operador inválido!");
                valido = false;
                break;
        }

        if (valido)
            Console.WriteLine($"Resultado: {resultado}");
    }
}