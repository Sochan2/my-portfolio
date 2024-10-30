// Script 10.7- register.js
// This script validates a form.

// Function called when the form is submitted.
// Function validates the form data.


function validateForm(e) {
  'use strict';

  // Get the event object:
if (typeof e == 'undefined') e = window.event;

  // Get form references:
var firstName = U.$('firstName');
var lastName = U.$('lastName');
var email = U.$('email');
var phone = U.$('phone');
var city = U.$('city');
var state = U.$('state');
var zip = U.$('zip');
var terms = U.$('terms');

// Flag variable:
var error = false;

// Validate the first name:
if (/^[A-Z \.\-']{2,20}$/i.test(firstName.value)) {
  removeErrorMessage('firstName');
  addCorrectMessage('firstName', ' ✓');
  
} 
else {
  removeCorrectMessage('firstName');
  addErrorMessage('firstName', 'Please enter your first name.');
  error = true;
  
}

//last namae
if (/^[A-Z \.\-']{2,20}$/i.test(lastName.value)) {
  removeErrorMessage('lastName');
  addCorrectMessage('lastName', ' ✓');
  
} 
else {
  removeCorrectMessage('lastName');
  addErrorMessage('lastName', ' ✓');
  error = true;

}

// Validate the email address:
if (/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(email.value)) {
  removeErrorMessage('email');
  addCorrectMessage('email', ' ✓');


} else {
  removeCorrectMessage('email');
  addErrorMessage('email', ' ✓');
  error = true;
}

// Validate the phone number:
if (/\d{3}[ \-\.]?\d{3}[ \-\.]?\d{4}/.test(phone.value)) {
  removeErrorMessage('phone');
  addCorrectMessage('phone', ' ✓');

} else {
  removeCorrectMessage('phone');
  addErrorMessage('phone', ' ✓');
  error = true;
}

if (/^[A-Z \.\-']{2,20}$/i.test(city.value)) {
  removeErrorMessage('city');
  addCorrectMessage('city', ' ✓');

} 
else {
  removeCorrectMessage('city');
  addErrorMessage('city', ' ✓');
  error = true;

}

// Validate the state:
if (state.selectedIndex != 0) {
  removeErrorMessage('state');
  addCorrectMessage('state', ' ✓');
} 
else {
  removeCorrectMessage('state');
  addErrorMessage('state', ' ✓');
  error = true;
}

// Validate the zip code:
if (/\d{4}/.test(zip.value)) {
  removeErrorMessage('zip');
  addCorrectMessage('zip', ' ✓');
} 
else {
  removeCorrectMessage('zip');
  addErrorMessage('zip', ' ✓');
  error = true;
}

  // If an error occurred, prevent the default behavior:
if (error) {

  // Prevent the form's submission:
    if (e.preventDefault) {
        e.preventDefault();
    } else {
        e.returnValue = false;
    }
    return false;
  
}
  
} // End of validateForm() function.

// Function called when the terms checkbox changes.
function addcheck(id, check){
'use strict';
var elem2 = document.getElementById(id);
var newId2 = id + 'corect';
var span2 = document.getElementById(newId2);
if(span2){
  span2.firstChild.value = check;
}
else{
  span2 = document.createElement('span');
  span2.id =newId2;
  span2.className = 'correct';
  span2.appendChild(document.createTextNode(check));
}

elem2.parentNode.appendChild(span2);

}
// Function enables and disables the submit button.
function toggleSubmit() {
'use strict';
  
// Get a reference to the submit button:
var submit = U.$('submit');

// Toggle its disabled property:
if (U.$('terms').checked) {
  submit.disabled = false;
} else {
  submit.disabled = true;
}

} // End of toggleSubmit() function.

// Establish functionality on window load:
window.onload = function() {
  'use strict';

// The validateForm() function handles the form:
  U.addEvent(U.$('theForm'), 'submit', validateForm);

// Disable the submit button to start:
U.$('submit').disabled = true;

// Watch for changes on the terms checkbox:
  U.addEvent(U.$('terms'), 'change', toggleSubmit);

// Enbable tooltips on the phone number:
U.enableTooltips('phone');
U.enableTooltips('zip');
  
};