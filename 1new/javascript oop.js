

/*------------------Best---------------*/

    
          //public this.name
          //private var name
          //Statuc Class.name

          //You can't use inheritance
          //Your constructors can be declared at the top of the class, but must be called from the bottom of the class...
            //parameters for constructors must be in the class declaration and in the constructor declaration


          var AClass = function()
          {
            var AClass = function()
            {
              alert("Instance of AClass created!");
            }
            AClass.staticTest = function()
            {
              return "I am static";
            }
            var getNum = function()
            {
              return 8;
            }
            this.getStatus = function()
            {
              return "nope"+AClass.staticTest()+getNum();
            }
            AClass();
          }

          var one = new AClass;
          console.log(one.getStatus());


/*-------------------------------------*/
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



/*------------new-------------------*/

var color = 'black';

function Box() {
  var self = this;
  self.color = 'purple';
    
  // private constructor 
  var __construct = function() {
    self.changeToRed();
    alert(self.color); // should be red
    self.color = 'green';
  };

  // public property
  self.color = '';

  // getter
  self.getColor = function() {
    return self.color;
  };

  // setter
  self.setColor = function(color) {
    self.color = color;
  };

  // testing callable method from contructor
  self.changeToRed = function() {
    self.color = 'red';
  };

  __construct();

}

var b = new Box();

alert(b.getColor()); // should be green

b.setColor('orange');

alert(b.getColor()); // should be orange

alert(color); // should be black