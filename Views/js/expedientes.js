
$(document).ready(function(){

    $.get('/expedientes/all')
    .done(function(data){
        let resp = JSON.parse(data);
        resp.forEach(item => {
            showExp(item)
        });
    })

    $.get('/cat/all')
    .done(function(data){
        let resp = JSON.parse(data);
        resp.forEach(item => {
            $("#categoria").append(`<option value="${item.id}">${item.nombre}</option>`)
        })
    })

    $("#search").click(function(ev){
        ev.preventDefault();
        $.post('/pacientes/get', $("#formSh").serialize())
        .done(function(data){
            let resp = JSON.parse(data);
            if(resp === false){
                $("#bodyExp").html("No existe");
            }else{
                $("#bodyExp").html("");
                showExp(resp);
            }
        })
    })

    $("#clean").click(function(ev){
        ev.preventDefault()
        $("#bodyExp").html(" ");
        $.get('/expedientes/all')
        .done(function(data){
            let resp = JSON.parse(data);
            resp.forEach(item => {
                showExp(item)
            });
        })
        assign("#srnombre", " ");
        assign("#srapellidos", " ");
    })

})

function showExp(item){
    $("#bodyExp").append(`
        <tr class="py-2 text-center">
            <th scope="row">${item.id}</th>
            <td>${item.nombre}</td>
            <td>${item.contacto}</td>
            <td>${item.citas}</td>
            <td>${item.categoria}</td>
            <td>${item.status}</td>
            <td>
                <button style="background: #01AA9E !important" id="${item.id}" class="text-light fw-bold btn btn-light fs-6" data-bs-toggle="modal" data-bs-target="#modalExp"><ion-icon name="file-tray-stacked-outline"></ion-icon></button>
            </td>
        </tr>
    `)
}

function calcularEdad(fecha) {
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();
    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    return edad;
}

function assign(element, value){
    $(element).val(value);
}
let id = 0;
let modalExp = document.getElementById('modalExp')
modalExp.addEventListener('show.bs.modal', function(event){
    id = event.relatedTarget.id;
    $.get(`/expedientes/show/${id}`)
    .done(function(data){
        let date = new Date();
        let resp = JSON.parse(data);
        $("#titleExp").text(resp.nombre+" "+resp.apellidos);
        $("#dateExp").text(date.toLocaleDateString());
        assign("#nombre", resp.nombre+" "+resp.apellidos)
        assign("#nacimiento", resp.fecha_nacimiento);
        assign("#edad", calcularEdad(resp.fecha_nacimiento));
        assign("#correo", resp.correo);
        assign("#celular", resp.telefono);
        assign("#ocupacion", resp.ocupacion);
        assign("#carrera", resp.carrera);
        assign("#observaciones", resp.observaciones);
        assign("#diagnostico", resp.diagnostico);
    });

    $.get(`/citas/show/${id}`)
    .done(function(data){
        let resp = JSON.parse(data);
        $("#citas").html(" ");
        if(resp.length > 0){
            resp.forEach(item => {
                $("#citas").append("<option>"+item.fecha_cita+"</option>")
            })
        }else{
            $("#citas").append("<option>No ha agendado cita</option>")
        }
    });
})

$("#saveExp").click(function(event){
    $.post(`/expedientes/modify/${id}`, $("#formExp").serialize())
    .done(function(data){
        let resp = JSON.parse(data);
        let toast = $("#toastExp");
        $(".toast-body").text(resp.msg);
        if(resp.err){
            toast.addClass("bg-danger");
            toast.removeClass("bg-success");
        }else{
            toast.addClass("bg-success");
            toast.removeClass("bg-danger");
        }
        toast.show();
        setTimeout(function(){
            toast.hide();
        }, 2000);
    })
    
})
