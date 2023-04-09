function addnew()
{
    let newNode =
	document.createElement("textarea");
    newNode.classList.add("form-control");
    newNode.classList.add("skField");
    newNode.classList.add("mt-2");
    newNode.setAttribute("rows",1);
    newNode.setAttribute("placeholder","enter here");

    let weob = document.getElementById("sk");
    let weaddbutton = document.getElementById("we");
    weob.insertBefore(newNode,weaddbutton);
}
function insert()
{
   let make = 
   document.createElement("textarea");
   make.classList.add("form-control");
   make.classList.add("bgField");
    make.setAttribute("rows",1);
    make.setAttribute("placeholder","enter here");
    
    let direct = document.getElementById("bd");
    let gole = document.getElementById("begin");
    direct.insertBefore(make,gole);
}
function insert1()
{
   let make = 
   document.createElement("textarea");
   make.classList.add("form-control");
   make.classList.add("bdField");
    make.setAttribute("rows",1);
    make.setAttribute("placeholder","enter here");
    
    let direct = document.getElementById("bg");
    let gole = document.getElementById("be");
    direct.insertBefore(make,gole);
}
function insert2()
{
   let make = 
   document.createElement("textarea");
   make.classList.add("form-control");
   make.classList.add("crField");
    make.setAttribute("rows",1);
    make.setAttribute("placeholder","enter here");
    
    let direct = document.getElementById("cr");
    let gole = document.getElementById("crname");
    direct.insertBefore(make,gole);
}

function genCV()
{
   let na = document.getElementById("name");
   let naam= document.getElementById("nameField").value;
   na.innerHTML = naam;
   document.getElementById("phone").innerHTML = document.getElementById("contactField").value;
   document.getElementById("addr").innerHTML = document.getElementById("AddressField").value;
   document.getElementById("about").innerHTML = document.getElementById("aboutField").value;
   document.getElementById("fcb").innerHTML = document.getElementById("fbField").value;
   document.getElementById("ist").innerHTML = document.getElementById("instaField").value;
   document.getElementById("lkd").innerHTML = document.getElementById("liField").value;
   document.getElementById("prof").innerHTML = document.getElementById("prField").value;
   let skl = document.getElementsByClassName("skField");
    let str = "";
    for(let e of skl)
    {
        str = str + `<li> ${e.value} </li>`;
    }
    document.getElementById("skilist").innerHTML = str;

    let cer = document.getElementsByClassName("crField");
    let str1 = "";
    for(let c of cer)
    {
        str1 = str1 + `<li> ${c.value} </li>`;
    }
    document.getElementById("certlist").innerHTML = str1;

    
    let wkr = document.getElementsByClassName("bgField");
    let str2 = "";
    for(let i of wkr)
    {
        str2 = str2 + `<li> ${i.value} </li>`;
    }
    document.getElementById("expr").innerHTML = str2;

    
    let edi = document.getElementsByClassName("bdField");
    let str3 = "";
    for(let j of edi)
    {
        str3 = str3 + `<li> ${j.value} </li>`;
    }
    document.getElementById("educ").innerHTML = str3;

    document.getElementById("form").style.display="none";
}

function printCV()
{
    document.getElementById("print").style.display="none";
    window.print();
}