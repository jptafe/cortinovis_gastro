function postWithFetch() {
    var fd = new FormData();
    fd.append('dish', dish.value);
    fetch('./api/api.php?action=order', 
    {   method: 'POST',
        body: fd,
        credentials: 'include'
    })
    .then(function(response) {
        if(response.status === 400) {
            console.log('not inserted');
            return;
        }
        if(response.status === 401) {
            console.log('no permission');
            return;
        }
        if(response.status === 501) {
            console.log('not implemented');
            return;
        }
        if(response.status === 202) {
            console.log('success');
            return;
        }
    }); 
    return false;
}


function getWithFetch() {
    
}