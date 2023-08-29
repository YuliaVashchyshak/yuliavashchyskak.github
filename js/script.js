 //data types

//string
const greetings = 'hello';
console.log(typeof greetings);

//number
const num = 100;
console.log(typeof num);

//boolean може бути тільки два значення
const boolTrue = true;
const boolFalse = false;
console.log(typeof boolTrue);
console.log(typeof boolFalse);

//null може змінюватись у майбутньому
let someNullValue = null;
console.log(someNullValue);

//undefined не визначене значення
let someUndeValue;
console.log(someUndeValue);

//object
const obj = {
   // name: jul,
};
obj.age = '21';
obj['hobby']='art'
console.log(obj)

// big int для чисел більших за допустиме
const bigInt = 999459545656594848848473n;
console.log(bigInt);

//symbol для додавання інших значень властивості без зміни попереднього
const user = {
    id: 10,
    age: 21,
};
const id = Symbol('some new');
user[id] = 500;
console.log(user[id]); 


const subscribers = [
    { name: 'user1', age: '20' },
    { name: 'user2', age: '21' },
    { name: 'user3', age: '22' },
    { name: 'user4', age: '23' },
    { name: 'user5', age: '24' },
    { name: 'user6', age: '25' },
    { name: 'user7', age: '19' },
    { name: 'user8', age: '18' },
    { name: 'user9', age: '26' },
    { name: 'user10', age: '17' },
    { name: 'user4', age: '23' },
    { name: 'user5', age: '24' },
    { name: 'user6', age: '25' },
    { name: 'user7', age: '19' },
    { name: 'user8', age: '18' },
    { name: 'user9', age: '26' },
    { name: 'user10', age: '17' },
    { name: 'user4', age: '23' },
    { name: 'user5', age: '24' },
    { name: 'user6', age: '25' },
    { name: 'user7', age: '19' },
    { name: 'user9', age: '26' },
    { name: 'user10', age: '17' },
    { name: 'user4', age: '23' },
    { name: 'user5', age: '24' },
    { name: 'user6', age: '25' },
    { name: 'user7', age: '19' },
    { name: 'user8', age: '18' },
    { name: 'user9', age: '26' },
    { name: 'user10', age: '17' },
    { name: 'user4', age: '23' },
    { name: 'user5', age: '24' },
    { name: 'user6', age: '25' },
    { name: 'user7', age: '19' },
    { name: 'user8', age: '18' },
    { name: 'user9', age: '26' },
    { name: 'user10', age: '17' },
]
function congratesIfMoreThan10() {
    if (subscribers.length > 10) {
        alert('Congrates!You are not alone!')
    }
}

congratesIfMoreThan10()





                //   Зміна масиву у виведенні функції!!!

const masive = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,]
function squareArr() {
    const newArr = []
    for (let i = 0; i < masive.length; i++) {
         newArr.push(masive[i] * 2)
    }

    masive.forEach((item, index) => newArr.push(item * index))

    return newArr
}
const arr = squareArr()
console.log(arr);

const squareArrr = (arr) => arr.map(item => item * 2)

console.log(masive);
console.log(squareArrr(masive));




        //  Фільтр масиву з додаванням елементу!!

const Monika = 'Monika'
const female = 'female'
const male = 'male'
const Nick = 'Nick'


const people = [
    {
        name: Monika,
        sex: female
    },
    {
        name: Nick,
        sex: male
    },
    {
        name: Monika,
        sex: female
    },
    {
        name: Nick,
        sex: male
    },
    {
        name: 'Monika',
        sex: female
    },
    {
        name: Nick,
        sex: male
    },
    {
        name: Monika,
        sex: female
    },
    {
        name: Nick,
        sex: male
    },
]
function change() {
    people.forEach((human, i) => {
        if ('male' == human.sex) {
            human.name += ' beautiful'

        } else if ('female' == human.sex) {
            human.name += ' headsome'
        }
    })
}
change()
console.log(people);


// // //    Різні евенти!!

const text = document.querySelector('.text')
text.addEventListener('keypress', function (event) {
    console.log(text.value);
})

text.addEventListener('mouseover', function (event) {
    console.log('maouse over');
})
text.addEventListener('mouseleave', function (event) {
    console.log('maouse leave');
})

const check = document.querySelector('.check')
check.addEventListener('change', function (event) {
    console.log(check.checked);
})

document.addEventListener('mousemove', (event) => {
// console.log(event.screenX, event.screenY);
})

document.addEventListener('contextmenu', (event) => {
console.log(event.screenX, event.screenY);
})
document.addEventListener('ondrag', (event) => {
console.log(event.screenX, event.screenY);
})








