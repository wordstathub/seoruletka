<?php
<br/>
<br/>
<br/>
<br/>
<br/><br/>
<br/>
<center>
<br/>
<br/>
<br/>
<big>
<script>
"use strict";
window.onload = function(){
let animals = [
{num:1,name:'волк',descr:'серый зубастый'}, 
{num:2, name: 'лиса', descr:'рыжая хитрая'}
];
let obj = animals[getRandomInt(0,2)];
let output = obj.num +' '+ obj.name +' '+ obj.descr;
alert(output); 
};
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
};
// Возвращает случайное целое число между min (включительно) и max (не включая max)
</script>
  </big>
</center>
