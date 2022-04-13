
function register(ev){
    ev.preventDefault();
    $.post('/auth/register', $("#formReg").serialize())
    .done(function(data){
        let resp = JSON.parse(data)
        setTimeout(function(){
            if(!resp.err){
                $("#alert-login").removeClass("alert-danger");
                $("#alert-login").addClass("alert-success");
                setTimeout(function(){
                    $(location).attr('href', "/login");
                },1000);
            }else{
                $("#alert-login").removeClass("alert-success");
                $("#alert-login").addClass("alert-danger");
            }
        
            $("form input").each(function() { this.value = '' });
            $("#alert-login").text(" "+resp.msg);
        },2000);
    })
}

$("#btnReg").click(function(event){
    $("#alert-login").append('<div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div>');
    register(event);
})