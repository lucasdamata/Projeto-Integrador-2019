
//Seletor por ID
$("#tableCategoria").bootstrapTable();

$("#modal").modal();


$("#formularioCategoria").on("submit",function(event){
    
    //Cancelar o evento e evitar que o formulario seja enviado.
    event.preventDefault();

    var form = $(this);

    var options = {

        url : $(form).attr("action"),
        method: $(form).attr("method"),
        data: $(form).serialize(), //Recupera os dados do formulario
        success: function(data){

            M.toast({html:data});
            $("#modal").modal("close");
            $("#tableCategoria").bootstrapTable("refresh");
            $("#formularioCategoria input").val("");
        }

    };

    $.ajax(options);

});


function editarCategoriaFmt(idCategoria){
    return "<button onclick='editarCategoria("+idCategoria+")' class='waves-effect waves-light btn'>"+
                "<i class='material-icons'>edit</i>"+
           "</button>";
}



function excluirCategoriaFmt(idCategoria){
    return "<button onclick='excluirCategoria("+idCategoria+")' class='waves-effect waves-light btn'>"+
                "<i class='material-icons'>delete</i>"+
           "</button>";
}


function excluirCategoria(id){

    /*var options = {
        url : "/aulaphp/control/categoria/excluir.php",
        data: { idCategoria: id  },
        success: function(data){
            
            M.toast({message : data});
            $("#tableCategoria").bootstrapTable("refresh");
        }
    }
    
    $.ajax(options);*/
    
    //URL > Dados > Sucesso
    $.get("/Projeto-Integrador-2019/control/excluir.php",{idCategoria: id},
            function(data){
                M.toast({html : data});
                $("#tableCategoria").bootstrapTable("refresh");
            }
    );

}


function editarCategoria(id){

    $.getJSON("/Projeto-Integrador-2019/control/consulta.php",{idCategoria: id},
            function(data){
                
                $("#id").val(data.id);
                $("#descricaoP").val(data.descricaoPessoal);
                $("#descricaoC").val(data.descricaoCurso);
                $("#tituloC").val(data.tituloConteudo);
                $("#tituloCP").val(data.tituloCapitulo);

                M.updateTextFields();
                
            }
    );

}
