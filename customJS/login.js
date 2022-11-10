function myFunction(){
    if (document.getElementById("inlineRadio2").checked){
        document.getElementById("pageLink").href = "MainTeacher.html";
    }

    if(document.getElementById("inlineRadio1").checked){
        document.getElementById("pageLink").href = "MainStudent.html";
    }
}