const letters = ['a', 'b', 'c'];
const user = {
    name: 'Tom',
    age: 18,
    sex: 'M',
};

for (let i = 0; i < letters.length; i++) {
    console.log(letters[i]);
}

const concstProp = (obj) => {
    let userArray = [];
    for (const key in obj) {
        userArray.push(obj[key]);
    }
    return userArray;
};

console.log(concstProp(user));

const obj = {
    key1: 'value',
    'key 2': 'value',
}


const prop = 'third';

const obj1 = {
    firstKey: 'value',
    'second key': 'value',
    [prop + 'Key']: 'value',
}

console.log(obj1);