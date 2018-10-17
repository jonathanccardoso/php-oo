# PHP-OO

## Pillars of POO

- Herança, Capsulamento, Polimorfismo.

## Encapsulation
Ajuda em:
- Tornar mudanças invisíveis
- Facilitar reutilização do codigo
- Reduzir efeitos colaterais.

## extends (Herança)
Funciona como se fosse uma parentesco.
Ex: Um filho herda heranças genéticas do pai e nas classes eles têm os mesmos atributos e funções da classe pai.

## Objets
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

## Private
Acessa somente dentro da classe.

## Protected 
Acessar de dentro da função e derivadas como heranças.

## Public 
Acessa de todos os lugares do código.

## Construct 
Função que incrementa atributos facilmente sem 'sets' na classe.

## Herança
- Implementação
- Diferença (com adição de objetos na classe)
	- Classe abstrata: Não pode ser instaciada. Só pode servir como progenitora.
	- Método abstrato: Declarado, mas não implementado na progenitora.
	- Classe final: Não pode ser herdada por outra classe. Obrigatoriamente folha (FINAL) (sem filhos)
	- Método final: Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado.
	* a sobrepossição no php é automatica.(polimorfismo) 

## Polimorfismo
O mesmo nome representa vários comportamentos diferentes. "Muitas formas de acontecer".

- Sobreposição
	Acontecendo com assinaturas iguais, em classes diferentes.
- Sobrecarga
	Acontece com assinaturas diferentes, na mesma classe.
	* No php ele não suportsa a sobrecarga. Logo assim você tem que mudar os nomes dos metodos.

## Exercises
- Nome da prorria classe 
- __construct A atribuição acontece mesmo se não instanciada.

* Classe mãe (superclasse)
* Ancestral pula a mãe e o resto para baixo é ancestral
* Descendente pula a filha e o resto é descentende.
* um metodo abstrato é um metodo declarado e não de implementado, assim como nas interfaces
* pode-se sim sobrepor um comportamento de uma superclasse em uma subclasse.
* 'final' -> não pode ter subclasses, contudo ela pode ser instanciada e ter métodos.
