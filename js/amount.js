function setAmount(){
        var tA = $("#T_Amount").val();
        var rcA = $("#Rec_Amount").val();
		var bID = $("#billID").val();
        var customerID = $("#cid").val();
		var prevAmount = $("#remainA").val();
		var totA = parseInt(tA);
		var recA = parseInt(rcA);
		var remA = totA - recA;
 		document.getElementById("Rem_Amount").value = remA;
		var remA1 = remA + parseInt(prevAmount);
		updateData = 'customerid='+ customerID + '&remAmount='+ remA + '&remAmount1='+ remA1 + '&recAmount='+ recA + '&billid='+ bID;
		$.ajax({
            type: "POST",
            url: "update_amounts.php",
            data: updateData,
            cache: false,
            success: function(result){
                    alert(result);      
					
            }
        });
		
 } 