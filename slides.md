footer: CC BY-NC 4.0 Justin Yost
slidenumbers: true

# Grab Bag of PHP Goodies

## Justin Yost
## Project Lead at Loadsys

---

## What are we learning?

* Traits
* Interfaces
* Abstract Classes
* Magic Methods
* Singletons
* Namespaces

---


## Why learn this stuff?

* There is a better way
* More tools in your toolbag
* All solve specific problems
* PHP moves along, welcome to the future

---

## Trait

A trait is a set of methods that we can use to extend our classes. It's not a standard inheritance model, instead it permits horizontal code reuse.

---

![fit](https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/MVC-Process.svg/500px-MVC-Process.svg.png)

---

## Trait

### Code Example

---

## Interface

An interface is an abstract type that contains no data or code, but defines behaviors as method signatures. This gives you the ability to define the public api for a class, without providing the implementation details.

---

## Interface

Interfaces solve the problem of you need to ensure other coders meet some specific API, but you don't care about their implementation details of how they implement that same API.

---

## Interface

Why not just ship a base class and provide that. Sometimes you need to provide the implementation separate from the API.

---

## PSR Interfaces

* Logger Interface (PSR-3)
* Caching Interface (PSR-6)
* HTTP Message Interface (PSR-7)

---

## Interface

An interface is a contract that says, I have these methods, that take these inputs and return this. You can implement this in any way and I'll respect it.

---

## Interface

### Code Example

---

## Interface and Trait

This is a great approach for shipping code to other developers that they might want to modify or update, you provide the implementation and the api independently.

---

## Typehints

Typehint to an interface, not a trait

---

## Abstract Class

Abstract Class blends an interface with a trait. It provides a way to provide both the api and the implementation, without needing a full class that includes everything.

---

## Abstract Class 

Fruit vs. Apple and Grape

---

## Abstract Class 

### Code Example

---

## Abstract Class vs Interface

Abstract class is for you, Interface is for other developers. Abstract class provides an implementation that you typically don't want to ship to other developers but use internally.

---

## Magic Methods

Methods that happen without you specifically calling them. They just magically happen, for you.

---

## Magic Methods

PHP Magic methods start with a `__`

---

## Magic Methods

* `__construct` and `__destruct`
* `__sleep` and `__wakeup`
* `__invoke`
* `__set` and `__get`
* and more

---

## Magic Methods

### Code Example

---

## Singleton

A singleton is a class that can only every be instantiated once. Once we have an instance of the class as long as we are in the same PHP request, we do not create multiple instances of this class with different properties.

---

## Singleton

* Database Connection
* Configuration
* DI Libraries

---

## Singleton

### Code Example

---

## Namespace

Everything in it's place and place for everything.

---

## Namespace

Multiple Classes with the same name.

---

## Namespace

Allows for easier import and use of external packages and libraries.

---

## Namespace

### Code Example

---

## Grab Bag Portion

* Typehints
* Composer
* Exceptions
* Closures
* Iterators

---

## Takeaways

* Learn and keep up with your language

---

# Thanks/Questions?

* twitter.com/justinyost
* github.com/justinyost
* justinyost.com
* loadsys.com
* lynda.com/justinyost
