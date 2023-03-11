$("#login").click(function (vs) {
  vs.preventDefault();
  $.ajax({
    url: "http://localhost:9000/login.php",
    crossdomain: true,
    method: "post",
    data: $("#login_form").serialize(),
    success: function (response) {
      console.log(response);
      window.location.href = "profile.html";
    },
  });
});
