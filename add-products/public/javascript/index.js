function confirmDelete(event){
    event.preventDefault();
    if(confirm('Are you sure you want to delete this computer?')){
        document.getElementById('delete').submit();
    }
}