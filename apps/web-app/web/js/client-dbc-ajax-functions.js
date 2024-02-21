// client-dbc-ajax-functions.js

function validateRecords(button, fileName) {
    $(button).prop('disabled', true);
    $(button).removeClass(function(index, className) {
        return (className.match(/\bbtn-\S+/g) || []).join(' ');
    }).addClass('btn-primary');

    $.ajax({
        url: '/client-dbc/validate?fileName=' + fileName,
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            $(button).prop('disabled', false);
            console.log(response);
            if (response) {
                if (response.updateCount === 0) {
                    $(button).addClass('btn-success').removeClass('btn-primary');
                } else if (response.updateCount > 0) {
                    $(button).addClass('btn-warning').removeClass('btn-primary');
                }
            }
        },
        error: function(xhr, status, error) {
            $(button).prop('disabled', false);
            console.error(error);
            alert('An error occurred while validating records.');
        }
    });
}

function importData(button, fileName) {
    $(button).prop('disabled', true);
    $(button).removeClass(function(index, className) {
        return (className.match(/\bbtn-\S+/g) || []).join(' ');
    }).addClass('btn-primary');

    $.ajax({
        url: '/client-dbc/import?fileName=' + fileName,
        type: 'POST',
        dataType: 'json',
        success: function(response) {
            $(button).prop('disabled', false);
            console.log(response);
            if (response && response.success) {
                $(button).addClass('btn-success').removeClass('btn-primary');
            }
        },
        error: function(xhr, status, error) {
            $(button).prop('disabled', false);
            console.error(error);
            alert('An error occurred while importing data.');
        }
    });
}
