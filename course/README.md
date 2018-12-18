# PHP-OO

## Pilares do POO

### Herança

Funciona como se fosse um parentesco.
Ex: Um filho herda heranças genéticas do pai e nas classes eles têm os mesmos atributos e funções da classe pai.

- Implementação
- Diferença (com adição de objetos na classe)
	- Classe abstrata: Não pode ser instaciada. Só pode servir como progenitora.
	- Método abstrato: Declarado, mas não implementado na progenitora.
	- Classe final: Não pode ser herdada por outra classe. Obrigatoriamente folha (FINAL) (sem filhos)
	- Método final: Não pode ser sobrescrito pelas suas sub-classes. Obrigatoriamente herdado.
	* A sobrepossição no php é automatica.(polimorfismo).

### Encapsulamento

Ajuda em:
- Tornar mudanças invisíveis
- Facilitar reutilização do codigo
- Reduzir efeitos colaterais.

### Polimorfismo

O mesmo nome representa vários comportamentos diferentes, "muitas formas de acontecer".
- Sobreposição
	Acontecendo com assinaturas iguais, em classes diferentes.
- Sobrecarga
	Acontece com assinaturas diferentes, na mesma classe.
	* No php ele não suportsa a sobrecarga. Logo assim você tem que mudar os nomes dos metodos.

## Objetos

Algo material ou abstrata podendo ter sentidos e descritiva por meio de 'caracteristica, comportamento e estado' atual, onde tem ATRIBUTOS, MÉTODOS, ESTADO.

Ex: CANETA
	-ATRIBUTOS: modelo, cor, ponta, tampada
	-MÉTODOS (função): escrever, rabiscar, pintar, tampar, destampar
	-ESTADO: aberto, fechado.

Podendo ser instanciada que é adições no construtor da classe.

Ex: 
c1 = new Caneta;
c1.cor = "Azul";
c1.tampada = false;
c1.rabiscar();

- Têm propriedades e comportamentos;
- Cada objeto tem uma responsabilidade, mas pode se relacionar com outros objetos;
- Precisam de uma estrutura, chamada de classe, podendo ser criados e instanciados;
- Objeto é a instância de uma classe e sempre têm atributos.

## Níveis de visibilidade

### Private
Acessa somente dentro da classe.

### Protected 
Acessar de dentro da função e derivadas como heranças.

### Public 
Acessa de todos os lugares do código.

## Exercises one

* Nome da própria classe 
* A atribuição acontece mesmo se não instanciada. Função que incrementa atributos facilmente sem 'sets' na classe.
  - __construct
  
* Classe mãe (superclasse)
* Ancestral pulando a mãe e o resto para baixo é ancestral
* Descendente pulando a filha e o resto é descentende.
* Um metodo abstrato é um metodo declarado e não de implementado, assim como nas interfaces.
* Pode-se sim sobrepor um comportamento de uma superclasse em uma subclasse.
* 'final' -> não pode ter subclasses, contudo ela pode ser instanciada e ter métodos.

## Exercises two

* "de inclusão", "paramétrico", "sobrecarga" e "sobreposição" são conceitos do Polimorfismo.
* Classe abstrata - nunca será instanciado.
* Classe final - deve ser implementação na subclasse.
* Método abstrato - não pode ser superclasse.
* Método final - não pode ser sobrescrito.
