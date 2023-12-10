//Object Creation
let person = {
    "name": "Abhay Bhosle",
    "age": 21,
    "branch": "CSE",
    address: {
        "city": "Bangalore",
        zip: 585292
    }
};
person.age = 67; //Dot Notation
person['age'] = 78; //Bracket Notation
let ageOfAbhay = person.age; //Access with variables
console.log(`Age of Abhay is = ${ageOfAbhay}`);
console.log(person);
//Constructor Function
// function Person(name,age){
//     this.name = name;
//     this.age = age;
// }
// let john = new Person("John",33);
// console.log(john);


let currDate = new Date();
let hours = currDate.getHours();
let minutes = currDate.getMinutes();
console.log(currDate);
console.log(currDate.getFullYear());
console.log(hours);
console.log(minutes);
