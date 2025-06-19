const displayHistory =document.querySelector(".display-history");
const display =document.querySelector(".display-input");
const tempResult =document.querySelector(".temp-result");
const number =document.querySelectorAll(".number");
const operation =document.querySelectorAll(".operation");
const clearAll =document.querySelector(".all-clear");
const clearLast =document.querySelector(".last-entity-clear");
const equal =document.querySelector(".equal");

let dis1num ="";
let dis2num ="";
let result =null;
let lastOperation ="";
let haveDot =false;

number.forEach((number) => {
    number.addEventListener("click", (e)=>{
        if (e.target.innerText === "." && !haveDot){
            console.log(e.target.innerText);
            haveDot=true;
        }else if (e.target.innerText === "." && haveDot){
            return;
        }  
        dis2num += e.target.innerText
        display.innerText =dis2num
    })
})

operation.forEach((operation) => {
    operation.addEventListener("click", (e)=>{
        if (!dis2num) return;
        haveDot = false;
        const operationName = e.target.innerText;
        if (dis1num &&dis2num &&lastOperation){
            mathOperation()
        } else {
            result = parseFloat(dis2num)
        }
        clearVar(operationName)
        lastOperation = operationName
    })
});

function clearVar(name = ""){
    dis1num += dis2num + " " +name + " ";
    displayHistory.innerHTML = dis1num
    display.innerHTML = ""
    dis2num = ""
    tempResult.innerText = result
}
function mathOperation (){
    if (lastOperation === "x") {
        result = parseFloat(result) *parseFloat(dis2num)
    } else if (lastOperation === "+") {
        result = parseFloat(result) +parseFloat(dis2num)
    } else if (lastOperation === "-") {
        result = parseFloat(result) -parseFloat(dis2num)
    }else if (lastOperation === "/") {
        result = parseFloat(result)/parseFloat(dis2num)
    } else if (lastOperation === "%") {
        result = parseFloat(result)%parseFloat(dis2num)
    }
}

equal.addEventListener("click", (e)=>{
    if(!dis1num || !dis2num) return;
    haveDot = false;
    mathOperation();
    clearVar();
    display.innerText = result;
    tempResult.innerText = "";
    dis2num = result
    dis1num=""
})

clearAll.addEventListener("click", () => {
    dis1num = "";
    dis2num = "";
    result = "";
    haveDot = false;
    displayHistory.innerText = "";
    display.innerText = "";
    tempResult.innerText = "";
    lastOperation = "";
});

clearLast.addEventListener("click",()=>{
    display.innerText =""
    dis2num=""
})