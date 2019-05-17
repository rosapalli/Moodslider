Mars Rover  

A squad of robotic rovers are to be landed by NASA on a plateau on Mars. This plateau must be navigated by the rovers.
A rover’s position and location is represented by a combination of x and y co-ordinates and a letter representing one 
of the four cardinal compass points. The plateau is divided up into a grid to simplify navigation. In order to control 
a rover, NASA sends a simple string of letters. The possible letters are ‘L’, ‘R’ and ‘M’. ‘L’ and ‘R’ makes the rover 
spin 90 degrees left or right respectively, without moving from its current spot. ‘M’ means move forward one grid point, 
and maintain the same heading. 

Design
The principles that have driven the design of this application have been: OOP, TDD, and simplicity. 
The application consists of three main classes:
- plateau: has set dimensions and passes these as an array
- rover: has set position and passes these as a string
- movement: changes the coordinates and direction of the rover in relationship to the dimensions of the plateau
These are supported by:
- factory: instantiates objects for each class as required
The index file reads the input provided through a text file and calls the relevant methods within the factory class.

Assumptions
- More than one rover can pass through the same coordinates at one given time
- Several movement instructions can be processed in one go

Getting Started
Download and extract MarsRover.zip

Prerequisites
PHP 7.0
PHPUnit 3.7.21

Running the application
- in terminal, navigate to the project directory
- edit input.txt to provide input (sample data from instructions is provided)
- run php index.php 

Improvements
- removed unnecessary singleton pattern from Factory
- introduced abstract classes for movements (open/close principle)
- improved dependency management (dependency inversion principle)
- rover knows about plateau, movement knows about rover (single responsibility principle)
- changed index file to cater for unlimited number of rovers
- reviewed pattern for movement creation (less unnecessary objects - increased efficiency)
- changed namings
- reviewed testing

