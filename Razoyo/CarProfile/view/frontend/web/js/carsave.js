define(['jquery', 'Magento_Ui/js/modal/modal', 'mage/url'],
  function($, modal, urlBuilder) {
    $(document).ready(function() {


      $("#submit").click(function() {
        var checkedCarsData = [];

        $(".car").each(function() {
          if ($(this).is(":checked")) {
            var carData = {
              id: $(this).val(),
              year: $(this).closest(".cardata").find(".year").text().trim().split('=')[1].trim(),
              make: $(this).closest(".cardata").find(".make").text().trim().split('=')[1].trim(),
              model: $(this).closest(".cardata").find(".model").text().trim().split('=')[1].trim(),
              email: $(this).closest(".cardata").find(".email").text().trim().split('=')[1].trim(),
              imageUrl: $(this).closest(".cardata").find(".image").attr("src")
            };

            checkedCarsData.push(carData);
          }
        });
        var savecarurl = urlBuilder.build('customercar/account/savecardetails');
        jQuery.ajax({
          url: savecarurl,
          type: "POST",
          data: {
            checkedCarsData: checkedCarsData
          },
          showLoader: true,
          cache: false,
          success: function(response) {
            if (response.success == 'true') {
              $('#response').html('<span style="color: green ;">' + response.message + '</span>');
              setTimeout(function() {
                window.location.href = (window.location.origin + '/customercar/account/customcarlist');
              }, 3000);
            } else {
              $('#response').html('<span style="color: red ;">' + response.message + '</span>');
            }
          }
        });
      });



    });
  }
);