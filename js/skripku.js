function Login() {
  var user = document.getElementById("Username").value;
  var pass = document.getElementById("Password").value;

  if (user == "mimin" && pass == "mimin123") {
    alert("Selamat Datang Mimin, Anda Administrator");
  } else if (user == "budi" && pass == "budi123") {
    alert("Selamat Datang Budi, Anda Operator");
  } else {
    alert("Maaf Anda Gagal Login");
  }
}
