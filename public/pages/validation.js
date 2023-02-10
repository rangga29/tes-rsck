(function () {
  'use strict';
  window.addEventListener('load', function () {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

$('#editClinics').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var slug = button.data('id')

    $.ajax({
        url: '/clinics/edit/' + slug,
        type: 'GET',
        success: function(data) {
            var modal = $('#editClinics')
            modal.find('form').attr('action', '/clinics/' + data.cl_slug)
            modal.find('#cl_name').val(data.cl_name)
            modal.find('#cl_position').val(data.cl_position)
        }
    });
})
