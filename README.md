# polygon-manager
Polygon Manager Project

## ARCHITECTURE

This project consists of one controller (PolygonController) that receives requests for area and perimeter calculation.

The injected interface in the controller defines the shape of the polygon. Forcing the controller to depend on an interface corresponds with the Dependency Inversion principle in SOLID.

Six models are defined in this project; out of which 4 are responsible for calculation of area and perimeter of each shape, one interface, and one model that handles the output format. Having a separate model for each shape helps to stay aligned with Open-closed principle in SOLID.

Furthermore, by separating the calculators from outputter the Single Responsibility Principle of SOLID has been satisfied.

For routing in this project I have used the FastRoute package.

Unit tests for all public functions are available under tests folder.

To start the project it's enough to only run the composer.

## ROUTES 

### AREA

### Triangle
Area of a triangle can be calculated in two ways. By having three sides or having the height and base. The routes are as follow.

#### By three sides
> localhost/polygon/area/triangle?hyp=10&opp=15&adj=12

#### Height and base
> localhost/polygon/area/triangle?height=10&base=30

### Rectangle
Area of a rectangle is calculated by multiplying its width to its length
> localhost/polygon/area/rectangle?width=12&length=11

#### Square
Area of a square is calculated by it's side powered by two
> localhost/polygon/area/square?side=30

#### Regular-polygon
Area of a regular polygon is calculated by 1/2 (apothem * length of one side * number of sides)
> localhost/polygon/area/regular-polygon?n=8&side=12

### PERIMETER

#### Triangle
Perimeter of a triangle can be calculated by sum of it's sides
> localhost/polygon/perimeter/triangle?hyp=10&opp=15&adj=12

#### Rectangle
Perimeter of a rectangle can be calculated by sum of all sides (2w+2l)
> localhost/polygon/perimeter/rectangle?width=10&length=20

#### Square
Perimeter of a square can be calculated by sum of all sides (4*s)
> localhost/polygon/perimeter/square?side=30

#### Regular-polygon
Perimeter of a regular-polygon can be calculated by length of one side and number of sides
> localhost/polygon/perimeter/regular-polygon?n=5&side=10