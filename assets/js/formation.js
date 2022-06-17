$(document).ready(function (){
   $('#Formation_urlFormation').parents('.field-url').addClass('d-none');

   $('#Formation_formationCnfpt').on('click', function (){
      console.log($(this));
      if($(this).is(':checked')){
         $('#Formation_urlFormation').parents('.field-url').removeClass('d-none');
      } else {
         $('#Formation_urlFormation').parents('.field-url').addClass('d-none');
      }
   })
})