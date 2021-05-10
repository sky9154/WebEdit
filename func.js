//html js
var output = "";
function linkstart() {
    var style = "";
    var units = "";
    var urls = "";
    var form = document.getElementById("form");
    for (var i = 0; i < form.tag.length; i++) {
        if (form.tag[i].checked) {
            tags = form.tag[i].value;
        };
    };
    for (var i = 0; i < form.unit.length; i++) {
        if (form.unit[i].checked) {
            units = form.unit[i].value;
        };
    };
    const kirito = document.forms['form'];
    const texts = kirito.elements.text.value;
    const id = kirito.elements.id.value;
    const color = kirito.elements.color.value;
    const size = kirito.elements.size.value;
    const title = kirito.elements.title.value;
    urls = kirito.elements.url.value;
    style = "' style='" + "color:" + color + '; font-size:' + size + units + ";'";
    output = '<' + tags + " id='" + id + style + "title='" + title + "' href='" + urls + "'>" + texts + '</' + tags + '>';
    document.getElementById('put').innerHTML = output;
}
function show() {
    alert('代碼為：' + output);
}
// css js
var code="",Class="",Height="",Width="",Color="",
FontFamily="",FontSize="",BgColor="",BgImage="",BdStyle="",
BdRadius="",BdColor="",p="";
$(document).ready(function(){
    $("#start").click(function(){
    code="",Class="",Height="",Width="",Color="",
    FontFamily="",FontSize="",BgColor="",BgImage="",BdStyle="",
    BdRadius="",BdColor="",p;
    if($("#Class").val()==""){alert("class必須輸入內容")}
    else{Class="."+$("#Class").val()+"{";
    if($("#Height").prop("checked")){Height="height:"+$("#Heights").val()+";";}
    if($("#Width").prop("checked")){Width="width:"+$("#Widths").val()+";";}
    if($("#Color").prop("checked")){Color="color:"+$("#Colors").val()+";";}
    if($("#FontFamily").prop("checked")){FontFamily="font-family:"+$("#FontFamilys").val()+";";}
    if($("#FontSize").prop("checked")){FontSize="font-size:"+$("#FontSizes").val()+";";}
    if($("#BgColor").prop("checked")){BgColor="background-color:"+$("#BgColors").val()+";";}
    if($("#BgImage").prop("checked")){BgImage="background-image:url("+$("#BgImages").val()+");";}
    if($("#BdStyle").prop("checked")){BdStyle="border-style:"+$("#BdStyles").val()+";";}
    if($("#BdRadius").prop("checked")){BdRadius="border-radius:"+$("#BdRadiuss").val()+";";}
    if($("#BdColor").prop("checked")){BdColor="border-color:"+$("#BdColors").val()+";";}
    code=Height+Width+Color+FontFamily+FontSize+BgColor+BgImage+BdStyle+BdRadius+BdColor;
    p="<p style='text-indent:-2em;'>}</p>";
    $("#show").html("<div style='"+code+"'>測試test</div>");
    }
    });
});
function css_show(){
    if($("#Height").prop("checked")){Height="<br>"+"height:"+$("#Heights").val()+";";}
    if($("#Width").prop("checked")){Width="<br>"+"width:"+$("#Widths").val()+";";}
    if($("#Color").prop("checked")){Color="<br>"+"color:"+$("#Colors").val()+";";}
    if($("#FontFamily").prop("checked")){FontFamily="<br>"+"font-family:"+$("#FontFamilys").val()+";";}
    if($("#FontSize").prop("checked")){FontSize="<br>"+"font-size:"+$("#FontSizes").val()+";";}
    if($("#BgColor").prop("checked")){BgColor="<br>"+"background-color:"+$("#BgColors").val()+";";}
    if($("#BgImage").prop("checked")){BgImage="<br>"+"background-image:url("+$("#BgImages").val()+");";}
    if($("#BdStyle").prop("checked")){BdStyle="<br>"+"border-style:"+$("#BdStyles").val()+";";}
    if($("#BdRadius").prop("checked")){BdRadius="<br>"+"border-radius:"+$("#BdRadiuss").val()+";";}
    if($("#BdColor").prop("checked")){BdColor="<br>"+"border-color:"+$("#BdColors").val()+";";}
    code=Class+Height+Width+Color+FontFamily+FontSize+BgColor+BgImage+BdStyle+BdRadius+BdColor+p;
    document.getElementById("Code").innerHTML=code;
}