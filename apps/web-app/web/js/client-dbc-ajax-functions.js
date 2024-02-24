var fileName = window.fileName;
var batchSize = window.batchSize;
var totalRecords = window.totalRecords;
var processedRecords = 0;
var totalUpdateCount = 0;
var totalInsertCount = 0;
var totalErrorCount = 0;
// progress bar
var validateProgress = $('.validation-progress');
var importProgress = $('.import-progress');


function validateRecords(button) {
    // Reset total counts
    processedRecords = 0;
    totalUpdateCount = 0;
    totalInsertCount = 0;
    totalErrorCount = 0;

    $(button).prop('disabled', true);
    $(button).removeClass(function(index, className) {
        return (className.match(/\bbtn-\S+/g) || []).join(' ');
    }).addClass('btn-primary');
    $(validateProgress).show();

    validateRecordsImpl(button, 0);
}

function importRecords(button) {
    $(button).prop('disabled', true);
    $(button).removeClass(function(index, className) {
        return (className.match(/\bbtn-\S+/g) || []).join(' ');
    }).addClass('btn-primary');
    $(importProgress).show();

    importRecordsImpl(button, 0);
}

function updateProgress(target) {
    var percentComplete = Math.min((processedRecords / totalRecords) * 100, 100);
    $(target).find('.progress-bar').css('width', percentComplete.toFixed(2) + '%').attr('aria-valuenow', percentComplete.toFixed(2));
    $(target).find('.progress-bar .sr-only').text(percentComplete.toFixed(2) + '% Complete');
}

function validateRecordsImpl(button, batchIndex) {
    $.ajax({
        url: '/client-dbc/validate?fileName=' + fileName,
        type: 'POST',
        data: {batchIndex: batchIndex},
        dataType: 'json',
        success: function(response) {
            processedRecords += response.insertCount + response.updateCount;
            totalInsertCount += response.insertCount;
            totalUpdateCount += response.updateCount;
            totalErrorCount += response.errorCount;

            $(validateProgress).find('.status').text('Processed ' + processedRecords + ' out of ' + totalRecords + ' records.');

            updateProgress(validateProgress);

            if (processedRecords < totalRecords) {
                setTimeout(function() {
                    validateRecordsImpl(button, batchIndex+1);
                }, 1000);
            } else {
                $(validateProgress).find('.status').text('Validation complete.');
                $(button).prop('disabled', false);

                if (totalErrorCount > 0) {
                    $(button).addClass('btn-danger').removeClass('btn-primary');
                } else if (totalUpdateCount === 0) {
                    $(button).addClass('btn-success').removeClass('btn-primary');
                } else if (totalUpdateCount > 0) {
                    $(button).addClass('btn-warning').removeClass('btn-primary');
                }
            }
        },
        error: function(xhr, status, error) {
            $(validateProgress).find('.status').text('Error occurred: ' + error);
            $(button).prop('disabled', false);
        }
    });
}

function importRecordsImpl(button, batchIndex) {
    $.ajax({
        url: '/client-dbc/import?fileName=' + fileName,
        type: 'POST',
        data: {batchIndex: batchIndex},
        dataType: 'json',
        success: function(response) {
            processedRecords += batchSize;

            $(importProgress).find('.status').text('Processed ' + processedRecords + ' out of ' + totalRecords + ' records.');

            updateProgress(importProgress);

            if (processedRecords < totalRecords) {
                setTimeout(function() {
                    importRecordsImpl(button, batchIndex+1);
                }, 1000);
            } else {
                $(importProgress).find('.status').text('Import complete.');
                $(button).prop('disabled', false);
            }
        },
        error: function(xhr, status, error) {
            $(importProgress).find('.status').text('Error occurred: ' + error);
            $(button).prop('disabled', false);
        }
    });
}
