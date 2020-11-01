$(document).ready(function () {
  //$(selector).inputmask("99-9999999");  //static mask
  $("#telefono").inputmask({ mask: "(999) 999-9999" }); //specifying options
  $("#celular").inputmask({ mask: "(999) 999-9999" }); //specifying options
  //$(selector).inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
});