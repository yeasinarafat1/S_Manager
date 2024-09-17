/**
 * Event listener for the search input field.
 * When the user types something in the field, this function is called.
 * It searches for the typed text in the table and shows or hides the rows accordingly.
 * @param {Event} event the event object
 */
searchInp.addEventListener("input", function (event) {
  let searchTerm = event.target.value.toLowerCase();
  let table = document.getElementById("myTable");
  let rows = table.getElementsByTagName("tr");
  let noSearchResult = document.getElementById("noSearchResult");

  // Iterate through table rows (skip header row)
  let isNoSearch = [];
  let SearchResultText = document.getElementById("SearchResult");
  if (searchTerm) {
    SearchResultText.classList.remove("hidden");
    SearchResultText.innerHTML = `Searching For <span class="fw-bold text-success">${searchTerm}</span>`;
  } else {
    SearchResultText.classList.add("hidden");
  }

  for (let i = 1; i < rows.length; i++) {
    let row = rows[i];
    let cells = row.getElementsByTagName("td");
    let rowText = "";
    for (let j = 0; j < cells.length; j++) {
      rowText += cells[j].textContent.toLowerCase() + " ";
    }

    // Check if the search term is found in the row text
    if (rowText.includes(searchTerm)) {
      row.style.display = "";
      isNoSearch.push(rowText);
    } else {
      row.style.display = "none";
    }
  }
  console.log(isNoSearch.length);

  if (isNoSearch.length === 0) {
    noSearchResult.classList.remove("hidden");
  } else {
    noSearchResult.classList.add("hidden");
  }
});

/**
 * Event listener for the CTRL + K shortcut.
 * When the user presses CTRL + K, this function is called.
 * It focuses the search input field.
 * @param {Event} event the event object
 */
document.addEventListener("keydown", function (event) {
  if (event.ctrlKey && event.key === "k") {
    event.preventDefault();
    searchInp.focus();
  }
});
