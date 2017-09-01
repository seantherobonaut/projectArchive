/*
this is an example oop

https://zeekat.nl/articles/constructors-considered-mildly-confusing.html

*/

var color = 'black';

function Box()
{
   // private property
   var color = '';

   // private constructor ...just the first function?
   var __construct = function() {
       alert("Object Created.");
       color = 'green';
   }()

   // getter
   this.getColor = function() {
       return color;
   }

   // setter
   this.setColor = function(data) {
       color = data;
   }

}

var b = new Box();

alert(b.getColor()); // should be green

b.setColor('orange');

alert(b.getColor()); // should be orange

alert(color); // should be black