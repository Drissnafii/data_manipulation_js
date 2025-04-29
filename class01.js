let arr = [23, 23, 1, 12, 99, 2, 12, 2, 12, 6, 34, 23, 56, 23, 21];

let pair = [];
let impair = [];
for(let i = 0 ; i < arr.length ; i++) {
    if (arr[i] % 2 === 0) {
        pair.push(arr[i]);
    } else {
        impair.push(arr[i]);
    }
}
console.log("Les Nombres Impaires sont: ");
console.log(pair);
