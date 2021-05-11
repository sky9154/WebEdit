var output = "";
$(document).ready(function(){
    var tag="",unit="",text="",id="",color="";
    $("#start").click(function(){
        tag=$('input:radio:checked[name="tag"]').val();
        unit=$('input:radio:checked[name="unit"]').val();

        if($("#text").val()!=""){text=$("#text").val()}
        else if($("#text").val()==""){text=""};

        if($("#id").val()!=""){id=$("#id").val()}
        else if($("#id").val()==""){id=""};

        if($("#color").val()!=""){color=$("#color").val()}
        else if($("#color").val()==""){color=""};

        if($("#size").val()!=""){size=$("#size").val()}
        else if($("#size").val()==""){size=""};

        if($("#title").val()!=""){title=$("#title").val()}
        else if($("#title").val()==""){title=""};

        if($("#url").val()!=""){url=$("#url").val()}
        else if($("#url").val()==""){url=""};

        output="<"+tag+">"+
        $("#copy").html(tag+text+id+color);
    });
});