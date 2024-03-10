function exportData(button, url) {
    if (confirm("Are you sure you want to Export this data?")) {
        $(button).prop('disabled', true);
        updateProgressBar(0);
        // Show the export progress bar
        $('.export-progress').show();
        $('.export-progress').find('.status').text('Beginning export...');

        exportDataImpl(button, url, 0, 0, null);
    }
}

function exportDataImpl(button, url, totalExported, batch, data) {
    $.ajax({
        url: getBatchUrl(url, batch), // Pass the URL with the batch parameter
        type: "POST", // Adjust the request method as needed
        dataType: 'json',
        data: data,
        success: function(response) {
            // Handle success response, if needed
            totalExported += response.exportCount;

            // Update progress
            var progress = Math.round((totalExported / response.totalCount) * 100);
            updateProgressBar(progress);
            $('.export-progress').find('.status').text('Processed ' + totalExported + ' out of ' + response.totalCount + ' records.');

            if (totalExported < response.totalCount) {
                // Continue exporting recursively with the next batch
                setTimeout(function(){
                    exportDataImpl(button, url, totalExported, batch + 1, response); // Pass the incremented batch
                }, 1000);
            } else {
                $('.export-progress').find('.status').text("Export completed");
                $(button).prop('disabled', false);
            }
        },
        error: function(xhr, status, error) {
            // Handle error, if any
            $('.export-progress').find('.status').text("Error: " + error);
            $(button).prop('disabled', false);
        }
    });
}

// Function to get the URL for the next batch export
function getBatchUrl(currentUrl, batch) {
    // Your logic to determine the URL for the next batch
    var separator = (currentUrl.indexOf('?') > -1) ? '&' : '?';
    var nextBatchUrl = currentUrl + separator + "batch=" + batch;
    return nextBatchUrl;
}

// Function to update the progress bar
function updateProgressBar(progress) {
    $('.export-progress').find('.progress-bar').css('width', progress + '%').attr('aria-valuenow', progress);
    $('.export-progress').find('.progress-bar .sr-only').text(progress + '% Complete');
}