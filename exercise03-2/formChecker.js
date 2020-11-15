document.addEventListener('DOMContentLoaded', () => {
  main();
});

let p;
let a;
let g;
let radio7;
let radio3;
let radio1;

let uname;
let pword;

let items = [[0, 0, 0]];

let see = false;

function main(){
  setup();
  //set up reset button
  document.getElementById('reset').addEventListener('click', () => {
    setup();
  });

}


function roundUp(docO){
  docO.addEventListener("input", () => {
    docO.value = Math.ceil(docO.value);
  });
}

function setup(){

  //set default setup
  p = document.getElementById('propane');
  a = document.getElementById('accessories');
  g = document.getElementById('grill');
  radio7 = document.getElementById('s7');
  radio3 = document.getElementById('s3');
  radio1 = document.getElementById('s1');

  uname = document.getElementById('username');
  pword = document.getElementById('password');

  radio7.click();
  uname.value = "";
  pword.value = "";

  //reset items value
  for(let i = 0; i < items[0].length; i++){
    items[0][i] = 0;
  }
  p.value = 0;
  a.value = 0;
  g.value = 0;

  //set up see password button
  document.getElementById('seepassowrd').addEventListener('click', () => {
    if(see){
      see = false;
      pword.type = "password";
    }
    else{
      see = true;
      pword.type = "text"
    }
  });

  roundUp(p);
  roundUp(a);
  roundUp(g);

  console.log('setup called/reset called');
}

function updateItems(docO, arr, idx){
  arr[0][idx] = docO.value;
}

function validate(){
  //update
  updateItems(p, items, 0);
  updateItems(a, items, 1);
  updateItems(g, items, 2);

  let username = uname.value;
  let password = pword.value;
  //check email address
  if(!emailCheck(username)){
    return false;
  }

  //if password is blank
  if(password == ""){
    alert("Please enter password");
    return false;
  }

  //check number of items
  if(!itemsCheck()){
    return false;
  }

  //dont need to check radio buttons

  return true;
}

function itemsCheck(){
  for(let i = 0; i < items[0].length; i++){
    if(items[0][i] < 0){
      alert("Invalid number of item(s)");
      return false;
    }
  }
  return true;
}

function emailCheck(input){
  let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  if(reg.test(input) == false){
    alert("Invalid email address");
    return false;
  }
  return true;
}
