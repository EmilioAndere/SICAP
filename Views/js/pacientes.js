$(document).ready(function(){
    $.get('/pacientes/all')
    .done(function(data){
        let resp = JSON.parse(data);
        console.log(resp);
        resp.forEach(item => {
            fillTable(item);
        })
    })
})

function fillTable(item){
    $("#bodyPac").append(`
    <tr class="py-2 text-center">
        <th scope="row">${item.id}</th>
        <td>${item.nombre}</td>
        <td>${item.telefono}</td>
        <td>${item.carrera}</td>
        <td>${item.categoria}</td>
        <td>${item.tipo}</td>
        <td>${item.status}</td>
        <td>
            <button style="background: #01AA9E !important" id="${item.id}" class="text-light fw-bold btn btn-light fs-6" data-bs-toggle="modal" data-bs-target="#modalPaciente"><ion-icon name="document-text-outline"></ion-icon></button>
        </td>
    </tr>
        `)
}

$("#changePaciente").click(function(ev){
    ev.preventDefault();
    $.post('/pacientes/change')
    .done(function(data){
        console.log(data);
    })
})