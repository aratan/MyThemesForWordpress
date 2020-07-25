/* Manupulando Css y Boostrap con JavaScript */
const formularioBuscar = document.querySelector('#searchform #s');
formularioBuscar.className += ' form-control mb-2';

/* Manupulando id de Css y Boostrap con JavaScript */
const btnBuscar = document.querySelector('#searchsubmit ');
btnBuscar.className += ' btn btn-primary btn-block mb-2';

/* Manupulando Clase de Css y Boostrap con JavaScript */
const lista = documet.querySelector(' .vic_ar ul');

lista.className += ' list-group';

lista.querySelectorAll('li').forEach(item => {
    item.className += ' list-group-item';
})







