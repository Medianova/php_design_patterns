# Abstract Factory

Definition: **Provides an interface for creating families of related or dependent objects without specifying their concrete classes.**

## Participants

- **AbstractFactory**: declares an interface for operations that create abstract product objects
- **ConcreteFactory**: implements the operation to create concrete product objects
- **AbstractProduct**: declares an interface for a type of product object
- **ConcreteProduct**: defines a product object to e created by the corresponding concrete factory, implements the _AbstractProduct_ interface
- **Client**: uses only interfaces declared by _AbstractFactory_ and _AbstractProduct_ classes

## Implementation

In this example we are implementing two car factories: Nissan and Chevrolet factories. Each car factory can create a car and each car can have one body, array of tiers, tank and an engine.

The idea is to have a code that can easily create new types of cars, each having different logic, but from client perspective we are not aware of how this cars operate internally. All we want to do is create new types of cars and use them.

### Relations

- **AbstractFactory**: AbstractCarFactory
- **ConcreteFactory**: ChevroletFactory, NissanFactory
- **AbstractProduct**: AbstractBody, AbstractCar, AbstractEngine, AbstractTank, AbstractTier
- **ConcreteProduct**: ChevroletBody, ChevroletCar, ChevroletEngine, ChevroletTank, ChevroletTier, NissanBody, NissanCar, NissanEngine, NissanTank, NissanTier
- **Client**: client is realised within simple example.php script

### Applicability

Use Abstract factory design pattern when:

- a system should be independent of how its products are created, composed and represented
- a system should be configured with one of multiple families of products
- a family of related product objects is designed to be used together, and you need to enforce this constraint
- you want to provide a class library of products, and you want to reveal just their interfaces, not their implementations

## Consequences

### Pros:

- it isolates concrete classes
- it makes exchanging products families easy
- it promotes consistency among products

### Cons:

- supporting new kinds of products is difficult
- Abstract factory pattern is very rigid