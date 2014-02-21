/* 
 * Adds honeypot field to contact form
 */
var Honeypotfield = Class.create();
Honeypotfield.prototype = {
  initialize: function(field_name, class_name) {
    var form = document.getElementById('contactForm');
    form.innerHTML = form.innerHTML + '<div class="'+class_name+'"><input name="'+field_name+'" value="" /></div>';
  }
};