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

$('#editDoctors').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var slug = button.data('id')

    $.ajax({
        url: '/doctors/edit/' + slug,
        type: 'GET',
        success: function(data) {
            var modal = $('#editDoctors')
            modal.find('form').attr('action', '/doctors/' + data.dr_slug)
            modal.find('#dr_name').val(data.dr_name)
            modal.find('#dr_phone').val(data.dr_phone)
        }
    });
})
