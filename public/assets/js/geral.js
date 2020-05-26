const DIR_ROUTER = 'router'

const ajaxGet = (url) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: 'GET',
            url: `${DIR_ROUTER}/${url}`,
            dataType: 'json',
            success: function (resp) {
                resolve(resp)
            },
            error: function (err) {
                reject(err)
            }
        })
    })
}