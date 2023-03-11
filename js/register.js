$("#register").click(function (vs) {
  var valid = this.form.checkValidity();
  if (valid) {
    var username = $("#username").val();
    var number = $("#number").val();
    var gender = $("#gender").val();
    var education = $("#education").val();
    var email = $("#email").val();
    var password = $("#password").val();

    vs.preventDefault();
    $.ajax({
      type: "POST",
      url: "http://localhost:9000/register.php",
      crossDomain: true,
      data: {
        username: username,
        number: number,
        gender: gender,
        education: education,
        email: email,
        password: password,
      },
      success: function (data) {
        Swal.fire({
          title: "Successful",
          //   text: data,
          type: "success",
        });
        window.location.href = "login.html";
      },

      error: function (data) {
        Swal.fire({
          title: "Errors",
          text: "There were errors while saving the data.",
          type: "error",
        });
      },
    });
  } else {
  }
});
// method: "post",
//     data: $("#register_form").serialize(),
//     success: function (response) {
//       console.log(response);
//       window.location.href = "login.html";
//     },
//   });
// });
