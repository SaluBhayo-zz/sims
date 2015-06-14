$(document).ready(function(){
        $("#addItem").click(function(){
        var dataString;
        var iItem = $("#item").val();
        var iComp = $("#company").val();
        var iQuantity = $("#quantity").val();


        var icthidden = $("#cthidden").val();
   

        if(icthidden=="Retailer")
        {  
            //alert("in retailer"); 
            var iPrice = $("#price").val();
            dataString = 'item1='+ iItem + '&comp1='+ iComp + '&quantity1='+ iQuantity + '&price1='+ iPrice + '&cthidden1='+ icthidden;
        }
        else if(icthidden == "Returning Customer")
        {
            var icname = $("#cname").val();
            var iaddress = $("#address").val();
            dataString = 'item1='+ iItem + '&comp1='+ iComp + '&quantity1='+ iQuantity + '&cthidden1='+ icthidden + '&cname1='+ icname + '&address1='+ iaddress;
        }
            // AJAX Code To Submit Form.
            $.ajax({
            type: "POST",
            url: "creates-bill.php",
            data: dataString,
            cache: false,
            success: function(result){
            var res = result.split(" ");    
            var table = document.getElementById("item_table");
            var rowCount=table.rows.length;
            var row = table.insertRow(rowCount);
            var itemheader = row.insertCell(0);
            var itemname = row.insertCell(1);
            var company = row.insertCell(2);
            var prices = row.insertCell(3);
            var quantity = row.insertCell(4);
            var totalprice = row.insertCell(5);
            itemheader.innerHTML = rowCount;
            itemname.innerHTML = iItem;
            company.innerHTML = iComp;
            prices.innerHTML = res[0];
            quantity.innerHTML = res[1];
            totalprice.innerHTML = res[2];
            totprice = parseInt(res[2]); 
            var nt = $("#nta").val();        
            nti = parseInt(nt);
            nti = nti+totprice;
            document.getElementById("nta").value = nti;
            document.getElementById("item").value = "";
            document.getElementById("company").value = "";
            document.getElementById("quantity").value = "";
            document.getElementById("price").value = "";
        }
        });
        
        return false;
    });
});