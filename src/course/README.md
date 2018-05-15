# PHP-POO

## Pillars of POO ##

- Herança, Capsulamento, Polimorfismo.

## Encapsulation ##
Ajuda em:
- Tornar mudanças invisíveis
- Facilitar reutilização do codigo
- Reduzir efeitos colaterais.

## extends (Herança) ##
Funciona como se fosse uma parentesco.
Ex: Um filho herda heranças genéticas do pai e nas classes eles têm os mesmos atributos e funções da classe pai.

## Objets ##
Algo material ou abstrata podendo ter sentidos e descritiva por meio de 'caracteristica, comportamento e estado' atual, onde tem ATRIBUTOS, MÉTODOS, ESTADO;

Ex: CANETA
-ATRIBUTOS: modelo, cor, ponta, tampada
-MÉTODOS (função): escrever, rabiscar, pintar, tampar, destampar
-ESTADO: aberto, fechado.

Podendo ser INSTANCIADA que é adições no construtor da classe.
Ex: 
c1 = new Caneta;
c1.cor = "Azul";
c1.tampada = false;
c1.rabiscar();

Têm propriedades e comportamentos;
Cada objeto tem uma responsabilidade, mas pode se relacionar com outros objetos;
Precisam de uma estrutura, chamada de classe, podendo ser criados e instanciados;
Objeto é a instância de uma classe e sempre têm atributos.

## Private ##
Acessa somente dentro da classe.

## Protected ##
Acessar de dentro da função e derivadas como heranças.

## Public ##
Acessa de todos os lugares do código.

## Construct ##
Função que incrementa atributos facilmente sem 'sets' na classe.
