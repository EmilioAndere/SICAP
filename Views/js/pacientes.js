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

function assign(elementId, value){
    $("#"+elementId).val(value);
}

let id = 0;
let modalExp = document.getElementById('modalPaciente')
modalExp.addEventListener('show.bs.modal', function(event){
    id = event.relatedTarget.id;
    $.get(`/pacientes/find/${id}`)
    .done(function(data){
        let resp = JSON.parse(data);
        assign('nombre', resp.nombre);
        assign('apellidos', resp.apellidos);
        assign('nacimiento', resp.fecha_nacimiento);
        $("input[type=radio][value="+resp.sexo+"]").prop("checked", true);
        assign("direccion", resp.direccion);
        assign("telefono", resp.telefono);
        assign("correo",resp.correo);
        assign("carrera", resp.carrera);
        assign("ocupacion", resp.ocupacion);
        $("#civil > option[value="+resp.estado_civil+"]").prop("selected", true);
        $("#categoria > option[value='"+resp.categoria_id+"']").prop("selected", true);
        $("#tipo > option[value='"+resp.tipo_id+"']").prop("selected", true);
        $("#status > option[value='"+resp.status_id+"']").prop("selected", true);
        assign("desc",resp.extra);
    })
})

$("#changePaciente").click(function(ev){
    ev.preventDefault();
    $.post('/pacientes/change')
    .done(function(data){
        console.log(data);
    })
})