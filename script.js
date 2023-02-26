
document.getElementById('submitButton').onclick = function() {
    if (document.getElementById('fever').checked) {
        if("Yes" === document.getElementById('fever').value){
            if("Yes" === document.getElementById('cough').value){
                if("Yes" === document.getElementById('tierdness').value){
                    if("Yes" === document.getElementById('breathlessness').value){
                        alert("conselt to doctor");
                    }
                    alert("conselt to doctor and apply for covid check");
                }
                alert("apply for covid check");
            }
            alert("apply for covid check");
        }
        else{
            alert("You are ok");
        }
            
    }
    
}