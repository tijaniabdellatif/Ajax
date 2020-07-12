const errno = document.querySelector('.errno');
console.log(errno)
 const str = String(errno.innerText);

  const string = str.split("");
  console.log(string);
  var el = document.querySelector('.error');

  (function animate(){

    string.length > 0 ? el.innerHTML += string.shift() : clearTimeout(running);
    el.style.display="block";
    
    var running = setTimeout(animate , 90);

  })();
