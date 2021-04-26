function copy(id) {
    let name =  document.getElementById(id);
    name.select();
    name.setSelectionRange(0, 99999);

    if(document.execCommand("copy")) {
        alert('Item copiado!');
    }
}