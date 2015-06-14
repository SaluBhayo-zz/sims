function getQuantity(){
        var iItem0 = $("#item").val();
        var iComp0 = $("#company").val();
        var iQuan0 = $("#quantity").val();
        checkData = 'item1='+ iItem0 + '&comp1='+ iComp0;
        $.ajax({
            type: "POST",
            url: "check_quantity.php",
            data: checkData,
            cache: false,
            success: function(result){
                totQuantity = parseInt(result);
                if(totQuantity < iQuan0)
                {
                    alert("Available Stock is less than the quantity you entered!\nAvailable Quanity is " + totQuantity);
                    document.getElementById("quantity").value = "";        
                }
            }
        }); 
    }   