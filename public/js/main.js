
    let listDeleteButton = document.querySelectorAll('.btn.btn-danger')
    for (const button of listDeleteButton) {
        button.onclick = function(e) {
            let confirm = confirm('Bạn có chắc muốn xoá???');
            
            if (confirm) {
                e.target.href = '/admin/delete'
            } else {
                e.target.preventDefault()
            }
        }
    }
