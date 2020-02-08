(function($) {
    App.init();
    TableEditable.init();
    mytotal = 0;
    $("#productid").on("change",function(){
     x = $("#productid").val().split("-");
        if(x.length>1){
             $.ajax({
             url:'/sales/getproductprice/'+x[0],
             type:'get'
         })
         .done(function(data){
             console.log("Hasil",data);
             $("#productprice").val(data);
         })
         .fail(function(err){
             console.log("Err",err);
         });
        }
    })
    $("#savetemporary").on("click",function(){
        productstr = $('#productid').val().split('-');
        id = productstr[0];
        amount = $("#sample_editable_1x tbody tr").length;
        lengthadd = 0;
        lengthadd = amount + 1;
        temp = $('#productprice').val()*$('#productamount').val();
        str = '<tr tot='+temp+' id='+id+' amount='+$('#productamount').val()+' price='+$('#productprice').val()+'>';
        str+= '<td class="">'+lengthadd+'</td>';
        str+= '<td>'+$('#productid').val()+'</td>';
        str+= '<td>'+numberWithCommas($('#productprice').val())+'</td>';
        str+= '<td>'+$('#productamount').val()+'</td>';
        str+= '<td class="center">'+numberWithCommas($('#productprice').val()*$('#productamount').val())+'</td>';
        str+= '<td><button class="btn deleteRow" onclick="deleteRow($(this))">Delete</button></td>';
        str+= '</tr>';
        console.log("Invoked");
        mytotal*=1;
        mytotal = mytotal+temp;
        $("#total").html(numberWithCommas(mytotal));
        $("#sample_editable_1x").prepend(str);
    });
    $(".closedialog").on("click",function(){});
     deleteRow = function(par){
         console.log("Par",par);

         tr = par.parent().parent();
         tot = tr.attr('tot')*1;
         console.log("Tot",tot);
         console.log("MyTotal",mytotal);
         mytotal*=1;
         mytotal = mytotal-tot;
         $("#total").html(numberWithCommas(mytotal));
         par.parent().parent().remove();
     }
    function numberWithCommas(x) {
         var parts = x.toString().split(",");
         parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
         return parts.join(",");
     }
     $("#btnpay").on("click",function(){
        $("#sample_editable_1x tbody tr").each(function(){
            console.log("TR Tot",$(this).attr("tot"));
            save({
                    tableName:'cashier',
                    data:{
                    id:$(this).attr("id"),
                    amount:$(this).attr("amount"),
                    price:$(this).attr("price")}
                },function(res){
                console.log(res);
            });
        });
     })
     save = function(obj,callback){
         console.log("Keys",Object.keys(obj));
         $.ajax({
             url:'/main/save',
             data:obj,
             type:'POST',
             //dataType:'json'
         })
         .done(function(res){
             console.log('AJAX result',res);
         });
         callback("done");
     }
     $('.selectall').on("click",function(){
         $(this).select();
     })
 }(jQuery));
