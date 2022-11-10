let currentPage = window.location.pathname

console.log(currentPage);

if(currentPage == "/MainStudent.html" || currentPage == "/participantView.html"){
    fetch('NavStudent.html')
.then(res => res.text())
.then(text => {
    let oldelem = document.querySelector("script#replace_with_navbar");
    let newelem = document.createElement("div");
    newelem.innerHTML = text;
    oldelem.parentNode.replaceChild(newelem,oldelem);
})
}
else if(currentPage == "/MainTeacher.html" || currentPage == "/TeacherGrade.html"){
    fetch('NavTeacher.html')
    .then(res => res.text())
    .then(text => {
        let oldelem = document.querySelector("script#replace_with_navbar");
        let newelem = document.createElement("div");
        newelem.innerHTML = text;
        oldelem.parentNode.replaceChild(newelem,oldelem);
    })
}