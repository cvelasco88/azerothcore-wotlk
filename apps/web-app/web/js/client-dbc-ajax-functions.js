// client-dbc-ajax-functions.js

var fileName = window.fileName;
var batchSize = window.batchSize;
var totalRecords = window.totalRecords;
var processedRecords = 0;

function validateRecords(button) {
    $(button).prop('disabled', true);
    $(button).removeClass(function(index, className) {
        return (className.match(/\bbtn-\S+/g) || []).join(' ');
    }).addClass('btn-primary');

    validateRecordsImpl(button, 0);
}

function importRecords(button) {
    $(button).prop('disabled', true);
    $(button).removeClass(function(index, className) {
        return (className.match(/\bbtn-\S+/g) || []).join(' ');
    }).addClass('btn-primary');

    importRecordsImpl(button);
}

function updateProgress(target) {
    var percentComplete = Math.min((processedRecords / totalRecords) * 100, 100);
    $(target).find('.progress-bar').css('width', percentComplete + '%').attr('aria-valuenow', percentComplete);
    $(target).find('.progress-bar .sr-only').text(percentComplete + '% Complete');
}

function validateRecordsImpl(button, offset) {
    $.ajax({
        url: '/client-dbc/validate?fileName=' + fileName,
        type: 'POST',
        data: {offset: offset, limit: batchSize},
        dataType: 'json',
        success: function(response) {
            processedRecords += response.insertCount + response.updateCount;
            var progress = $('.validation-progress');
            $(progress).find('.status').text('Processed ' + processedRecords + ' out of ' + totalRecords + ' records.');

            updateProgress(progress);

            if (processedRecords < totalRecords) {
                validateRecordsImpl(button, offset + batchSize);
            } else {
                $('.status').text('Validation complete.');
                $(button).prop('disabled', false);
                if (response) {
                    if (response.updateCount === 0) {
                        $(button).addClass('btn-success').removeClass('btn-primary');
                    } else if (response.updateCount > 0) {
                        $(button).addClass('btn-warning').removeClass('btn-primary');
                    }
                }
            }
        },
        error: function(xhr, status, error) {
            $('.status').text('Error occurred: ' + error);
            $(button).prop('disabled', false);
        }
    });
}

function importRecordsImpl(button, offset) {
    $.ajax({
        url: '/client-dbc/import?fileName=' + fileName,
        type: 'POST',
        data: {offset: offset, limit: batchSize},
        dataType: 'json',
        success: function(response) {
            processedRecords += response.insertCount + response.updateCount;
            var progress = $('.import-progress');
            $(progress).find('.status').text('Processed ' + processedRecords + ' out of ' + totalRecords + ' records.');

            updateProgress(progress);

            if (processedRecords < totalRecords) {
                importRecordsImpl(button, offset + batchSize);
            } else {
                $('.status').text('Import complete.');
                $(button).prop('disabled', false);
                if (response) {
                    if (response.updateCount === 0) {
                        $(button).addClass('btn-success').removeClass('btn-primary');
                    } else if (response.updateCount > 0) {
                        $(button).addClass('btn-warning').removeClass('btn-primary');
                    }
                }
            }
        },
        error: function(xhr, status, error) {
            $('.status').text('Error occurred: ' + error);
            $(button).prop('disabled', false);
        }
    });
}