// A $( document ).ready() block.
$( document ).ready(function() {
    $('.targetDiv').hide();
    $('#nameSection').show();
    $(function(){
      $('.showSingle').click(function(){
            $('.targetDiv').hide();
            $('#'+$(this).attr('target')+"Section").show();
      });
    });

    $('.group').hide();
    $('#S60').show();
    $('#car').change(function () {
    $('.group').hide();
    $('#'+$(this).val()).show();
   })
   $('.colorGroup').hide();
   $('#s90T5Color').show();
   $('#s90Model').change(function () {
   $('.colorGroup').hide();
   $('#'+$(this).val()).show();
  })
});
