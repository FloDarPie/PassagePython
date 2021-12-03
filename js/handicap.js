document.getElementById('submit').addEventListener('click', submit);
function submit() {
    var values = [];
    var cbs = document.forms['handi'].elements['handicap'];
    for(var i=0,cbLen=cbs.length;i<cbLen;i++){
        if(cbs[i].checked){
            values.push(cbs[i].value);
        }
    }
    alert(location.host + '?' + values.join('=true&')+'=true');
}
function openForm() {
    document.getElementById("popupForm").style.display = "block";
}
function closeForm() {
    document.getElementById("popupForm").style.display = "none";
}
