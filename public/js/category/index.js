//show link
$(function () {
    let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);
    $.extend(true, $.fn.dataTable.defaults, {
        order: [[1, 'desc']],
        pageLength: 100,
    });
    $('.datatable-Speaker:not(.ajaxTable)').DataTable({buttons: dtButtons})
})

// deleted at
$(function () {
    $(document).on('click', '.action_delete', actionDelete);

});

//Deleted at
function actionDelete(event) {
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    Swal.fire({
        title: 'Are you sure?',
        text: "Data category children and product relationship will deleted!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'GET',
                url: urlRequest,
                success: function (data) {
                    if (data.code == 200) {
                        that.parent().parent().remove();
                        setTimeout(function(){// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 3000);
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                },
                error: function () {
                    if (data.code == 500) {
                        that.parent().parent().remove();
                        Swal.fire(
                            'Deleted!',
                            'Your file has not been deleted.',
                            'Failed!'
                        )
                    }
                }
            });
        }
    })
}
