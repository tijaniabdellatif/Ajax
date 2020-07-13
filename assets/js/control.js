
const group = document.querySelectorAll(".group");
const groups = Array.from(group);
groups.forEach(gr =>{
const p = Array.from(gr.children);

p.forEach(elemt =>{

 Array.from(elemt.children).filter(e =>{
  
  if(e.className === 'errno')
  {

     var el = document.querySelector('.error');
    const str = String(e.innerText);
    const string = str.split("");
    console.log(string);

    (function animate() {
      string.length > 0 ? el.innerHTML += string.shift() : clearTimeout(running);
      var running = setTimeout(animate, 90);
      e.style.visibility='visible';
    
    })();
    
    return e;
  }
 })
})

});










