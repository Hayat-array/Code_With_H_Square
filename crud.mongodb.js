use("CrudDb")
// console.log(db)
db.createCollection("courses")
db.course.insertOne({
    name:"Hayat web dev free course",
    price: 0,
    assingment: 12,
    project: 45
})
db.courses.insertMany([
  {
    name: "Hayat web dev free course",
    price: 0,
    assignment: 12,
    project: 45
  },
  {
    name: "Python Crash Course",
    price: 5000,
    assignment: 8,
    project: 10
  },
  {
    name: "Full Stack JavaScript",
    price: 15000,
    assignment: 15,
    project: 25
  },
  {
    name: "Frontend Masterclass",
    price: 12000,
    assignment: 10,
    project: 20
  },
  {
    name: "Backend with Node.js",
    price: 14000,
    assignment: 9,
    project: 18
  },
  {
    name: "Machine Learning Bootcamp",
    price: 25000,
    assignment: 20,
    project: 30
  }
])
let b= db.course.find({price:0})
console.log(b);
