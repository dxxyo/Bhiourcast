function postData(form){
    fetch('script/post.php', {
        method: 'POST',
        body: new FormData(form)
    })
    .then(res => res.json())
    .then(res => {
        res ? alert('Pesan Berhasil Dikirim') : alert('Pesan Gagal Dikirim');
        location.reload();
    });

    return false;
}

function changeStatus(el, id, tb){
    el.parentNode.classList.remove('bg-blue-500');
    el.parentNode.classList.add('bg-green-500');
    
    fetch(`../script/post.php?type=change_status&id=${id}&table=${tb}`);
}