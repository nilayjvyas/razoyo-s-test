define(['jquery', 'Magento_Ui/js/modal/modal', 'mage/url'],
  function($, modal, urlBuilder) {
    $(document).ready(function() {

      $("#delete_button").click(function() {
        var checkedDeleteCarsData = [];

        $(".car_delete").each(function() {
          if ($(this).is(":checked")) {
            var carData = {
              id: $(this).val()
            };

            checkedDeleteCarsData.push(carData);
          }
        });
        var deletecarurl = urlBuilder.build('customercar/account/deletecar');

        jQuery.ajax({
          url: deletecarurl,
          type: "POST",
          data: {
            checkedDeleteCarsData: checkedDeleteCarsData
          },
          showLoader: true,
          cache: false,
          success: function(response) {
            if (response.success == 'true') {

              window.location.href = (window.location.origin + '/customercar/account/customcarlist');
              $('#response').html('<span style="color: green ;">' + response.message + '</span>');
            } else {
              $('#response').html('<span style="color: red ;">' + response.message + '</span>');
            }
          }
        });
      });



    });
  }
);