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
{num:1,name:'волк'}, 
{num:2, name: 'лиса'}
{num:3, name: 'test'}
];
let obj = animals[getRandomInt(0,2)];
let output = obj.num +' '+ obj.name;
alert(output); 
};
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
};
</script>
  </big>
</center>
