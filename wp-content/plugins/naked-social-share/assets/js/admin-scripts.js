(function ($) {

    // Initialize the sorter box
    $('.sorter').each(function () {
        var id = jQuery(this).attr('id');
        $('#' + id).find('ul').sortable({
            items: 'li',
            placeholder: "placeholder",
            connectWith: '.sortlist_' + id,
            opacity: 0.6,
            update: function () {
                $(this).find('.sorter-input').each(function () {

                    var parentID = $(this).parent().parent().attr('id');
                    parentID = parentID.replace(id + '_', '');
                    var optionID = $(this).parent().parent().parent().attr('id');
                    var settingsID = $(this).parent().parent().parent().find('.nss-settings-key').val();

                    if (parentID == 'disabled') {
                        $(this).prop('name', '');
                    } else {
                        $(this).prop("name", settingsID + '[' + optionID + '][]');
                    }

                });
            }
        });
    });

    // Reset settings
    $('#nss-reset-settings').on('click', function (e) {
        if (!confirm(NSS.confirm_reset)) {
            return false;
        }

        var parentDiv = $(this).parent();
        var spinnerDiv = $('#nss-reset-progress');

        spinnerDiv.append('<span id="nss-spinner" class="spinner is-active"></span>');

        var data = {
            'action': 'naked_social_share_restore_default_settings',
            'tab': $(this).data('current-tab'),
            'section': $(this).data('current-section')
        };

        $.post(ajaxurl, data, function (response) {
            spinnerDiv.empty();

            if (response.success == true) {
                window.location.href = response.data;
            } else {
                console.log(response);
                parentDiv.append(data);
            }
        });
    });

})(jQuery);