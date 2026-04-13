function loadSection(section) {
    const baseUrl = "{{ url('/api') }}"; // Automatically becomes http://insdb2.udhayam.in/api
    
    $.ajax({
        url: `${baseUrl}/${section}`,
        method: 'GET',
        success: function(response) {
            // Load into the specific div based on your 6-div structure
            $(`#div-${section}`).html(response);
        },
        error: function() {
            console.error("Failed to load " + section);
        }
    });
}
