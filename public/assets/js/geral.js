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

const ajaxPost = (url, value) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            type: 'POST',
            url: `${DIR_ROUTER}/${url}`,
            dataType: 'json',
            data: { ...value },
            success: function (resp) {
                resolve(resp)
            },
            error: function (err) {
                reject(err)
            }
        })
    })
}

$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name]) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};