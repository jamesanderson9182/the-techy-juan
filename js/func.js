
function isEmpty(val){
	return !(val ? true : false);
}

function isValidEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function isValidName(name) {
   return (/^[A-z ]+$/.exec(name));
}

function removeTags(string, array){
  return array ? string.split("<").filter(function(val){ return f(array, val); }).map(function(val){ return f(array, val); }).join("") : string.split("<").map(function(d){ return d.split(">").pop(); }).join("");
  function f(array, value){
    return array.map(function(d){ return value.includes(d + ">"); }).indexOf(true) != -1 ? "<" + value : value.split(">")[1];
  }
}

function removeHtml(string){
    charArr   = string.split('');
    resultArr = [];
    htmlZone  = 0;
    quoteZone = 0;
    for( x=0; x < charArr.length; x++ ){
     switch( charArr[x] + htmlZone + quoteZone ){
       case "<00" : htmlZone  = 1;break;
       case ">10" : htmlZone  = 0;resultArr.push(' ');break;
       case '"10' : quoteZone = 1;break;
       case "'10" : quoteZone = 2;break;
       case '"11' : 
       case "'12" : quoteZone = 0;break;
       default    : if(!htmlZone){ resultArr.push(charArr[x]) }
     }
    }
    return resultArr.join('');
}