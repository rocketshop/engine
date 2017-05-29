# Rocket Engine
> The Framework

#### Repositories
Read - [The repository pattern](http://shawnmc.cool/the-repository-pattern) to get a better overview of what a repository is and why we want to use it.

#### Models and Eloquent
We still want to take advantage of eloquent, but we don't want our app know about it, be reliant on it, therefor we create abstract entity classes that our models needs to implement. By doing so we interact with the interface and not eloquent directly, and all we need to do to change from eloquent is to implement the same interface. _The basics of abstraction_

#### Immutable databases
We want our data to be immutable so we have a full history of what has happned. This is important for a variety of different reasons, one is for debugging another is for country-specific regulations for taxes and the likes.

_* Our implementation does not need to know about this immutability, remember to abstract the data-layer. We could just as well use a history table instead of immutable append-only tables. **Keep responsibility where it's supposed to be.**_

-- 
> A modern e-commerce platform  
_- The Rocket Shop Team_