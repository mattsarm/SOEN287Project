let currentPage = window.location.pathname

console.log(currentPage);

if(currentPage.endsWith("MainStudent.html") || currentPage.endsWith("participantView.html") ||
    currentPage.endsWith("AsseStudent.html") || currentPage.endsWith("StatsView.html") ||
    currentPage.endsWith("GradeBreakdownStudent.html") || currentPage.endsWith("Marks.html")){
    fetch('NavStudent.html')
        .then(res => res.text())
        .then(text => {
            let oldelem = document.querySelector("script#replace_with_navbar");
            let newelem = document.createElement("div");
            newelem.innerHTML = text;
            oldelem.parentNode.replaceChild(newelem,oldelem);
        })
}
else if(currentPage.endsWith("MainTeacher.html") || currentPage.endsWith("TeacherGrade.html")
    || currentPage.endsWith("TeacherGrade2.html")  || currentPage.endsWith("TeacherGrade3.html")
    || currentPage.endsWith("TeacherMidterm.html") || currentPage.endsWith("TeacherFinal.html")
    || currentPage.endsWith("Assessments.html") || currentPage.endsWith("Marks.html")){
    fetch('NavTeacher.html')
        .then(res => res.text())
        .then(text => {
            let oldelem = document.querySelector("script#replace_with_navbar");
            let newelem = document.createElement("div");
            newelem.innerHTML = text;
            oldelem.parentNode.replaceChild(newelem,oldelem);
        })
}
