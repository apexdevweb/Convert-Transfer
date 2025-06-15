const soldeInput = document.getElementById("soldadd");
const validate = document.getElementById("addfounds");
const foundsForm = document.getElementById("formfound");
const foundsList = document.getElementById("listing");
const typeOfDevice = document.getElementById("devicetype");
const deviceTab = [];

foundsForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const founds = soldeInput.value.trim();
  const deviceType = typeOfDevice.value.trim();

  let allinOne = founds + " " + deviceType;

  deviceTab.push(allinOne);

  foundsList.innerText = deviceTab;
});
