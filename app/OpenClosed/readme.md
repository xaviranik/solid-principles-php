Open Closed Principle
---------------------

- A module will be said to be open if it is still available for extension. For example, it should be possible to add fields to the data structures it contains, or new elements to the set of functions it performs.
- A module will be said to be closed if [it] is available for use by other modules. This assumes that the module has been given a well-defined, stable description (the interface in the sense of information hiding).

Two rule of Open Closed Principle:
----------------------------------
1. Separate extensible behavior behind an Interface.
2. Flip the dependencies.

