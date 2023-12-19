// Using object literal notation
let personObject = {
    name: "Abhay Bhosle",
    age: 22,
    degree: "B-Tech",
};

// Using constructor function
function Person(name, age, degree) {
    this.name = name;
    this.age = age;
    this.degree = degree;
}

let p1 = new Person('John', 33, "BCA");
console.log(p1);

console.log(p1.age);      // Accessing property using dot notation
console.log(p1["name"]);  // Accessing property using bracket notation
