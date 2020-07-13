const disp = document.querySelector('.alert-success');
const p = document.createElement('p');
const content = document.createTextNode('Login Now !!');
const m = p.appendChild(content);
disp.appendChild(m);

setTimeout(() => {

    disp.style.display = 'none';

}, 4000);



