'use strict';
$(document).ready(function () {
  validate.extend(validate.validators.datetime, {
    parse: function (value, options) {
      return +moment.utc(value);
    },
    format: function (value, options) {
      var format = options.dateOnly ? "DD/MM/YYYY" : "DD/MM/YYYY";
      return moment.utc(value).format(format);
    }
  });
  var constraints = {
    email: {
      presence: true,
      email: true
    },
    password: {
      presence: true,
      length: {
        minimum: 5
      }
    },
    "repeat-password": {
      presence: true,
      equality: {
        attribute: "password",
        message: "^Mật khẩu nhập lại không đúng"
      }
    },
    name: {
        presence: true,
        length: {
            minimum: 3,
            maximum: 50
        },
    },
    addon: {
      presence: true,
      length: {
        minimum: 3,
        maximum: 20
      },
     
    },
    maxlength: {
      presence: true,
      numericality: {
        onlyNumeric: true,
        greaterThan: 10
      }
    },
    minlength: {
      presence: true,
      numericality: {
        onlyNumeric: true,
        lessThan: 5
      }
    },
    gender: {
      presence: true,
    }
  };
  var form = document.querySelector("form#main");
  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    handleFormSubmit(form);
  });
  var inputs = document.querySelectorAll("input, textarea, select")
  for (var i = 0; i < inputs.length; ++i) {
    inputs.item(i).addEventListener("change", function (ev) {
      var errors = validate(form, constraints) || {};
      showErrorsForInput(this, errors[this.name]);
    //   console.log(console.errors)
    });
  }

  function handleFormSubmit(form, input) {
    var errors = validate(form, constraints);
    showErrors(form, errors || {});
    if (!errors) {
      showSuccess();
    }
  }

  function showErrors(form, errors) {
    _.each(form.querySelectorAll("input[name], select[name]"), function (input) {
      showErrorsForInput(input, errors && errors[input.name]);
    });
  }

  function showErrorsForInput(input, errors) {
    var formGroup = closestParent(input.parentNode, "form-group"),
      messages = formGroup.querySelector(".messages");
    resetFormGroup(formGroup);
    if (errors) {
      formGroup.classList.add("has-error");
      _.each(errors, function (error) {
        addError(messages, error, input);
      });
    } else {
      formGroup.classList.add("has-success");
    }
  }

  function closestParent(child, className) {
    if (!child || child == document) {
      return null;
    }
    if (child.classList.contains(className)) {
      return child;
    } else {
      return closestParent(child.parentNode, className);
    }
  }

  function resetFormGroup(formGroup) {
    formGroup.classList.remove("has-error");
    formGroup.classList.remove("has-success");
    _.each(formGroup.querySelectorAll(".text-danger"), function (el) {
      el.parentNode.removeChild(el);
    });
  }

  function addError(messages, error, input) {
    var block = document.createElement("p");
    block.classList.add("text-danger");
    block.classList.add("error");
    block.innerText = error;
    messages.appendChild(block);
    $(input).addClass("input-danger");
  }

  function showSuccess() {
    alert("Success!");
  }
 
});