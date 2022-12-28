let dt1 = new Date('2021-5-20');
let dt2 = new Date('2021-7-10');
console.log((dt2.getTime() - dt1.getTime()) / (24 * 60 * 60 * 1000));
console.log(dt2);
dt2.setTime(dt2.getTime() - (11 * 24 * 60 * 60 * 1000));
console.log(dt2);