        var counter = 0;
        $("#customertype").on('change', function () {
        counter++; 
        var e = document.getElementById("customertype");
        var cst = e.options[e.selectedIndex].text;
        document.getElementById("cthidden").value = cst;
        //alert(cst);
        if(counter == 1)
        {
        if(cst == 'Retailer')
        {   
            document.getElementById('divcst').style.display='none';
            document.getElementById('divadd').style.display='none'; 
            document.getElementById('divitm').style.display='block';
            document.getElementById('divcom').style.display='block';
            document.getElementById('divqty').style.display='block';
            document.getElementById('divprc').style.display='block';
        }
        else if(cst == "Returning Customer")
        {
            document.getElementById('divadd').style.display='block'; 
            document.getElementById('divitm').style.display='block';
            document.getElementById('divcst').style.display='block';
            document.getElementById('divcom').style.display='block';
            document.getElementById('divqty').style.display='block';
            document.getElementById('divprc').style.display='none';
        }
        else
        {
            document.getElementById('divadd').style.display='none'; 
            document.getElementById('divitm').style.display='none';
            document.getElementById('divcst').style.display='none';
            document.getElementById('divcom').style.display='none';
            document.getElementById('divqty').style.display='none';
            document.getElementById('divprc').style.display='none';
            alert("Please Select Customer Type");
        }
    }
    else if(counter > 1)
    {
        alert("Customer Type has been changed!\nAll the Data Removed and Start Entering Items again ");
        
        counter = 0;
        location.reload();
    }    
        
});