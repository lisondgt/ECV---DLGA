$(document).ready(function (){
   $('#Formation_urlFormation').parents('.field-text').addClass('d-none');

   $('#Formation_formationCnfpt').on('click', function (){
      console.log($(this));
      if($(this).is(':checked')){
         $('#Formation_urlFormation').parents('.field-text').removeClass('d-none');
      } else {
         $('#Formation_urlFormation').parents('.field-text').addClass('d-none');
      }
   })
})