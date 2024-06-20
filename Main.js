
$(document).ready(function () {
    $('#ceymulticall-form').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            url: ceFunction.ajaxurl,
            type: 'POST',
            data: $(this).serialize() + '&action=ceymulticall_handle_form',
            success: function (response) {
                showModal(response.message, response.success);
            },
            error: function () {
                showModal('An error occurred. Please try again.', false);
            }
        });
    });

    function showModal(message, success) {
        $('#ceymulticall-modal-description').text(message);
        const modalButtons = $('#ceymulticall-modal-buttons');
        modalButtons.empty();

        if (success) {
            modalButtons.append('<button>Button 1</button><button>Button 2</button>');
        }

        $('#ceymulticall-modal').css('display', 'block');
    }

    // Close modal when clicking on the close button or outside the modal
    $('.ceymulticall-close').on('click', function () {
        $('#ceymulticall-modal').css('display', 'none');
    });

    $(window).on('click', function (event) {
        if ($(event.target).is('#ceymulticall-modal')) {
            $('#ceymulticall-modal').css('display', 'none');
        }
    });
});
