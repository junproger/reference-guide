//[-1, 150, 160, 170, -1, -1, 180, 190]
// function sortByHeight(arr) {
//   return arr.sort((a, b) =>
//   {
//     return (a - b);
//   });
// }

// console.log(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180]));

// class ListNode {
//   constructor(x) {
//     this.value = x;
//     this.next = null;
//   }
// }

// function convertArrayToList(arr) {
//   return arr.reverse().reduce((acc, cur) => {
//     if (acc) {
//       const node = new ListNode(cur);
//       node.next = acc;
//       return node;
//     }

//     return new ListNode(cur);
//   }, null);
// }

// const initial = convertArrayToList([3, 1, 2, 3, 4, 5]);

// function removeKFromList(l, k) {
//   let current = l;
//   let head = current;
//   let prev = null;

//   while (current) {
//     if (current.value === k) {
//       if (prev) {
//         prev.next = current.next;
//         current = current.next;
//       } else {
//         current = current.next;
//         head = current;
//       }
//     } else {
//       prev = current;
//       current = current.next;
//     }
//   }
//   console.log(head);
//   return head;
// }

// removeKFromList(initial, 3);

function encodeLine(str) {
  // let arr = str.split('');
  // let obj = {};
  // let result = '';
  // for(let item of arr) {
  //   if(obj[item]) {
  //     obj[item]++;
  //   } else {
  //     obj[item] = 1;
  //   }
  // }
  // for(let key in obj) {
  //   if(obj[key] != 1) {
  //     result = result + obj[key] + key;
  //   } else {
  //     result = result + key;
  //   }
  // }
  // console.log(result);
  let arr = str.split('');
  let result = '';
  let temp = '';
  let count = 0;
  for(let i = 0; i < arr.length; i++) {
    if(i === 0) {
      temp = arr[i];
      count++;

    }
    else {
      if(arr[i] == arr[i - 1]) {
        count++;
      }
      else {
        if(count === 1) {
          result += temp;
        } else {
          result += count + temp;
        }
        count = 1;
        temp = arr[i];
      }
    }
  }
  console.log(result);
}

encodeLine('abbcca');